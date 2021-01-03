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
