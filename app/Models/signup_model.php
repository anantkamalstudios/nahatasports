<?php
namespace App\Models;
use CodeIgniter\Model;
use CodeIgniter\Cache\CacheInterface;
class signup_model extends Model 
{
	protected function initialize()

    {
        $this->db_read 	                = \Config\Database::connect();
        $this->db_write                 = \Config\Database::connect();
        $this->admin                     = $this->db_write->table('admin');
    }
    public function add($data)
    {
        $this->admin->insert($data);
        return $this->db_write->insertID();
    }

    public function is_email_exist(  $email, $user_id = NULL )
    {
        $cond = '';
        if( $user_id !='' && $user_id != 0 )
        {
            $cond = ' AND user_id != '.$user_id;
        }
        
        $sql = "SELECT email 
                FROM admin
                WHERE email = ? 
                $cond ";
        $query = $this->db_read->query( $sql, array( $email ) );
        return $query->getNumRows();
    }

    public function is_username_exist(  $username, $user_id = NULL )
    {
        $cond = '';
        if( $user_id !='' && $user_id != 0 )
        {
            $cond = ' AND user_id != '.$user_id;
        }
        
        $sql = "SELECT username 
                FROM admin
                WHERE username = ? 
                $cond ";
        $query = $this->db_read->query( $sql, array( $username ) );
        return $query->getNumRows();
    }

}