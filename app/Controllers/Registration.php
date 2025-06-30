<?php
namespace App\Controllers;
class Registration extends BaseController
{

    public function __construct()
    {
        $this->request             = \Config\Services::request();
        $this->uri                 = new \CodeIgniter\HTTP\URI();
        $this->session             = \Config\Services::session();
        $this->signup_model         = model('signup_model');
        $this->user_id             = $this->session->get('user_id');
    }

    public function index()
    {
        $data = array(); 
        return view('registration_view', $data); 
    }

    public function registration()
    {
        // print_r($_POST);die;
        $full_name      = $this->request->getPost('full_name');
        $phone          = $this->request->getPost('phone');
        $username       = $this->request->getPost('username');
        $email          = $this->request->getPost('email');
        $password       = password_hash( $this->request->getPost('password'), PASSWORD_DEFAULT );
        $newpassword    = $this->request->getPost('newpassword');

        $data = 
      [
         'full_name'   => $full_name,
         'phone'       => $phone,
         'username'    => $username ,
         'email'       => $email,
         'password'    => $password,
      ];

        $is_email_exist = $this->signup_model->is_email_exist( $email,  $this->user_id );
            if( $is_email_exist )
            {
                echo json_encode( array( "error" => 'This email is already registered' ) );
            }

            $is_username_exist = $this->signup_model->is_username_exist( $username,  $this->user_id );
            if( $is_username_exist )
            {
                echo json_encode( array( "error" => 'This username is already registered' ) );
            }
             else
            {  
                $this->signup_model->add($data);
                echo json_encode(["success" => true]);          
            }
    }
}