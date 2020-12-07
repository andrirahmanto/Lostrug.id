<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		echo view('index.php');
	}
	//--------------------------------------------------------------------

	public function catalogue()
	{
		echo view('catalogue.php');
	}

	public function detail()
	{
		echo view('detail.php');
	}
}
