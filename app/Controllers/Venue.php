<?php
namespace App\Controllers;
class Venue extends BaseController
{
    public function __construct()
   {
        $this->request                    = \Config\Services::request();
        $this->uri                        = new \CodeIgniter\HTTP\URI();
        $this->session                    = \Config\Services::session();
        $this->venue_model                = model('venue_model');
        $this->user_id                    = $this->session->get('user_id');
   }

    public function index()
    {
        $user_id                         = $this->user_id;
        $data['sports_list']      = $this->venue_model->show_sports_list();
        $data['body_html']        = view('venue/venue_sports_listing',$data);
        $this->_main($data); 
    }

    public function add_sports()
    {
        $user_id                         = $this->user_id;
        $data['body_html']        = view('venue/add_sports_view');
        $this->_main($data); 
    }

    public function sports_name_add()
    {
        $name_array               = explode('.', $_FILES['sports_image']['name']);
        $upload_path              = base_url('./assets/uploads');
        $extension                = strtolower($name_array[sizeof($name_array)-1]);
        $name                     = time().".$extension";
        $moved                    = move_uploaded_file($_FILES['sports_image']['tmp_name'],$_SERVER["DOCUMENT_ROOT"]."./sports_project/assets/uploads/$name");
            if( !$moved ) 
                {
                    $upload_path=='';
                }     

        $data =     
        [
            'sports_title'        => $this->request->getPost('sports_title'),
            'sports_image'        => $name
        ];
            $check = $this->venue_model->post_name_add($data);
            echo json_encode( array("success" => TRUE) );    
    }

    public function delete_sports()
    {      
        $user_id                = $this->request->getPost('user_id');
        $res                      = $this->venue_model->delete_sports_data($user_id);
        if($res) 
        {
            echo json_encode( array("success" => true) );
        }
        else
        {
            echo json_encode( array("success" => false) );
        }
    }

    public function amenities()
    {
        $user_id                         = $this->user_id;
        $data['amenity_list']     = $this->venue_model->show_amenity_list();
        $data['body_html']        = view('venue/amenity_listing_view',$data);
        $this->_main($data); 
    }

    public function add_amenities()
    {
        $user_id                         = $this->user_id;
        $data['body_html']        = view('venue/add_amenity_view');
        $this->_main($data); 
    }

    public function add_amenity_name()
    {
        $data =        
        [
            'amenity_name'    => $this->request->getPost('amenity_name')
        ];
      
        $this->venue_model->add_amenity($data);
        echo json_encode( array("success" => TRUE, 'message' => 'New rating added successfully') ); 
        exit();    
    }

    public function delete_amenity()
    {      
        $user_id                = $this->request->getPost('user_id');
        $res                      = $this->venue_model->delete_amenity_data($user_id);
        if($res) 
        {
            echo json_encode( array("success" => true) );
        }
        else
        {
            echo json_encode( array("success" => false) );
        }
    }

    public function banner()
    {
        $user_id                         = $this->user_id;
        $data['bannar_list']     = $this->venue_model->show_bannar_list();
        $data['body_html']        = view('venue/banner_listing_view',$data);
        $this->_main($data); 
    }

    public function add_banner()
    {
        $user_id                         = $this->user_id;
        $data['body_html']        = view('venue/add_bannar_view');
        $this->_main($data); 
    }

    public function add_bannar_name()
    {
        $name_array               = explode('.', $_FILES['banner_image']['name']);
        $upload_path              = base_url('./assets/uploads');
        $extension                = strtolower($name_array[sizeof($name_array)-1]);
        $name                     = time().".$extension";
        $moved                    = move_uploaded_file($_FILES['banner_image']['tmp_name'],$_SERVER["DOCUMENT_ROOT"]."./sports_project/assets/uploads/$name");
            if( !$moved ) 
                {
                    $upload_path=='';
                }     

        $data =     
        [
            'venue_name'        => $this->request->getPost('venue_name'),
            'banner_image'        => $name
        ];
            $check = $this->venue_model->bannar_name_add($data);
            echo json_encode( array("success" => TRUE) );    
    }

