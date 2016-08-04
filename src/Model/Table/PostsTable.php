<?php

namespace App\Model_Table;

use Cake\ORM\Table;

class PostsTable extends Table
{
    public function initialize(array $config)
    {
        $this->addBehavior('Timestamp');
        
    }
}