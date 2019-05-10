<?php
// src/Model/Table/UsersTable.php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\ORM\RulesChecker;
use Cake\ORM\Rules\IsUnique;

class AgentsTable extends Table
{

    public function validationDefault(Validator $validator)
    {
        $validator->notEmpty('email', 'A username is required')
            ->notEmpty('password', 'A password is required')
            ->notEmpty('role', 'A role is required')
            ->add('role', 'inList', [
                'rule' => ['inList', ['admin', 'agent', 'disabled']],
                'message' => 'Please enter a valid role']);
        return $validator;
    }
    
    public function buildRules(RulesChecker $rules){
        $rules->add($rules->isUnique(['email'], 'Username has already been taken'));
        return $rules;
    }

}