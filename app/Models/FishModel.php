<?php

namespace App\Models;

use CodeIgniter\Model;

class FishModel extends Model
{
    protected $table = 'fish';

    protected $allowedFields = ['name', 'db', 'price', 'visibility'];

    public function getFish($id = false)
    {      
        if ($id === false) {
            return $this->findAll();
        }

        return $this->asArray()
            ->where(['id' => $id])
            ->first();              
    }
}
