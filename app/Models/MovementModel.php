<?php

namespace App\Models;

use CodeIgniter\Model;

class MovementModel extends Model
{
    protected $table = 'movement';

    protected $allowedFields = ['code'];

}