    public function delete_bannars()
    {      
        $user_id                = $this->request->getPost('user_id');
        $res                      = $this->venue_model->delete_bannar_data($user_id);
        if($res) 
        {
            echo json_encode( array("success" => true) );
        }
        else
        {
            echo json_encode( array("success" => false) );
        }
    }

    public function courts()
    {
        $user_id                         = $this->user_id;
        $data['court_list']     = $this->venue_model->show_court_list();
        $data['body_html']        = view('venue/court_listing_view',$data);
        $this->_main($data); 
    }

    public function add_court_name()
    {
      $user_id                         = $this->user_id;
        $data['body_html']        = view('venue/add_court_view');
        $this->_main($data); 
    }

    public function add_courts()
    {
        $data =        
        [
            'court_name'    => $this->request->getPost('court_name')
        ];
      
        $this->venue_model->add_court_data($data);
        echo json_encode( array("success" => TRUE, 'message' => 'New rating added successfully') ); 
        exit();    
    }

    public function delete_court()
    {      
        $user_id                = $this->request->getPost('user_id');
        $res                    = $this->venue_model->delete_court_data($user_id);
        if($res) 
        {
            echo json_encode( array("success" => true) );
        }
        else
        {
            echo json_encode( array("success" => false) );
        }
    }

    public function add_venue()
    {
        $user_id                         = $this->user_id;
        $data['all_venues_name']     = $this->venue_model->all_venues_name_list();
        $data['body_html']        = view('venue/venues_listing_view',$data);
        $this->_main($data); 
    }

    public function add_venue_name()
    {
        $user_id                         = $this->user_id;
        $data['select_venue_name']           = $this->venue_model->get_amenity_data();
        $data['select_sport_name']           = $this->venue_model->get_sport_data();
        $data['select_court_name']           = $this->venue_model->get_court_data();
        $data['body_html']                   = view('venue/add_venue_view',$data);
        $this->_main($data); 
    }

    public function add_venue_data()
    {
        $name_array               = explode('.', $_FILES['venue_photo']['name']);
        $upload_path              = base_url('./assets/uploads');
        $extension                = strtolower($name_array[sizeof($name_array)-1]);
        $name                     = time().".$extension";
        $moved                    = move_uploaded_file($_FILES['venue_photo']['tmp_name'],$_SERVER["DOCUMENT_ROOT"]."./sports_project/assets/uploads/$name");
            if( !$moved ) 
                {
                    $upload_path=='';
                }     

        $data =     
        [
            'add_venue_name'        => $this->request->getPost('add_venue_name'),
            'address'               => $this->request->getPost('address'),
            'details'               => $this->request->getPost('details'),
            'map'                   => $this->request->getPost('map'),
            'location'              => $this->request->getPost('location'),
            'select_amenity_name'   => $this->request->getPost('select_amenity_name'),
            'select_sports_name'    => $this->request->getPost('select_sports_name'),
            'select_court_name'     => $this->request->getPost('select_court_name'),
            'venue_photo'           => $name
        ];
            $check = $this->venue_model->add_venue_details($data);
            echo json_encode( array("success" => TRUE) );    
    }

    

    public function edit_sports()
    {
        $data               = array();
        $user_id            = $this->request->getGet()['user_id'];
        $data['user_sport']      = $this->venue_model->sports_details($user_id);
        $data['body_html']  = view('venue/sport_edit_view',$data);
        $this->_main($data); 
    }

        public function sport_edit()
    {
        $name_array  = explode('.', $_FILES['sports_image']['name']);
        $upload_path = base_url('./assets/uploads');
        $extension   = strtolower(end($name_array));
        $name        = time().".$extension";
        $user_id     = $this->request->getPost('sport_data_edit');
        
        $sports_image = '';

        // Check file is uploaded
        if (!empty($_FILES['sports_image']['name'])) {
            $target_path = $_SERVER["DOCUMENT_ROOT"] . "/sports_project/assets/uploads/$name";
            $moved = move_uploaded_file($_FILES['sports_image']['tmp_name'], $target_path);
            
            if ($moved) {
                $sports_image = $name;
            }
        }

        if ($sports_image != '') {
            $data = [
                'sports_title' => $this->request->getPost('sports_title'),
                'sports_image' => $sports_image
            ];
        } else {
            $data = [
                'sports_title' => $this->request->getPost('sports_title'),
            ];
        }

        $this->venue_model->update_sport_data($user_id, $data);

        header('Content-Type: application/json');
        echo json_encode(["success" => 'User information is updated...']);
    }

