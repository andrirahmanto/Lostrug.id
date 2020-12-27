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
        'order_key',
        'order_numberphone',
        'order_address',
        'order_size',
        'order_amount',
        'order_ongkir',
        'status_id',
        'order_total_price',
        'order_payment',
        'order_payment_method',
        'order_payment_image',
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
}
