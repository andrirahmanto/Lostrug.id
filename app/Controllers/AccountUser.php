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
            $user = $this->user->where('user_id', $user_id)->first();
            // delete data
            $this->user->delete($user_id);
            $msg = [
                'success' => 'Success Delete User'
            ];

            //log
            $log = [
                'log_email' => $_SESSION['admin_email'],
                'log_role' => 'admin',
                'log_activity' => 'delete user ' . $user['user_email']
            ];
            $this->log->insert($log);

            echo json_encode($msg);
        } else {
            exit('Sorry, the request could not be processed');
        }
    }
}
