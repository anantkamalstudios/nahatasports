<?php namespace App\Models;

use CodeIgniter\Model;

class TestimonialModel extends Model
{
    protected $table = 'testimonials';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'role', 'message', 'image'];
    protected $useTimestamps = true;
}