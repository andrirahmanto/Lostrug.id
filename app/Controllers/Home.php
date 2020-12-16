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
		echo view('detail.php');
	}
	
	public function coba()
	{
		echo "hello dunia";
	}
}
