<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Utility\Text;

/**
 * ItNewsletter Entity
 *
 * @property int $id
 * @property string $newsletter_email
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property \Cake\I18n\FrozenTime $deleted
 * @property string $newsletter_token
 */
class ItNewsletter extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'newsletter_email' => true,
        'created' => true,
        'modified' => true,
        'deleted' => true,
        'newsletter_token' => true
    ];


    protected function _setNewsletterToken()
    {
       return Text::uuid();
    }

    
}
