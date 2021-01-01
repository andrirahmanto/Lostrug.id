<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelLog extends Model
{
    protected $table      = 'log';
    protected $primaryKey = 'log_id';

    protected $allowedFields =
    [
        'log_email',
        'log_role',
        'log_activity'
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = '';
    protected $deletedField  = '';
}