    public function edit_amenity()
    {
        $data                      = array();
        $user_id                   = $this->request->getGet()['user_id'];
        $data['user_amenity']      = $this->venue_model->amenity_details($user_id);
        $data['body_html']         = view('venue/edit_amenity_view',$data);
        $this->_main($data); 
    }

    public function amenity_details_edit()
    {
        $user_id                      = $this->request->getPost('user_id'); 
        $amenity_name                 = $this->request->getPost('amenity_name');
          
                           
          $data = 
          array(
                    'amenity_name'             => $amenity_name,
                                     
                );
          $check = $this->venue_model->amenity_details_save($user_id, $data);
          if ($check) 
          {
             echo json_encode(array("success" =>1 ,'error'=>0));
          } 
          else 
          {
             echo json_encode(array("success" => 0 ,'error'=>1));              
          }
   }

    public function edit_bannar_name()
    {
        $data                      = array();
        $user_id                   = $this->request->getGet()['user_id'];
        $data['user_bannar_name']      = $this->venue_model->bannar_data_details($user_id);
        $data['body_html']         = view('venue/edit_bannar_view',$data);
        $this->_main($data); 
    }

    public function bannar_name_edit()
    {
        $name_array  = explode('.', $_FILES['banner_image']['name']);
        $upload_path = base_url('./assets/uploads');
        $extension   = strtolower(end($name_array));
        $name        = time().".$extension";
        $user_id     = $this->request->getPost('bannar_edit_details');
        
        $banner_image = '';

        // Check file is uploaded
        if (!empty($_FILES['banner_image']['name'])) {
            $target_path = $_SERVER["DOCUMENT_ROOT"] . "/sports_project/assets/uploads/$name";
            $moved = move_uploaded_file($_FILES['banner_image']['tmp_name'], $target_path);
            
            if ($moved) {
                $banner_image = $name;
            }
        }

        if ($banner_image != '') {
            $data = [
                'venue_name' => $this->request->getPost('venue_name'),
                'banner_image' => $banner_image
            ];
        } else {
            $data = [
                'venue_name' => $this->request->getPost('venue_name'),
            ];
        }

        $this->venue_model->update_data($user_id, $data);

        header('Content-Type: application/json');
        echo json_encode(["success" => 'User information is updated...']);
    }

    public function all_venue_edit()
    {
        $data                      = array();
        $user_id                   = $this->request->getGet()['user_id'];
        $data['all_name_vanue']      = $this->venue_model->all_venues_details($user_id);
        $data['body_html']         = view('venue/edit_all_venue_view',$data);
        $this->_main($data); 
    }

    public function all_venues_name_edit()
    {
        $name_array  = explode('.', $_FILES['venue_photo']['name']);
        $upload_path = base_url('./assets/uploads');
        $extension   = strtolower(end($name_array));
        $name        = time().".$extension";
        $user_id     = $this->request->getPost('all_venues_data_edit');
        
        $venue_photo = '';

        // Check file is uploaded
        if (!empty($_FILES['venue_photo']['name'])) {
            $target_path = $_SERVER["DOCUMENT_ROOT"] . "/sports_project/assets/uploads/$name";
            $moved = move_uploaded_file($_FILES['venue_photo']['tmp_name'], $target_path);
            
            if ($moved) {
                $venue_photo = $name;
            }
        }

        if ($venue_photo != '') {
            $data = [
                'add_venue_name'        => $this->request->getPost('add_venue_name'),
                'address'               => $this->request->getPost('address'),
                'details'               => $this->request->getPost('details'),
                'map'                   => $this->request->getPost('map'),
                'location'              => $this->request->getPost('location'),
                'select_amenity_name'   => $this->request->getPost('select_amenity_name'),
                'select_sports_name'    => $this->request->getPost('select_sports_name'),
                'select_court_name'     => $this->request->getPost('select_court_name'),
                'venue_photo'          => $venue_photo
            ];
        } else {
            $data = [
                'add_venue_name' => $this->request->getPost('add_venue_name'),
                'address'               => $this->request->getPost('address'),
                'details'               => $this->request->getPost('details'),
                'map'                   => $this->request->getPost('map'),
                'location'              => $this->request->getPost('location'),
                'select_amenity_name'   => $this->request->getPost('select_amenity_name'),
                'select_sports_name'    => $this->request->getPost('select_sports_name'),
                'select_court_name'     => $this->request->getPost('select_court_name'),
            ];
        }

        $this->venue_model->all_venu_update_data($user_id, $data);

        header('Content-Type: application/json');
        echo json_encode(["success" => 'User information is updated...']);
    }

