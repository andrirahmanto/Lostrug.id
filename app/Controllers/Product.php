<?php

namespace App\Controllers;

class Product extends BaseController
{

    public function index()
    {
        echo view('admin/product/index.php');
    }

    public function viewtable()
    {
        if ($this->request->isAJAX()) {
            $data['products'] = $this->product->findAll();
            $msg = [
                'data' => view('admin/product/table', $data)
            ];
            echo json_encode($msg);
        } else {
            exit('Sorry, the request could not be processed');
        }
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
                'name' => 'required|is_unique[product.product_name]',
                'price' => 'required|numeric',
                'stock' => 'required|numeric'
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
                    $image->move('assets/image');
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
