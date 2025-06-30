<?php
namespace App\Controllers;
class Coaching extends BaseController
{
    public function __construct()
   {
        $this->request                    = \Config\Services::request();
        $this->uri                        = new \CodeIgniter\HTTP\URI();
        $this->session                    = \Config\Services::session();
        $this->coaching_model                = model('coaching_model');
        $this->user_id                    = $this->session->get('user_id');
   }

    public function index()
    {
        $session_id = session()->get('logged_in');
        if ($session_id == true) {
        $user_id                         = $this->user_id;
        $data['bannar_sports_list']      = $this->coaching_model->show_bannar_data();
        $data['body_html']               = view('coaching/sports_bannar_listing_view',$data);
        $this->_main($data); 
    }
      else
        {
            return redirect()->to(base_url('login'));
        }
    }

    public function bannar_coach()
    {
        $session_id = session()->get('logged_in');
        if ($session_id == true) {
        $user_id                  = $this->user_id;
        $data['body_html']        = view('coaching/add_coach_bannar_view');
        $this->_main($data); 
    }
        else
        {
            return redirect()->to(base_url('login'));
        }
    }

    public function coach_bannar_name_add()
    {
        $session_id = session()->get('logged_in');
        if ($session_id == true) {
        $name_array               = explode('.', $_FILES['sports_bannar_image']['name']);
        $upload_path              = base_url('./assets/uploads');
        $extension                = strtolower($name_array[sizeof($name_array)-1]);
        $name                     = time().".$extension";
        $moved                    = move_uploaded_file($_FILES['sports_bannar_image']['tmp_name'],$_SERVER["DOCUMENT_ROOT"]."./sports_project/assets/uploads/$name");
            if( !$moved ) 
                {
                    $upload_path=='';
                }     

        $data =     
        [
            'sport_name'               => $this->request->getPost('sport_name'),
            'sports_bannar_image'        => $name
        ];
            $check = $this->coaching_model->coach_bannar_data_add($data);
            echo json_encode( array("success" => TRUE) );    
    }
        else
        {
            return redirect()->to(base_url('login'));
        }
    }


    public function coach_delete_bannars()
    {
        $session_id = session()->get('logged_in');
        if ($session_id == true) {      
        $user_id                = $this->request->getPost('user_id');
        $res                      = $this->coaching_model->coach_delete_bannar_data($user_id);
        if($res) 
        {
            echo json_encode( array("success" => true) );
        }
        else
        {
            echo json_encode( array("success" => false) );
        }

    }
        else
        {
            return redirect()->to(base_url('login'));
        }
    }

    public function coach()
    {
        $this->user_id = $this->session->get('user_id');
        if( $this->user_id == '' || $this->user_id == '0' )
        {
            return redirect()->to('/login');
        }
        $user_id                  = $this->user_id;
        $data['coaching_list']     = $this->coaching_model->show_coaching_list();
        $data['body_html']        = view('coaching/coaching_listing_view',$data);
        $this->_main($data); 
    }
        

     public function add_coach()
    {
        $session_id = session()->get('logged_in');
        if ($session_id == true) {
        $user_id                  = $this->user_id;
        $data['body_html']        = view('coaching/add_coach_view');
        $this->_main($data); 
    }
        else
        {
            return redirect()->to(base_url('login'));
        }
    }

    public function add_coaching_name()
    {
        $session_id = session()->get('logged_in');
        if ($session_id == true) {
        $data =        
        [
            'coaching_name'    => $this->request->getPost('coaching_name')
        ];
      
        $this->coaching_model->add_coaching_data($data);
        echo json_encode( array("success" => TRUE, 'message' => 'New rating added successfully') ); 
        exit();    
    }
        else
        {
            return redirect()->to(base_url('login'));
        }
    }

