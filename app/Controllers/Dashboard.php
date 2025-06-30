<?php
namespace App\Controllers;
class Dashboard extends BaseController
{
    public function index()
    {
    	
    	// $session_id = session()->get('logged_in');
        // if ($session_id == true) {
        $data               = array();
        $data['body_html']  = view('dashboard/dashboard_view',$data);
        $this->_main($data); 
	}
	//     else
	//     {
	//     	//redirect(base_url() . 'login');
	//     	return redirect()->to(base_url('login'));
	//     }
    // }



    

    
}