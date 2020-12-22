<?php

namespace App\Controllers;

class Order extends BaseController
{

    public function index()
    {
        $data['products'] = $this->product->findAll();
        echo view('admin/order/table.php', $data);
    }
}