    public function all_batch()
    {

        $session_id = session()->get('logged_in');
        if ($session_id == true) {
        $user_id                  = $this->user_id;
        $data['batch_list']     = $this->coaching_model->show_batch_list();
        $data['body_html']        = view('coaching/batch_listing_view',$data);
        $this->_main($data); 
    }
        else
        {
            return redirect()->to(base_url('login'));
        }
    }

    public function add_batch_data()
    {
        $session_id = session()->get('logged_in');
        if ($session_id == true) {
        $user_id                  = $this->user_id;
        $data['body_html']        = view('coaching/add_batch_view');
        $this->_main($data); 
    }
        else
        {
            return redirect()->to(base_url('login'));
        }
    }

    public function add_batches_name()
    {
        $session_id = session()->get('logged_in');
        if ($session_id == true) {
        $data =        
        [
            'batch_name'        => $this->request->getPost('batch_name'),
            'coaching'          => $this->request->getPost('coaching'),
            'age_group'         => $this->request->getPost('age_group'),
            'difficulty_level'  => $this->request->getPost('difficulty_level'),
            'batch_type'        => $this->request->getPost('batch_type'),
            'select_venues'     => $this->request->getPost('select_venues'),
            'fees'              => $this->request->getPost('fees'),
            'start_date'        => $this->request->getPost('start_date'),
            'end_date'          => $this->request->getPost('end_date'),
            'start_time'        => $this->request->getPost('start_time'),
            'end_time'          => $this->request->getPost('end_time'),
        ];
      
        $this->coaching_model->add_batch_data($data);
        echo json_encode( array("success" => TRUE, 'message' => 'New rating added successfully') ); 
        exit();
    } 
        else
        {
            return redirect()->to(base_url('login'));
        }
    }   
    

    public function edit_bannar()
    {
        $session_id = session()->get('logged_in');
        if ($session_id == true) {
        $data               = array();
        $user_id            = $this->request->getGet()['user_id'];
        $data['user_bannar']      = $this->coaching_model->bannar_details($user_id);
        $data['body_html']  = view('coaching/sports_bannar_edit_view',$data);
        $this->_main($data); 
    }
        else
        {
            return redirect()->to(base_url('login'));
        }
    }   

    public function coach_bannar_edit()
    {
        $session_id = session()->get('logged_in');
        if ($session_id == true) {
        $name_array  = explode('.', $_FILES['sports_bannar_image']['name']);
        $upload_path = base_url('./assets/uploads');
        $extension   = strtolower(end($name_array));
        $name        = time().".$extension";
        $user_id     = $this->request->getPost('sport_bannar_data_edit');
        
        $sports_bannar_image = '';

        // Check file is uploaded
        if (!empty($_FILES['sports_bannar_image']['name'])) {
            $target_path = $_SERVER["DOCUMENT_ROOT"] . "/sports_project/assets/uploads/$name";
            $moved = move_uploaded_file($_FILES['sports_bannar_image']['tmp_name'], $target_path);
            
            if ($moved) {
                $sports_bannar_image = $name;
            }
        }

        if ($sports_bannar_image != '') {
            $data = [
                'sport_name' => $this->request->getPost('sport_name'),
                'sports_bannar_image' => $sports_bannar_image
            ];
        } else {
            $data = [
                'sport_name' => $this->request->getPost('sport_name'),
            ];
        }

        $this->coaching_model->update_bannar_data($user_id, $data);

        header('Content-Type: application/json');
        echo json_encode(["success" => 'User information is updated...']);
    }
        else
        {
            return redirect()->to(base_url('login'));
        }
    }   

    public function coach_edit()
    {
        $session_id = session()->get('logged_in');
        if ($session_id == true) {
        $data               = array();
        $user_id            = $this->request->getGet()['user_id'];
        $data['coach_user']      = $this->coaching_model->coaching_data_details($user_id);
        $data['body_html']  = view('coaching/edit_coach_view',$data);
        $this->_main($data); 
    }
        else
        {
            return redirect()->to(base_url('login'));
        }
    }   

