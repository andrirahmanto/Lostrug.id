<?php

namespace App\Controllers;

class Order extends BaseController
{

    public function index()
    {
        $data['orders'] = $this->order->findAll();
        echo view('admin/order/index.php', $data);
    }

    public function viewdataadmin()
    {
        if ($this->request->isAJAX()) {
            $users = $this->user->findAll();
            $users_amount = count($users);
            $orders = $this->order->findAll();
            $order_amount = count($orders);
            $orders_done = $this->order->where('status_id', 4)->findAll();
            $income = 0;
            foreach ($orders_done as $orders) {
                $income += $orders['order_total_price'];
            }

            $data = [
                'user' => $users_amount,
                'order' => $order_amount,
                'income' => $income
            ];

            $msg = [
                'data' => view('admin/template/infoadmin', $data)
            ];
            echo json_encode($msg);
        } else {
            exit('Sorry, the request could not be processed');
        }
    }


    public function viewtable()
    {
        if ($this->request->isAJAX()) {
            $orders = $this->order->orderBy('order_id', 'DESC')->findAll();
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

            //log
            $log = [
                'log_email' => $_SESSION['admin_email'],
                'log_role' => 'admin',
                'log_activity' => 'edit order #' . $id
            ];
            $this->log->insert($log);


            echo json_encode($msg);
        } else {
            exit('Sorry, the request could not be processed');
        };
    }

    public function deleteOrder()
    {
        if ($this->request->isAJAX()) {
            $order_id = $this->request->getVar('order_id');
            // delete data            
            $this->order->delete($order_id);
            $msg = [
                'success' => 'Success Delete Order'
            ];

            //log
            $log = [
                'log_email' => $_SESSION['admin_email'],
                'log_role' => 'admin',
                'log_activity' => 'edit order #' . $order_id
            ];
            $this->log->insert($log);

            echo json_encode($msg);
        } else {
            exit('Sorry, the request could not be processed');
        }
    }
}
