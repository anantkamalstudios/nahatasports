<?php

namespace App\Controllers;

use App\Models\BookingModel;

class Home extends BaseController
{
    public function __construct()
    {
        $this->request                    = \Config\Services::request();
        $this->uri                        = new \CodeIgniter\HTTP\URI();
        $this->session                    = \Config\Services::session();
        $this->venue_model                = model('venue_model');
        $this->login_model                = model('login_model');
        $this->user_id                    = $this->session->get('user_id');
    }
    public function index()
    {
        return view('index_view');
    }


    public function member()
    {
        return view('membership_view');
    }

    public function tennis()
    {
        $data['sports_list']      = $this->venue_model->show_sports_list();
        return view('tennis_lessons_view', $data);
    }

    public function contact()
    {
        return view('contact_view');
    }

    public function court()
    {
        return view('reserve_court_view');
    }

    public function user()
    {
        $data['amenity_list']     = $this->venue_model->show_amenity_list();
        $data['sports_list']      = $this->venue_model->show_sports_list();
        return view('select_view', $data);
    }

    public function select_sport()
    {
        return view('select_view');
    }

    public function user_sports()
    {
        return view('user_sport');
    }

    // app/Controllers/Auth.php
    public function user_login()
    {
        helper(['form']);

        $rules = [
            'email'    => 'required|valid_email',
            'password' => 'required',
        ];

        if (!$this->validate($rules)) {
            return $this->response->setJSON([
                'error' => $this->validator->listErrors(),
            ]);
        }

        $email    = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $user = $this->login_model->getUserByEmail($email, 'user');

        if (!$user || !password_verify($password, $user->password)) {
            return $this->response->setJSON(['error' => 'Invalid email or password.']);
        }

        session()->regenerate();

        session()->set([
            'user_id'       => $user->user_id,
            'user_fullname' => $user->full_name,
            'user_email'    => $user->email,
            'user_logged_in' => true,
            'user_type'     => $user->type,
        ]);

        return $this->response->setJSON(['success' => 'Login successful.']);
    }



    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url());
    }


    public function user_register()
    {
        return view('user_register_view');
    }

    public function user_registration()
    {
        $rules = [
            'full_name'          => 'required|min_length[3]',
            'email'              => 'required|valid_email|is_unique[users.email]',
            'username'           => 'required|is_unique[users.username]',
            'password'           => 'required|min_length[6]',
            'newpassword'        => 'required|matches[password]',
            'phone'              => 'required|regex_match[/^[0-9]{10}$/]',
            'registration_agree' => 'required'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $data = [
            'full_name' => $this->request->getPost('full_name'),
            'email'     => $this->request->getPost('email'),
            'username'  => $this->request->getPost('username'),
            'phone'     => $this->request->getPost('phone'),
            'password'  => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'type'      => 'user',
        ];

        $this->login_model->insert($data);

        return redirect()->to('/')->with('success', 'Registration successful. Please login.');
    }


    public function sports_comp()
    {
        $data['amenity_list']     = $this->venue_model->show_amenity_list();
        $data['sports_list']      = $this->venue_model->show_sports_list();
        return view('sport_complex_view', $data);
    }

    public function booking_summary()
    {
        $userId = 1;

        $bookingModel = new BookingModel();


        $data['bookings'] = $bookingModel->where('user_id', $userId)->findAll();

        return view('booking_summary_view', $data);
    }

    public function qrcode()
    {
        return view('qrcode_view');
    }

    public function book_res()
    {
        return view('booking_responce_view');
    }
}
