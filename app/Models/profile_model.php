<?php
namespace App\Models;
use CodeIgniter\Model;
use CodeIgniter\Cache\CacheInterface;
class profile_model extends Model 
{
    protected function initialize()

    {
        $this->db_read                     = \Config\Database::connect();
        $this->db_write                    = \Config\Database::connect();
        $this->admin                       = $this->db_write->table('admin');
    }

     public function user_id_exist( $user_id)
    {
        $sql = "SELECT  user_id, full_name, email, phone,username  
                FROM admin
                WHERE user_id = ?
                -- LIMIT 1";
                $query = $this->db->query($sql,array($user_id));
                return $query->getrow();
    }

    public function profile_details_save($user_id, $data)
    {
        $this->admin->where(["user_id" =>$user_id] );
        return $this->admin->update($data);
    }
}