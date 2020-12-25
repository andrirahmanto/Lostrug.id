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

    public function createAdmin()
    {
        if ($this->request->isAJAX()) {
            //validation
            $valid = $this->validate([
                'name' => 'required',
                'email' => 'required|valid_email|is_unique[admin.admin_email]',
                'password' => 'required|min_length[8]'
            ]);

            // if not valid
            if (!$valid) {
                $msg = [
                    'error' => [
                        'name' => $this->validation->getError('name'),
                        'email' => $this->validation->getError('email'),
                        'password' => $this->validation->getError('password')
                    ]
                ];
                // valid
            } else {
                $data = [
                    'admin_name' => $this->request->getVar('name'),
                    'admin_email' => $this->request->getVar('email'),
                    'admin_password' => $this->request->getVar('password'),
                ];

                $this->admin->insert($data);

                $msg = [
                    'success' => 'Success Add Admin'
                ];
            };


            echo json_encode($msg);
        } else {
            exit('Sorry, the request could not be processed');
        };
    }
}
