<?php

namespace App\Models;

use CodeIgniter\Model;

class BookingModel extends Model
{
    protected $table = 'bookings'; // change this to your actual table name
    protected $primaryKey = 'id';

    protected $allowedFields = ['user_id', 'booking_date', 'court_name', 'time_slot', 'price']; // Add your actual DB fields here

    protected $useTimestamps = true; // Optional: if you have created_at, updated_at columns
}
