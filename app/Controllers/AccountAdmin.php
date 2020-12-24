<?php

namespace App\Controllers;

class AccountAdmin extends BaseController
{

    public function index()
    {
        echo view('admin/admin/index.php');
    }

    public function viewtable()
    {
        if ($this->request->isAJAX()) {
            $data['admin'] = $this->admin->findAll();
            $msg = [
                'data' => view('admin/admin/table', $data)
            ];
            echo json_encode($msg);
        } else {
            exit('Sorry, the request could not be processed');
        }
    }

    public function viewadd()
    {
        if ($this->request->isAJAX()) {
            $msg = [
                'data' => view('admin/admin/modaladd')
            ];
            echo json_encode($msg);
        } else {
            exit('Sorry, the request could not be processed');
        }
    }
}
