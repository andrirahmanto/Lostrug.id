<?php

namespace App\Controllers;

class Order extends BaseController
{
    public function index()
    {
        echo view('admin/tableorder.php');
    }
}
