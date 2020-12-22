<?php

namespace App\Models;

use CodeIgniter\Model;

class conn_moveModel extends Model
{
    protected $table = 'conn_move';

    protected $allowedFields = ['mid', 'fid', 'db'];

    
}