<?php namespace App\Libraries;

class Notifications {

	public function __construct()
	{
		$this->session = session();
    }

	public function message($msg, $type) {
		if ($type == "info") {
			$message = '<div id="msgalert" class="alert alert-info alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				<i class="icon fa fa-check"></i> ' . $msg . '</div>';
		} elseif ($type == "danger") {
			$message = '<div id="msgalert" class="alert alert-danger alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				<i class="icon fa fa-ban"></i>  ' . $msg . '</div>';
		} elseif ($type == "warning") {
			$message = '<div id="msgalert" class="alert alert-warning alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				<i class="icon fa fa-close"></i> ' . $msg . '</div>';
		}

		$this->session->setTempdata('message', $message);
	}

}