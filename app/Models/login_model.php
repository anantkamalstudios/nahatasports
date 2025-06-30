<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Cache\CacheInterface;

class login_model extends Model
{
    protected $table = 'admin';
    protected function initialize()

    {
        $this->db_read                     = \Config\Database::connect();
        $this->db_write                 = \Config\Database::connect();
        $this->admin                    = $this->db_write->table('admin');
    }

    public function get_user_from_email($email)
    {
        $sql = "SELECT user_id, full_name, phone, username, email, password
                FROM admin 
                WHERE email = ? 
                LIMIT 1";
        $query = $this->db_read->query($sql, [$email]);
        return $query->getRow();
    }

    public function getUserByEmail(string $email, string $type = 'user')
    {
        return $this->asObject()
            ->where('email', $email)
            ->where('type', $type)
            ->first();
    }
}
