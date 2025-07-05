<?php

namespace App\Models;

use CodeIgniter\Model;

class HeroModel extends Model
{
    protected $table = 'hero_slides';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'image',
        'title',
        'description',
        'button1_text',
        'button1_url',
        'button2_text',
        'button2_url'
    ];
}