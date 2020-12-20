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
        if ($this->request->isAJAX()) {
            $msg = [
                'data' => view('admin/product/modaladd')
            ];
            echo json_encode($msg);
        } else {
            exit('Sorry, the request could not be processed');
        }
    }

    public function createProduct()
    {
        if ($this->request->isAJAX()) {
            //validation
            $valid = $this->validate([
                'name' => 'is_unique[product.product_name]',
                'price' => 'numeric',
                'stock' => 'numeric'
            ]);

            // if not valid
            if (!$valid) {
                $msg = [
                    'error' => [
                        'name' => $this->validation->getError('name'),
                        'price' => $this->validation->getError('price'),
                        'stock' => $this->validation->getError('stock')
                    ]
                ];
                // valid
            } else {
                $image = $this->request->getFile('image');
                if ($image == '') {
                    $imgname = '';
                } else {
                    $image->move('image');
                    $imgname = $image->getName();
                };

                $data = [
                    'product_name' => $this->request->getVar('name'),
                    'product_info' => $this->request->getVar('info'),
                    'product_price' => $this->request->getVar('price'),
                    'product_stock' => $this->request->getVar('stock'),
                    'product_image' => $imgname
                ];

                $this->product->insert($data);

                $msg = [
                    'success' => 'Success Add Product'
                ];
            };


            echo json_encode($msg);
        } else {
            exit('Sorry, the request could not be processed');
        };
    }
}
