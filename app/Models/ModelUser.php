<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelUser extends Model
{
    protected $table      = 'user';
    protected $primaryKey = 'user_id';

    protected $allowedFields =
    [
        'user_name',
        'user_email'
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
}
