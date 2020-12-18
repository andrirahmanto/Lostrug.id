<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelOrder extends Model
{
    protected $table      = 'order';
    protected $primaryKey = 'order_id';

    protected $allowedFields =
    [
        'user_id',
        'product_id',
        'order_key'
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
}
