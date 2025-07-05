<?php

namespace App\Models;

use CodeIgniter\Model;

class CourtGroundModel extends Model
{
    protected $table = 'courtground';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'description', 'image', 'booking_url'];
}