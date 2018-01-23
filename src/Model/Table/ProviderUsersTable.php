<?php

namespace App\Model\Table;

use App\Model\Entity\ProviderUser;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\Auth\DefaultPasswordHasher;

class ProviderUsersTable extends Table {

    public function initialize(array $config) {
        $this->addBehavior("Timestamp");
//        $this->hasMany('Users', [
//            'foreignKey' => 'user_id'
//        ]);
    }

    public function validationDefault(Validator $validator) {
        $validator->requirePresence('name', 'You must enter your name')
                ->add('name', [
                    'length' => [
                        'rule' => ['minLength', 6],
                        'message' => 'name need to be at least 6 characters long',
                    ]
                ])
                ->notEmpty('name', 'Please, enter your name !')
                ->notEmpty('email', 'Please, enter your email  !')
                ->add('email', [
                    'email' => [
                        'rule' => ['email'],
                        'message' => " Please, enter a valid email!"
                    ]
                ])
                ->notEmpty('gender', 'Please, select your gender !')
                ->notEmpty('qualification', 'Please, enter your Qualification !')
                ->notEmpty('birthdate', 'Please, enter valid bith date !')
                ->numeric('phone', 'Please, enter valid phone number !')
                ->notEmpty('address', 'Please, enter your address!')
                ->notEmpty('city', 'Please, select your city!');
        return $validator;
    }

    public function buildRules(RulesChecker $rules) {
        $rules->add($rules->isUnique(['email']));
        return $rules;
    }

}

?>