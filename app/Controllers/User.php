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
