<?php

namespace App\Model\Entity;

use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Entity;

/**
 * ProviderUser Entity
 *
 * @property int $id
 * @property int $domain_id
 * @property int $prd_code_sl
 * @property string $prd_code
 * @property int $provider_id
 * @property string $prd_role_code
 * @property string $user_type
 * @property string $student_code
 * @property string $username
 * @property string $password_hash
 * @property string $email
 * @property string $first_name
 * @property string $middle_name
 * @property string $last_name
 * @property string $designation
 * @property string $address1
 * @property string $address2
 * @property string $street
 * @property bool $online
 * @property bool $int_local_address
 * @property string $login_string
 * @property string $token
 * @property string $mobile
 * @property \Cake\I18n\FrozenDate $dob
 * @property string $postcode
 * @property string $state
 * @property string $country
 * @property string $description
 * @property string $profile_image
 * @property string $emp_code
 * @property string $json_form_data
 * @property string $active
 * @property string $deleted
 * @property \Cake\I18n\FrozenDate $effective_date
 * @property \Cake\I18n\FrozenDate $expiry
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Domain $domain
 * @property \App\Model\Entity\Provider $provider
 * @property \App\Model\Entity\ProviderStudent[] $provider_students
 */
class Provider extends Entity {

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
        '*' => true,
        'id' => false
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'token'
    ];

    protected function _setPassword($password) {
         return (new DefaultPasswordHasher)->hash($password);
    }

}
