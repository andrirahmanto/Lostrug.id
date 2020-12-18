<?php

namespace App\Controllers;

class Product extends BaseController
{

    public function index()
    {
        $data['products'] = $this->product->findAll();
        echo view('admin/product/table.php', $data);
    }
}
