<?php

namespace App\Controllers;

class Login extends BaseController
{

    public function __construct()
    {
        $this->request             = \Config\Services::request();
        $this->uri                 = new \CodeIgniter\HTTP\URI();
        $this->session             = \Config\Services::session();
        $this->login_model         = model('login_model');
        $this->user_id             = $this->session->get('user_id');
    }

    public function index()
    {
        $data = array();
        return view('login_view', $data);
    }

    public function login()
    {
        $email                    = $this->request->getPost('email');
        $password                 = $this->request->getPost('password');
        if ($email == '') {
            echo json_encode(array('error' => "Please enter email"));
            exit;
        }
        if ($password == '') {
            echo json_encode(array('error' => "Please enter password"));
            exit;
        }
        $user_row = $this->login_model->get_user_from_email($email);
        if (!empty($user_row)) {
            if (password_verify($password, $user_row->password)) {
                $this->session->set(
                    array(
                        "user_id"            => $user_row->user_id,
                        "full_name"          => $user_row->full_name,
                        "email"             => $user_row->email,
                        "password"          => $user_row->password,
                        'logged_in' => true,
                    )
                );
                echo json_encode(array('success' => 'login successful.'));
                exit;
            } else {
                echo json_encode(array('error' => 'Invalid password.'));
                exit;
            }
        } else {
            echo json_encode(array('error' => 'Invalid email.'));
            exit;
        }
    }

    // public function logout()
    // {
    //     $session_items = ['user_id', 'email', 'password'];
    //     $this->session->remove($session_items);
    //     $this->session->destroy();
    //     return redirect()->to('login');
    // }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('login'));
    }
}
