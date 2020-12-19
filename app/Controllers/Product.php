<?php

namespace App\Controllers;

class Product extends BaseController
{

    public function index()
    {
        $data['products'] = $this->product->findAll();
        echo view('admin/product/table.php', $data);
    }

    public function viewadd()
    {
        // if ($this->request->isAJAX()) {

        $msg = [
            'data' => view('admin/product/modaladd')
        ];

        echo json_encode($msg);
        // } else {
        //     exit('Maaf Tidak dapat di proses');
        // }
    }
}
