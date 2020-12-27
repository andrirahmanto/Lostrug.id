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

    public function viewedit()
    {
        if ($this->request->isAJAX()) {
            $product_id = $this->request->getVar('product_id');
            $product = $this->product->where('product_id', $product_id)->first();
            $data = [
                'id' => $product['product_id'],
                'name' => $product['product_name'],
                'info' => $product['product_info'],
                'price' => $product['product_price'],
                'stock' => $product['product_stock']
            ];
            $msg = [
                'success' => view('admin/product/modaledit', $data)
            ];
            echo json_encode($msg);
        } else {
            exit('Sorry, the request could not be processed');
        }
    }

    public function updateProduct()
    {
        if ($this->request->isAJAX()) {
            //validation
            $valid = $this->validate([
                'price' => 'numeric',
                'stock' => 'numeric'
            ]);

            // if not valid
            if (!$valid) {
                $msg = [
                    'error' => [
                        'price' => $this->validation->getError('price'),
                        'stock' => $this->validation->getError('stock')
                    ]
                ];
                // valid
            } else {
                // requst input id
                $id = $this->request->getVar('id');

                $image = $this->request->getFile('image');
                if ($image == '') {
                    $data = [
                        'product_name' => $this->request->getVar('name'),
                        'product_info' => $this->request->getVar('info'),
                        'product_price' => $this->request->getVar('price'),
                        'product_stock' => $this->request->getVar('stock'),
                    ];
                } else {
                    // detele old foto
                    $olddata = $this->product->find($id);
                    $oldimage = $olddata['product_image'];
                    if ($oldimage != NULL || $oldimage != '') {
                        unlink('assets/image/' . $oldimage);
                    };
                    $image->move('assets/image', 'product' . $id . '.' . $image->getExtension());
                    $imgname = $image->getName();
                    $data = [
                        'product_name' => $this->request->getVar('name'),
                        'product_info' => $this->request->getVar('info'),
                        'product_price' => $this->request->getVar('price'),
                        'product_stock' => $this->request->getVar('stock'),
                        'product_image' => $imgname
                    ];
                };


                $this->product->update($id, $data);

                $msg = [
                    'success' => 'Success Update Product'
                ];
            };


            echo json_encode($msg);
        } else {
            exit('Sorry, the request could not be processed');
        };
    }

    public function deleteProduct()
    {
        if ($this->request->isAJAX()) {
            $product_id = $this->request->getVar('product_id');
            // detele old foto
            $olddata = $this->product->find($product_id);
            $oldimage = $olddata['product_image'];
            if ($oldimage != NULL || $oldimage != '') {
                unlink('assets/image/' . $oldimage);
            };
            // delete data            
            $this->product->delete($product_id);
            $msg = [
                'success' => 'Success Delete Product'
            ];
            echo json_encode($msg);
        } else {
            exit('Sorry, the request could not be processed');
        }
    }
}
