<?php

namespace App\Controllers;

class User extends BaseController
{
	public function index()
	{
		$products = $this->product->findAll();
		$data = [
			'products' => $products
		];
		echo view('user/home/userhome', $data);
	}

	public function catalogue()
	{
		$products = $this->product->findAll();
		$data = [
			'products' => $products
		];
		echo view('user/catalogue/catalogue', $data);
	}

	public function myorder()
	{
		echo view('user/myorder/myorder');
	}

	public function viewtable()
	{
		if ($this->request->isAJAX()) {
			$user_id = 9;
			$orders = $this->order->where('user_id', $user_id)->orderBy('order_id', 'DESC')->findAll();
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
				'data' => view('user/myorder/table', $data)
			];
			echo json_encode($msg);
		} else {
			exit('Sorry, the request could not be processed');
		}
	}

	public function detailorder()
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
				'success' => view('user/myorder/detailorder', $data)
			];
			echo json_encode($msg);
		} else {
			exit('Sorry, the request could not be processed');
		}
	}

	public function cancelorder()
	{
		if ($this->request->isAJAX()) {
			$order_id = $this->request->getVar('order_id');
			$data = [
				'status_id' => 5
			];
			// update data            
			$this->order->update($order_id, $data);
			$msg = [
				'success' => 'Success Cancel Order'
			];

			//log
			// $log = [
			// 	'log_email' => $_SESSION['admin_email'],
			// 	'log_role' => 'admin',
			// 	'log_activity' => 'edit order #' . $order_id
			// ];
			// $this->log->insert($log);

			echo json_encode($msg);
		} else {
			exit('Sorry, the request could not be processed');
		}
	}

	public function viewmodalpay()
	{
		if ($this->request->isAJAX()) {
			$order_id = $this->request->getVar('order_id');
			$order = $this->order->where('order_id', $order_id)->first();
			$data = [
				'order' => $order
			];
			$msg = [
				'success' => view('user/myorder/modalpay', $data)
			];
			echo json_encode($msg);
		} else {
			exit('Sorry, the request could not be processed');
		}
	}

	public function uploadimagepay()
	{
		if ($this->request->isAJAX()) {
			// requst input id
			$id = $this->request->getVar('id');

			$image = $this->request->getFile('image');
			$image->move('assets/image/payment', 'order' . $id . '.' . $image->getExtension());
			$imgname = $image->getName();
			$data = [
				'order_payment_image' => $imgname,
				'status_id' => 2
			];

			$this->order->update($id, $data);

			$msg = [
				'success' => 'Success Upload Proof of Payment'
			];

			//log
			// $log = [
			// 	'log_email' => $_SESSION['admin_email'],
			// 	'log_role' => 'admin',
			// 	'log_activity' => 'edit product #' . $id
			// ];
			// $this->log->insert($log);			
			echo json_encode($msg);
		} else {
			exit('Sorry, the request could not be processed');
		};
	}

	public function detail()
	{
		echo view('layout/header');
		echo view('detail');
		echo view('layout/footer');
	}


	public function form()
	{
		echo view('layout/header');
		echo view('form');
		echo view('layout/footer');
	}
	public function orders()
	{
		echo view('layout/header');
		echo view('orders');
		echo view('layout/footer');
	}
}
