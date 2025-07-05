<?php

namespace App\Models;

use CodeIgniter\Model;

class CenterModel extends Model
{
    protected $table = 'centers';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'address', 'map_url', 'sports', 'images'];
    protected $useTimestamps = false;
}