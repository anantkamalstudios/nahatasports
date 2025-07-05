<?php

namespace App\Models;

use CodeIgniter\Model;

class StudentParentFeatureModel extends Model
{
    protected $table = 'student_parent_features';
    protected $primaryKey = 'id';
    protected $allowedFields = ['feature_text'];
}