    public function all_venue()
    {
        $user_id                   = $this->user_id;
        $data['venus_book_list']   = $this->venue_model->show_venus_list();
        $data['body_html']         = view('venue/venus_listing_view',$data);
        $this->_main($data); 
    }
    
    public function post()
    {
        $user_id                   = $this->user_id;
        $data['post_list']   = $this->venue_model->show_post_list();
        $data['body_html']         = view('dashboard/post_category_listing_view',$data);
        $this->_main($data); 
    }

    public function add_post()
    {
        $user_id                   = $this->user_id;
        $data['body_html']         = view('dashboard/add_post_view');
        $this->_main($data); 
    }

    public function add_post_data()
    {
        $name_array               = explode('.', $_FILES['post_image']['name']);
        $upload_path              = base_url('./assets/uploads');
        $extension                = strtolower($name_array[sizeof($name_array)-1]);
        $name                     = time().".$extension";
        $moved                    = move_uploaded_file($_FILES['post_image']['tmp_name'],$_SERVER["DOCUMENT_ROOT"]."./sports_project/assets/uploads/$name");
            if( !$moved ) 
                {
                    $upload_path=='';
                }     

        $data =     
        [
            'content'         => $this->request->getPost('content'),
            'published_by'    => $this->request->getPost('published_by'),
            'date'            => $this->request->getPost('date'),
            'post_image'      => $name
        ];
            $check = $this->venue_model->add_post_details($data);
            echo json_encode( array("success" => TRUE) );    
    }

    public function delete_post()
    {      
        $user_id                = $this->request->getPost('user_id');
        $res                    = $this->venue_model->delete_post_data($user_id);
        if($res) 
        {
            echo json_encode( array("success" => true) );
        }
        else
        {
            echo json_encode( array("success" => false) );
        }
    }

    public function edit_post()
    {
        $data                    = array();
        $user_id                 = $this->request->getGet()['user_id'];
        $data['user_post']      = $this->venue_model->blog_details($user_id);
        $data['body_html']       = view('dashboard/post_edit_view',$data);
        $this->_main($data); 
    }

    public function post_name_edit()
    {
        $name_array  = explode('.', $_FILES['post_image']['name']);
        $upload_path = base_url('./assets/uploads');
        $extension   = strtolower(end($name_array));
        $name        = time().".$extension";
        $user_id     = $this->request->getPost('post_data_edit');
        
        $post_image = '';

        // Check file is uploaded
        if (!empty($_FILES['post_image']['name'])) {
            $target_path = $_SERVER["DOCUMENT_ROOT"] . "/sports_project/assets/uploads/$name";
            $moved = move_uploaded_file($_FILES['post_image']['tmp_name'], $target_path);
            
            if ($moved) {
                $post_image = $name;
            }
        }

        if ($post_image != '') {
            $data = [
                'date'                  => $this->request->getPost('date'),
                'published_by'          => $this->request->getPost('published_by'),
                'content'               => $this->request->getPost('content'),
                'post_image'            => $post_image
            ];
        } else {
            $data = [
                'date'                  => $this->request->getPost('date'),
                'published_by'          => $this->request->getPost('published_by'),
                'content'               => $this->request->getPost('content'),
            ];
        }

        $this->venue_model->post_update_data($user_id, $data);

        header('Content-Type: application/json');
        echo json_encode(["success" => 'User information is updated...']);
    }




}