<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelAdmin extends Model
{
    protected $table      = 'admin';
    protected $primaryKey = 'admin_id';

    protected $allowedFields =
    [
        'admin_name',
        'admin_email',
        'admin_password'
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
}
