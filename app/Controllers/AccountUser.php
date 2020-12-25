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

    public function deleteUser()
    {
        if ($this->request->isAJAX()) {
            $user_id = $this->request->getVar('user_id');
            // delete data
            $this->user->delete($user_id);
            $msg = [
                'success' => 'Success Delete User'
            ];
            echo json_encode($msg);
        } else {
            exit('Sorry, the request could not be processed');
        }
    }
}
