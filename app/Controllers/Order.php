<?php

namespace App\Controllers;

class Order extends BaseController
{

    public function index()
    {
        $data['orders'] = $this->order->findAll();
        echo view('admin/order/index.php', $data);
    }

    public function viewtable()
    {
        if ($this->request->isAJAX()) {
            $orders = $this->order->orderBy('order_id', 'DESC')->findAll();
            // $orders = $orders->orderBy('order_id', 'DESC');
            $array_orders = [];
            foreach ($orders as $key => $order) {
                $user = $this->user->find($order['user_id']);
                $order['order_user'] = $user;
                $product = $this->product->find($order['product_id']);
                $order['order_product'] = $product;
                $status = $this->status->find($order['status_id']);
                $order['order_status'] = $status;
                array_push($array_orders, $order);
            }
            $data['orders'] = $array_orders;
            $msg = [
                'data' => view('admin/order/table', $data)
            ];
            echo json_encode($msg);
        } else {
            exit('Sorry, the request could not be processed');
        }
    }

    public function viewedit()
    {
        if ($this->request->isAJAX()) {
            $order_id = $this->request->getVar('order_id');
            $order = $this->order->where('order_id', $order_id)->first();
            $order['order_product'] = $this->product->find($order['product_id']);
            $order['order_user'] = $this->user->find($order['user_id']);
            $order['order_status'] = $this->status->find($order['status_id']);
            $statusorder = $this->status->findAll();
            $data = [
                'order' => $order,
                'statusorder' => $statusorder
            ];
            $msg = [
                'success' => view('admin/order/modaledit', $data)
            ];
            echo json_encode($msg);
        } else {
            exit('Sorry, the request could not be processed');
        }
    }

    public function updateOrder()
    {
        if ($this->request->isAJAX()) {
            // requst input id
            $id = $this->request->getVar('id');

            $data = [
                'status_id' => $this->request->getVar('status_id'),
                'order_payment' => $this->request->getVar('order_payment'),
                'order_payment_method' => $this->request->getVar('order_payment_method')
            ];

            $this->order->update($id, $data);

            $msg = [
                'success' => 'Success Update Order'
            ];


            echo json_encode($msg);
        } else {
            exit('Sorry, the request could not be processed');
        };
    }

    public function test()
    {
        // $pesanans = $this->pesanan->getPesanan();
        // $array_pesanans = [];
        // foreach ($pesanans as $key => $pesanan) {
        //     $user = $this->user->getUserById($pesanan['user_id']);
        //     $pesanan['pesanan_user'] = $user['user_name'];
        //     if ($pesanan['pesanan_payment'] == 0) {
        //         $pesanan['pesanan_payment'] = 'Belum Melakukan Pembayaran';
        //     } else {
        //         $pesanan['pesanan_payment'] = 'Sudah Melakukan Pembayaran';
        //     }
        //     $getstatus = $this->statusorder->getStatus($pesanan['pesanan_status']);
        //     $pesanan['pesanan_status_keterangan'] = $getstatus['status_keterangan'];
        //     array_push($array_pesanans, $pesanan);
        // }
        // $data['pesanans'] = $array_pesanans;

        // $orders = $this->order->findAll();
        // $array_orders = [];
        // foreach ($orders as $key => $order) {
        //     $user = $this->user->find($order['user_id']);
        //     $order['order_user'] = $user;
        //     $product = $this->product->find($order['product_id']);
        //     $order['order_product'] = $product;
        //     $status = $this->status->find($order['status_id']);
        //     $order['order_status'] = $status;
        //     array_push($array_orders, $order);
        // }
        // dd($array_orders);
        // $data['orders'] = $array_orders;

        $order_id = 30;
        $order_id = $this->request->getVar('order_id');
        $order = $this->order->first($order_id);
        $order['order_product'] = $this->product->find($order['product_id']);
        $order['order_user'] = $this->user->find($order['user_id']);
        $order['order_status'] = $this->status->find($order['status_id']);
        $statusorder = $this->status->findAll();
        $data['order'] = $order;
        $data['statusorder'] = $statusorder;
        echo view('admin/order/modaledit.php', $data);
    }
}
