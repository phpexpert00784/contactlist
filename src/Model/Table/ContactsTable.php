<?
// src/Model/Table/UsersTable.php
namespace App\Model\Table;

use Cake\ORM\Table;
class ContactsTable extends Table
{
    
    public function initialize(array $config)
    {
        $this->addBehavior('Timestamp', [
            'events' => [
                'Model.beforeSave' => [
                    'created_at' => 'new',
                    'updated_at' => 'always',
                ],
                'Orders.completed' => [
                    'completed_at' => 'always'
                ]
            ]
        ]);
    }
}