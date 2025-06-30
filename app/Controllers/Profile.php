<?php
namespace App\Controllers;
class Profile extends BaseController
{
    public function __construct()
   {
        $this->request                    = \Config\Services::request();
        $this->uri                        = new \CodeIgniter\HTTP\URI();
        $this->session                    = \Config\Services::session();
        $this->profile_model              = model('profile_model');
        $this->user_id                    = $this->session->get('user_id');
   }

    public function index()
    {
        $user_id            = $this->user_id;
        $data['user_data']  = $this->profile_model->user_id_exist($user_id);
        $data['body_html']  = view('dashboard/profile_details_view',$data);
        $this->_main($data); 
    }

    public function profile_details_edit()
   {
      $user_id                      = $this->request->getPost('user_id'); 
      $full_name                    = $this->request->getPost('full_name');
      $email                        = $this->request->getPost('email');
      $username                     = $this->request->getPost('username');
      $phone                        = $this->request->getPost('phone');
                       
      $data = 
      array(
                'full_name'             => $full_name,
                'email'                 => $email,
                'username'              => $username,
                'phone'                 => $phone,                   
            );
      $check = $this->profile_model->profile_details_save($user_id, $data);
      if ($check) 
      {
         echo json_encode(array("success" =>1 ,'error'=>0));
      } 
      else 
      {
         echo json_encode(array("success" => 0 ,'error'=>1));              
      }
   }
}
