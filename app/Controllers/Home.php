<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		echo view('layout/header');
		echo view('index');
		echo view('layout/footer');
	}

	public function catalogue()
	{
		echo view('layout/header');
		echo view('catalogue');
		echo view('layout/footer');
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