    public function coaching_details_edit()
    {
        $session_id = session()->get('logged_in');
        if ($session_id == true) {
        $user_id                      = $this->request->getPost('user_id'); 
        $coaching_name                 = $this->request->getPost('coaching_name');
          
                           
          $data = 
          array(
                    'coaching_name'             => $coaching_name,
                                     
                );
          $check = $this->coaching_model->coach_details_save($user_id, $data);
          if ($check) 
          {
             echo json_encode(array("success" =>1 ,'error'=>0));
          } 
          else 
          {
             echo json_encode(array("success" => 0 ,'error'=>1));              
          }
   }
   else
        {
            return redirect()->to(base_url('login'));
        }
    }   

   public function batch_edit_name()
{
    if (!session()->get('logged_in')) {
        return redirect()->to(base_url('login'));
    }

    $data = array();
    $user_id = $this->request->getGet('user_id');
    $data['batch_user'] = $this->coaching_model->batch_data_details($user_id);
    $data['body_html'] = view('coaching/edit_batch_view', $data);
    $this->_main($data);
}
 

    public function batch_details_edit()
    {
        if (!session()->get('logged_in')) {
        return redirect()->to(base_url('login'));
    }
        $user_id                    = $this->request->getPost('user_id'); 
        $batch_name                 = $this->request->getPost('batch_name');
        $coaching                   = $this->request->getPost('coaching');
        $age_group                  = $this->request->getPost('age_group');
        $difficulty_level           = $this->request->getPost('difficulty_level');
        $batch_type                 = $this->request->getPost('batch_type');
        $select_venues              = $this->request->getPost('select_venues');
        $fees                       = $this->request->getPost('fees');
        $start_date                 = $this->request->getPost('start_date');
        $end_date                   = $this->request->getPost('end_date');
        $start_time                 = $this->request->getPost('start_time');
        $end_time                   = $this->request->getPost('end_time');
          
                           
          $data = 
          array(
                    'batch_name'            => $batch_name,
                    'coaching'              => $coaching,
                    'age_group'             => $age_group,
                    'difficulty_level'      => $difficulty_level,
                    'batch_type'            => $batch_type,
                    'select_venues'         => $select_venues,
                    'fees'                  => $fees,
                    'start_date'            => $start_date,
                    'end_date'              => $end_date,
                    'start_time'            => $start_time,
                    'end_time'              => $end_time,
                                     
                );
          $check = $this->coaching_model->batch_details_save($user_id, $data);
          if ($check) 
          {
             echo json_encode(array("success" =>1 ,'error'=>0));
          } 
          else 
          {
             echo json_encode(array("success" => 0 ,'error'=>1));              
          }
   }
        


   public function add_coach_sport_data()
    {
        if (!session()->get('logged_in')) {
        return redirect()->to(base_url('login'));
    }
        $user_id                  = $this->user_id;
        $data['coach_sport_list']      = $this->coaching_model->show_coach_sport_data();
        $data['body_html']        = view('coaching/listing_coaching_sports_view',$data);
        $this->_main($data); 
    
   }
   
    


    public function add_coachsport_data()
    {
         if (!session()->get('logged_in')) {
        return redirect()->to(base_url('login'));
        $user_id                  = $this->user_id;
        $data['body_html']        = view('coaching/add_coach_sports_view');
        $this->_main($data); 
    }
    }
        
  
    

    public function coach_sport_name_add()
    {
         if (!session()->get('logged_in')) {
        return redirect()->to(base_url('login'));
        $name_array               = explode('.', $_FILES['sport_bannar_image']['name']);
        $upload_path              = base_url('./assets/uploads');
        $extension                = strtolower($name_array[sizeof($name_array)-1]);
        $name                     = time().".$extension";
        $moved                    = move_uploaded_file($_FILES['sport_bannar_image']['tmp_name'],$_SERVER["DOCUMENT_ROOT"]."./sports_project/assets/uploads/$name");
            if( !$moved ) 
                {
                    $upload_path=='';
                }     

        $data =     
        [
            'sport_title'               => $this->request->getPost('sport_title'),
            'about_sport'               => $this->request->getPost('about_sport'),
            'benefits_sports'           => $this->request->getPost('benefits_sports'),
            'future_prospects'          => $this->request->getPost('future_prospects'),
            'sport_bannar_image'        => $name
        ];
            $check = $this->coaching_model->coach_bannar_add($data);
            echo json_encode( array("success" => TRUE) );    
    }
        else 
          {
             echo json_encode(array("success" => 0 ,'error'=>1));              
          }
   }
   
    

