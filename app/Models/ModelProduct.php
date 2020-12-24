<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelProduct extends Model
{
    protected $table      = 'product';
    protected $primaryKey = 'product_id';

    protected $allowedFields =
    [
        'product_name',
        'product_info',
        'product_image',
        'product_stock',
        'product_price'
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
}
