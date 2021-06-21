<?php

namespace App\Controllers;

class Log extends BaseController
{

    public function index()
    {
        echo view('user/log/index.php');
    }

    public function viewtable()
    {
        if ($this->request->isAJAX()) {
            $data['logs'] = $this->log->orderBy('log_id', 'DESC')->findAll();
            $msg = [
                'data' => view('user/log/table', $data)
            ];
            echo json_encode($msg);
        } else {
            exit('Sorry, the request could not be processed');
        }
    }
}