    public function delete_coach_sports()
    {
        if (!session()->get('logged_in')) {
        return redirect()->to(base_url('login'));      
        $user_id                = $this->request->getPost('user_id');
        $res                      = $this->coaching_model->delete_coa_sports_data($user_id);
        if($res) 
        {
            echo json_encode( array("success" => true) );
        }
        else
        {
            echo json_encode( array("success" => false) );
        }
    }
        else 
          {
             echo json_encode(array("success" => 0 ,'error'=>1));              
          }
  
    }   

    public function edit_name_coach_sport()
    {
         if (!session()->get('logged_in')) {
        return redirect()->to(base_url('login'));
        $data               = array();
        $user_id            = $this->request->getGet()['user_id'];
        $data['user_coach_sport']      = $this->coaching_model->data_details($user_id);
        $data['body_html']  = view('coaching/edit_coach_sport_view',$data);
        $this->_main($data); 
    }
         else 
          {
             echo json_encode(array("success" => 0 ,'error'=>1));              
          }
  
    }   

    public function coach_sport_edit()
    {
        if (!session()->get('logged_in')) {
        return redirect()->to(base_url('login'));
        $name_array  = explode('.', $_FILES['sport_bannar_image']['name']);
        $upload_path = base_url('./assets/uploads');
        $extension   = strtolower(end($name_array));
        $name        = time().".$extension";
        $user_id     = $this->request->getPost('data_edit');
        
        $sport_bannar_image = '';

        // Check file is uploaded
        if (!empty($_FILES['sport_bannar_image']['name'])) {
            $target_path = $_SERVER["DOCUMENT_ROOT"] . "/sports_project/assets/uploads/$name";
            $moved = move_uploaded_file($_FILES['sport_bannar_image']['tmp_name'], $target_path);
            
            if ($moved) {
                $sport_bannar_image = $name;
            }
        }

        if ($sport_bannar_image != '') {
            $data = [
                'sport_title' => $this->request->getPost('sport_title'),
                'about_sport' => $this->request->getPost('about_sport'),
                'benefits_sports' => $this->request->getPost('benefits_sports'),
                'future_prospects' => $this->request->getPost('future_prospects'),
                'sport_bannar_image' => $sport_bannar_image
            ];
        } else {
            $data = [
                'sport_title' => $this->request->getPost('sport_title'),
                'about_sport' => $this->request->getPost('about_sport'),
                'benefits_sports' => $this->request->getPost('benefits_sports'),
                'future_prospects' => $this->request->getPost('future_prospects'),
            ];
        }

        $this->coaching_model->update_data($user_id, $data);

        header('Content-Type: application/json');
        echo json_encode(["success" => 'User information is updated...']);
    }
         else 
          {
             echo json_encode(array("success" => 0 ,'error'=>1));              
          }
   
       
    }   
    // public function list_sport_ban_data()
    // {
    //     $user_id                  = $this->user_id;
    //     //$data['coach_sport_list']      = $this->coaching_model->show_coach_sport_data();
    //     $data['body_html']        = view('coaching/listing_sport_bannar_view');
    //     $this->_main($data); 
    // }

    // public function add_data()
    // {
    //     $user_id                  = $this->user_id;
    //     $data['body_html']        = view('coaching/add_coach_banner_view');
    //     $this->_main($data); 
    // }

}




