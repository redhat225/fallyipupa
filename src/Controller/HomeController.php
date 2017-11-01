<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Network\Exception\ForbiddenException;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\Event\Event;
use Pheanstalk\Pheanstalk;
use App\Controller\AppController;
use Cake\Network\Exception;
use Cake\Filesystem\Folder;
use Cake\Filesystem\File;
use Aws\S3;
/**
 * Static content controller
 *
 * This controller will render views from Template/Pages/
 *
 * @link https://book.cakephp.org/3.0/en/controllers/pages-controller.html
 */
class HomeController extends AppController
{

    public function initialize(){
        parent::initialize();
        $this->loadComponent('RequestHandler');
        $this->loadComponent('Cookie');
    }

    public function beforeFilter(Event $event){
        parent::initialize($event);
        if(!$this->request->is('ajax'))
        {

            if(!$this->Cookie->check('banner'))
            {
                $this->Cookie->configKey('banner',[
                    'expires' => '+1 day',
                    'httpOnly' => true,
                ]);

                $this->Cookie->write('banner','undone');
            }
            else
                $this->Cookie->write('banner','done');

            $this->request->params['action'] = 'index';
        }


    }

    public function bannerState(){
        if($this->request->is('ajax')){

            try{
                $banner_state = $this->Cookie->read('banner');
                $this->RequestHandler->renderAs($this, 'json');

                $this->set(compact('banner_state'));
                $this->set('_serialize',['banner_state']);
            } catch(Exception $e){
                 throw new Exception\NotFoundException(__('Not Found'));
            }

        }
    }


    public function index(){
    }

    public function wellcome(){
        if($this->request->is('get')){
            sleep(5);
            try{
                $config = [
                    'version' => 'latest',
                    'region' => 'eu-west-2',
                    'credentials' => Configure::read('awsCredentials')
                ];

                $params = [
                    'Bucket' => 'fallyipupa',
                    'Prefix' => 'pool_0/'
                ];

                $S3Client = new S3\S3Client($config);
                $command = $S3Client->getCommand('ListObjects', $params);
                $trigger = $S3Client->execute($command);
                $contents = $trigger['Contents'];
                if($contents)
                {
                    $this->set(compact('contents'));
                }
                else
                    throw new Exception\NotFoundException(__('Not Found'));
            }catch(Exception $e){
                throw new Exception\BadRequestException(__('Not Found'));
            }

        }
    }

    public function loadMore(){
        if($this->request->is('ajax')){
            if($this->request->is('get')){
                try{
                    $prefix = $this->request->query['prefix'];
                    $config = [
                        'version' => 'latest',
                        'region' => 'eu-west-2',
                        'credentials' => Configure::read('awsCredentials')
                    ];

                    $params = [
                        'Bucket' => 'fallyipupa',
                        'Prefix' => $prefix
                    ];

                    $S3Client = new S3\S3Client($config);
                    $command = $S3Client->getCommand('ListObjects', $params);
                    $trigger = $S3Client->execute($command);
                    $contents = $trigger['Contents'];

                    if($contents)
                    {
                        $this->set(compact('contents'));
                    }
                    else
                        throw new Exception\NotFoundException(__('Not Found'));
                }catch(Exception $e){
                    throw new Exception\BadRequestException(__('Not Found'));
                }



            }   
        }
    }

}
