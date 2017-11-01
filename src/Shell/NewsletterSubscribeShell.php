<?php 
namespace App\Shell;

use Cake\Console\Shell;
use Cake\Mailer\MailerAwareTrait;
use Cake\Mailer\Email;
use Pheanstalk\Pheanstalk;

class NewsletterSubscribeShell extends Shell
{
  use MailerAwareTrait;

  public function main()
  {
    $this->listen();
  }

  public function listen()
  {
    $client = new Pheanstalk('127.0.0.1');
    $client->watch('NewsletterSubscribeTubeFally');

    while($job = $client->reserve()){
      $message =json_decode($job->getData(),true);


          $status = $this->send($message['newsletter']);
          if($status)
          {
            $client->delete($job);
            $this->out('Job Delete');
          }
          else
          {
            $client->bury($job);
            $this->out('Job Burried');

          }
        
    }
  }

  public function send($newsletter){    
     try
         {
            $email = new Email('fally_main_profile');
            $email->to($newsletter['newsletter_email'])
            ->subject('Fally Ipupa - Inscription Newsletter 🎫')
            ->template('newsletter_subscribe','blank')
            ->emailFormat('html')
            ->viewVars(['newsletter'=>$newsletter])
            ->send();
              return true;
          }catch(Exception $e){
            return false;
          }
  }
}