<?php

namespace App\Models;

use CodeIgniter\Model;

class CoachingProgramModel extends Model
{
    protected $table = 'coaching_programs';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'title',
        'image',
        'location',
        'age_group',
        'timings',
        'booking_url',
    ];
}