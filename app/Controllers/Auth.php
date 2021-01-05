<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function index()
    {
        // clear session
        $array_items = array('admin_id', 'admin_name', 'admin_email');
        $this->session->remove($array_items);
        echo view('admin/template/login');
    }

    public function sendLogin()
    {
        if ($this->request->isAJAX()) {
            //validation
            $valid = $this->validate([
                'email' => 'required|valid_email',
                'password' => 'required|min_length[8]'
            ]);

            // if not valid
            if (!$valid) {
                $msg = [
                    'error' => [
                        'email' => $this->validation->getError('email'),
                        'password' => $this->validation->getError('password')
                    ]
                ];
            } else {
                $email = $this->request->getVar('email');
                $password = $this->request->getVar('password');
                // cek admin
                $admin = $this->admin->where('admin_email', $email)->findAll();
                if (count($admin) > 0) {
                    $admin = $this->admin->where('admin_email', $email)->first();
                    // cek password
                    if ($admin['admin_password'] == $password) {
                        $admin_session = [
                            'admin_id' => $admin['admin_id'],
                            'admin_name' => $admin['admin_name'],
                            'admin_email' => $admin['admin_email']
                        ];

                        $this->session->set($admin_session);

                        //log
                        $log = [
                            'log_email' => $_SESSION['admin_email'],
                            'log_role' => 'admin',
                            'log_activity' => 'login'
                        ];
                        $this->log->insert($log);

                        $msg = [
                            'success' => [
                                'link' => '/admin',
                            ]
                        ];
                    } else {
                        $msg = [
                            'error' => [
                                'password' => 'worng password',
                            ]
                        ];
                    }
                } else {
                    $msg = [
                        'error' => [
                            'email' => 'email not found',
                        ]
                    ];
                };
            };


            echo json_encode($msg);
        } else {
            exit('Sorry, the request could not be processed');
        };
    }

    public function adminLogout()
    {
        //log
        $log = [
            'log_email' => $_SESSION['admin_email'],
            'log_role' => 'admin',
            'log_activity' => 'logout'
        ];
        $this->log->insert($log);

        $session_item = array('admin_id', 'admin_name', 'admin_email');
        $this->session->remove($session_item);
        $this->session->destroy();
        return redirect()->to(base_url('/admin/login'));
    }

    public function loginGoogle()
    {
        $googletoken = $this->request->getPost('google-token');

        $result = file_get_contents('https://oauth2.googleapis.com/tokeninfo?id_token=' . $googletoken);
        $result_json = json_decode($result, true);

        if (isset($result_json['email'])) {
            $email = $result_json['email'];
            $name = $result_json['name'];
            $user = $this->user->where('user_email', $email)->first();
            if (count((array) $user) > 0) {
                $data_session = array(
                    'user_id' => $user['user_id'],
                    'user_email' => $user['user_email'],
                    'user_name' => $user['user_name']
                );
                $this->session->set($data_session);
                //log
                $log = [
                    'log_email' => $_SESSION['user_email'],
                    'log_role' => 'user',
                    'log_activity' => 'Login'
                ];
                $this->log->insert($log);
            } else {
                $user_name = $name;
                $user_email = $email;

                $data = [
                    'user_name' => $user_name,
                    'user_email' => $user_email,
                ];
                $this->user->insert($data);
                $user_id = $this->user->getInsertID();
                $data_session = array(
                    'user_id' => $user_id,
                    'user_email' => $email,
                    'user_name' => $name,
                );
                $this->session->set($data_session);
                //log
                $log = [
                    'log_email' => $_SESSION['user_email'],
                    'log_role' => 'user',
                    'log_activity' => 'Create Account'
                ];
                $this->log->insert($log);
            }
        }
    }

    public function userLogout()
    {
        //log
        $log = [
            'log_email' => $_SESSION['user_email'],
            'log_role' => 'user',
            'log_activity' => 'Logout'
        ];
        $this->log->insert($log);
        $session_item = array('user_id', 'user_name', 'user_email');
        $this->session->remove($session_item);
        $this->session->destroy();
        return redirect()->to(base_url('/'));
    }
}
