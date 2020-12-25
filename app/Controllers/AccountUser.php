<?php

namespace App\Controllers;

class AccountUser extends BaseController
{

    public function index()
    {
        echo view('admin/user/index.php');
    }

    public function viewtable()
    {
        if ($this->request->isAJAX()) {
            $data['users'] = $this->user->findAll();
            $msg = [
                'data' => view('admin/user/table', $data)
            ];
            echo json_encode($msg);
        } else {
            exit('Sorry, the request could not be processed');
        }
    }
}
