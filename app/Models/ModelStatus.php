<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelStatus extends Model
{
    protected $table      = 'status';
    protected $primaryKey = 'status_id';

    protected $allowedFields =
    [
        'status_keterangan'
    ];

    protected $useTimestamps = false;
}
