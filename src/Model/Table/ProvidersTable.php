<?php

namespace App\Model\Table;

use App\Model\Entity\Provider;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\Auth\DefaultPasswordHasher;

class ProvidersTable extends Table {

    public function initialize(array $config) {
        $this->addBehavior("Timestamp");
//        $this->hasMany('Users', [
//            'foreignKey' => 'user_id'
//        ]);
    }

    public function validationDefault(Validator $validator) {
        $validator->requirePresence('fullname', 'You must enter your fullname')
                ->add('fullname', [
                    'length' => [
                        'rule' => ['minLength', 6],
                        'message' => 'fullname need to be at least 6 characters long',
                    ]
                ])
                ->notEmpty('fullname', 'Please, enter your fullname !')
                ->notEmpty('email', 'Please, enter your email  !')
                ->add('email', [
                    'email' => [
                        'rule' => ['email'],
                        'message' => " Please, enter a valid email!"
                    ]
                ])
                ->notEmpty('password', 'Please, enter your password !')
                ->add('password', [
                    'compare' => [
                        'rule' => ['compareWith', 'confirmPassword'],
                        'message' => "Password mismatch password confirm !"
                    ]
                ])
                ->numeric('phone', 'Please, enter valid phone number !');

        return $validator;
    }

    /**
     * Returns a rules checker object . It is used  for validating data
     * I used it her to check if email is unique 
     * */
    public function buildRules(RulesChecker $rules) {
        $rules->add($rules->isUnique(['email']));
        return $rules;
    }

    public function validationPassword(Validator $validator) {
        $validator
                ->add('old_password', 'custom', [
                    'rule' => function($value, $context) {
                        $user = $this->get($context['data']['id']);
                        if ($user) {
                            if ((new DefaultPasswordHasher)->check($value, $user->password)) {
                                return true;
                            }
                        }
                        return false;
                    },
                    'message' => 'The old password does not match the current password!',
                ])
                ->notEmpty('old_password');

        $validator
                ->add('password1', [
                    'length' => [
                        'rule' => ['minLength', 6],
                        'message' => 'The password have to be at least 6 characters!',
                    ]
                ])
                ->add('password1', [
                    'match' => [
                        'rule' => ['compareWith', 'password2'],
                        'message' => 'The passwords does not match!',
                    ]
                ])
                ->notEmpty('password1');
        $validator
                ->add('password2', [
                    'length' => [
                        'rule' => ['minLength', 6],
                        'message' => 'The password have to be at least 6 characters!',
                    ]
                ])
                ->add('password2', [
                    'match' => [
                        'rule' => ['compareWith', 'password1'],
                        'message' => 'The passwords does not match!',
                    ]
                ])
                ->notEmpty('password2');

        return $validator;
    }

}

?>