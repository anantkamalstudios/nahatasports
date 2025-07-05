<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/membership','Home::member');
$routes->get('/tenis','Home::tennis');
$routes->get('/contact','Home::contact');
$routes->get('/court','Home::court');
$routes->get('/user','Home::user');
// $routes->get('/user_login','Home::user_login');
$routes->post('/user_login','Home::user_login');
$routes->get('/logout','Home::logout');
$routes->post('submit_booking', 'BookingController::submit_booking');
$routes->get('view-bookings', 'BookingController::viewBookings');
$routes->get('/booking_summary','Home::booking_summary');
$routes->get('/user_register','Home::user_register');
$routes->get('/sports_comp','Home::sports_comp');
$routes->get('/user_sports','Home::user_sports');
$routes->get('/select_sport','Home::select_sport');
$routes->get('/qrcode','Home::qrcode');
$routes->get('/book_res','Home::book_res');

// 👇 START Protected Pages Group
$routes->group('', ['filter' => 'auth'], function($routes) {

    $routes->get('/dashboard', 'Dashboard::index');
    $routes->get('/profile', 'Profile::index');
    $routes->post('/profile_details', 'Profile::profile_details_edit');
    
    $routes->get('/sports', 'Venue::index');
    $routes->get('/add_sports', 'Venue::add_sports');
    $routes->post('/add_sports', 'Venue::sports_name_add');
    $routes->post('/sports_delete', 'Venue::delete_sports');
    $routes->get('/amenities', 'Venue::amenities');
    $routes->get('/add_amenity', 'Venue::add_amenities');
    $routes->post('/ameniti', 'Venue::add_amenity_name');
    $routes->post('/amenity_delete', 'Venue::delete_amenity');
    $routes->get('/banners', 'Venue::banner');
    $routes->get('/add_banners', 'Venue::add_banner');
    $routes->post('/add_bannar', 'Venue::add_bannar_name');
    $routes->post('/bannar_delete', 'Venue::delete_bannars');
    $routes->get('/nahata_court', 'Venue::courts');
    $routes->get('/add_court', 'Venue::add_court_name');
    $routes->post('/court', 'Venue::add_courts');
    $routes->post('/court_delete', 'Venue::delete_court');
    $routes->get('/venues', 'Venue::add_venue');
    $routes->get('/add_venue', 'Venue::add_venue_name');
    $routes->post('/all_venues', 'Venue::add_venue_data');    

    $routes->get('/sport_banners', 'Coaching::index');
    $routes->get('/add_coach_bannar', 'Coaching::bannar_coach');
    $routes->post('/sport_add_bannar', 'Coaching::coach_bannar_name_add');
    $routes->post('/coach-bannar_delete', 'Coaching::coach_delete_bannars');
    $routes->get('/coaching', 'Coaching::coach');
    $routes->get('/add_coach_data', 'Coaching::add_coach');
    $routes->post('/add_coaching', 'Coaching::add_coaching_name');
    $routes->get('/batch', 'Coaching::all_batch');
    $routes->get('/add_batch', 'Coaching::add_batch_data');
    $routes->get('/venue/edit_sports(:any)', 'Venue::edit_sports/$1');
    $routes->post('/batch_name', 'Coaching::add_batches_name');
    $routes->post('/edit_sports', 'Venue::sport_edit');
    $routes->get('/coaching/edit_coach(:any)', 'Coaching::edit_bannar/$1'); 
    $routes->post('/edit_bannar', 'Coaching::coach_bannar_edit');
    $routes->get('/venue/edit_amenity(:any)', 'Venue::edit_amenity/$1');
    $routes->post('/edit_ameniti', 'Venue::amenity_details_edit');
    $routes->get('/venue/edit_ban(:any)', 'Venue::edit_bannar_name/$1');
    $routes->post('/edit_data', 'Venue::bannar_name_edit');
    $routes->get('/all_venue/all_edit(:any)', 'Venue::all_venue_edit/$1');
    $routes->post('/edit_all_venue', 'Venue::all_venues_name_edit');
    $routes->get('/coach/coach_edit(:any)', 'Coaching::coach_edit/$1');
    $routes->post('/edit_coache', 'Coaching::coaching_details_edit');
    $routes->get('/coach/batch_edit(:any)', 'Coaching::batch_edit_name/$1');
    $routes->post('/edit_batch_name', 'Coaching::batch_details_edit');
    $routes->get('/coach_sport', 'Coaching::add_coach_sport_data');
    $routes->get('/add_coach_sport', 'Coaching::add_coachsport_data');
    $routes->post('/add_coach_sports', 'Coaching::coach_sport_name_add');
    $routes->post('/coachsport_delete', 'Coaching::delete_coach_sports');
    $routes->get('/coach/sport_edit(:any)', 'Coaching::edit_name_coach_sport/$1');
    $routes->post('/edit_coach_sports', 'Coaching::coach_sport_edit');
    $routes->get('/venues_book', 'Venue::all_venue');
    $routes->get('/post_category', 'Venue::post');
    $routes->get('/add_post', 'Venue::add_post');
    $routes->post('/add_blog', 'Venue::add_post_data');
    $routes->post('/post_delete', 'Venue::delete_post');
    $routes->get('/venue/post_edit(:any)', 'Venue::edit_post/$1');
    $routes->post('/edit_post', 'Venue::post_name_edit');
<<<<<<< HEAD
=======

    // shankar
    $routes->get('/hero', 'Cms::hero');
    $routes->get('/add_hero', 'Cms::add_hero');
    $routes->post('/save_hero', 'Cms::save_hero');
    $routes->get('/edit_hero/(:num)', 'Cms::edit_hero/$1');
    $routes->post('/update_hero/(:num)', 'Cms::update_hero/$1');
    $routes->get('/delete_hero/(:num)', 'Cms::delete_hero/$1');

    $routes->get('/program', 'Cms::program');
    $routes->get('/add_program', 'Cms::add_program');
    $routes->post('/save_program', 'Cms::save_program');
    $routes->get('/edit_program/(:num)', 'Cms::edit_program/$1');
    $routes->post('/update_program/(:num)', 'Cms::update_program/$1');
    $routes->get('/delete_program/(:num)', 'Cms::delete_program/$1');

    $routes->get('/courtorground', 'Cms::courtorground');
    $routes->get('/add_courtorground', 'Cms::add_courtorground');
    $routes->post('/save_courtorground', 'Cms::save_courtorground');
    $routes->get('/edit_courtorground/(:num)', 'Cms::edit_courtorground/$1');
    $routes->post('/update_courtorground/(:num)', 'Cms::update_courtorground/$1');
    $routes->get('/delete_courtorground/(:num)', 'Cms::delete_courtorground/$1');

    $routes->get('/multicenter', 'Cms::multicenter');
    $routes->get('/add_multicenter', 'Cms::add_multicenter');
    $routes->post('/save_multicenter', 'Cms::save_multicenter');
    $routes->get('/edit_multicenter/(:num)', 'Cms::edit_multicenter/$1');
    $routes->post('/update_multicenter/(:num)', 'Cms::update_multicenter/$1');
    $routes->get('/delete_multicenter/(:num)', 'Cms::delete_multicenter/$1');

    $routes->get('/studentparents', 'Cms::studentparents');
    $routes->get('/add_studentparents', 'Cms::add_studentparents');
    $routes->post('/save_studentparents', 'Cms::save_studentparents');
    $routes->get('/edit_studentparent/(:num)', 'Cms::edit_studentparent/$1');
    $routes->post('/update_studentparents/(:num)', 'Cms::update_studentparents/$1');
    $routes->get('/delete_studentparent/(:num)', 'Cms::delete_studentparent/$1');


    $routes->get('/events', 'Cms::events');
    $routes->get('/add_event', 'Cms::add_event');
    $routes->post('/save_event', 'Cms::save_event');
    $routes->get('/edit_event/(:num)', 'Cms::edit_event/$1');
    $routes->post('/update_event/(:num)', 'Cms::update_event/$1');
    $routes->get('/delete_event/(:num)', 'Cms::delete_event/$1');


    
    $routes->get('/testimonials', 'Cms::testimonials');
    $routes->get('/add_testimonial', 'Cms::add_testimonial');
    $routes->post('/save_testimonial', 'Cms::save_testimonial');
    $routes->get('/edit_testimonial/(:num)', 'Cms::edit_testimonial/$1');
    $routes->post('/update_testimonial/(:num)', 'Cms::update_testimonial/$1');
    $routes->get('/delete_testimonial/(:num)', 'Cms::delete_testimonial/$1');
    
    $routes->get('/faq', 'Cms::faq'); 
    $routes->get('/add_faq', 'Cms::add_faq'); 
    $routes->post('/save_faq', 'Cms::save_faq'); 
    $routes->get('/edit_faq/(:num)', 'Cms::edit_faq/$1');
    $routes->post('/update_faq/(:num)', 'Cms::update_faq/$1'); 
    $routes->get('/delete_faq/(:num)', 'Cms::delete_faq/$1');  



>>>>>>> a00c1d0 (05/07/2025)
});
// 👆 END Protected Pages Group

// Public Login/Register Routes
$routes->get('/login', 'Login::index');
$routes->post('/login', 'Login::login');
$routes->post('/logout', 'Login::logout');
$routes->get('/register', 'Registration::index');
<<<<<<< HEAD
$routes->post('/sign_up', 'Registration::registration');

=======
$routes->post('/sign_up', 'Registration::registration');
>>>>>>> a00c1d0 (05/07/2025)
