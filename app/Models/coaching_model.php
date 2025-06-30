<?php
namespace App\Models;
use CodeIgniter\Model;
use CodeIgniter\Cache\CacheInterface;
class coaching_model extends Model 
{
    protected function initialize()

    {
        $this->db_read                     = \Config\Database::connect();
        $this->db_write                    = \Config\Database::connect();
        $this->coach_bannar                = $this->db_write->table('coach_bannar');
        $this->coaching                    = $this->db_write->table('coaching'); 
        $this->batches                     = $this->db_write->table('batches');
        $this->coaching_sport              = $this->db_write->table('coaching_sport'); 
    }

    public function coach_bannar_data_add($data)
    {
        $this->coach_bannar->insert($data);
        return $this->db_write->insertID();
    }

    public function show_bannar_data()
    {
        $sql = "SELECT  user_id, sport_name, sports_bannar_image
                FROM  coach_bannar 
                ORDER BY user_id  DESC";
        $query = $this->db_read->query($sql);
        return $query->getResultArray();
    }

    public function coach_delete_bannar_data($user_id)
    {
        $this->coach_bannar->where(["user_id" =>$user_id]);
        return $this->coach_bannar->delete();
    }

    public function add_coaching_data($data)
    {
        $this->coaching->insert($data);
        return $this->db_write->insertID(); 
    }

     public function show_coaching_list()
    {
        $sql = "SELECT  user_id, coaching_name
                FROM  coaching 
                ORDER BY user_id  DESC";
        $query = $this->db_read->query($sql);
        return $query->getResultArray();
    }

    public function add_batch_data($data)
    {
        $this->batches->insert($data);
        return $this->db_write->insertID();
    }

     public function show_batch_list()
    {
        $sql = "SELECT  user_id, batch_name, coaching, age_group, difficulty_level, batch_type, select_venues, fees, start_date, end_date, start_time, end_time
                FROM  batches 
                ORDER BY user_id  DESC";
        $query = $this->db_read->query($sql);
        return $query->getResultArray();
    }

    public function bannar_details($user_id)
    {
        $sql = "SELECT  user_id, sport_name, sports_bannar_image 
                FROM coach_bannar
                WHERE user_id = ?
                -- LIMIT 1";
                $query = $this->db->query($sql,array($user_id));
                return $query->getrow();
    }

    public function update_bannar_data( $user_id, $data )
    {
        $this->coach_bannar->where( 'user_id', $user_id );
        return $this->coach_bannar->update( $data );
    }

    public function coaching_data_details($user_id)
    {
        $sql = "SELECT  user_id, coaching_name 
                FROM coaching
                WHERE user_id = ?
                -- LIMIT 1";
                $query = $this->db->query($sql,array($user_id));
                return $query->getrow();
    }

    public function coach_details_save($user_id, $data)
    {
        $this->coaching->where(["user_id" =>$user_id] );
        return $this->coaching->update($data);
    }

    public function batch_data_details($user_id)
    {
        $sql = "SELECT  user_id, batch_name, coaching, age_group, difficulty_level, batch_type, select_venues, fees, start_date, end_date, start_time, end_time 
                FROM batches
                WHERE user_id = ?
                -- LIMIT 1";
                $query = $this->db->query($sql,array($user_id));
                return $query->getrow();
    }

    public function batch_details_save($user_id, $data)
    {
        $this->batches->where(["user_id" =>$user_id] );
        return $this->batches->update($data);
    }

    public function coach_bannar_add($data)
    {
        $this->coaching_sport->insert($data);
        return $this->db_write->insertID();
    }

    public function show_coach_sport_data()
    {
        $sql = "SELECT  user_id, sport_title, sport_bannar_image, about_sport, benefits_sports, future_prospects
                FROM  coaching_sport 
                ORDER BY user_id  DESC";
        $query = $this->db_read->query($sql);
        return $query->getResultArray();
    }

    public function delete_coa_sports_data($user_id)
    {
        $this->coaching_sport->where(["user_id" =>$user_id]);
        return $this->coaching_sport->delete();
    }

    public function data_details($user_id)
    {
        $sql = "SELECT  user_id, sport_title, sport_bannar_image, about_sport, benefits_sports, future_prospects 
                FROM coaching_sport
                WHERE user_id = ?
                -- LIMIT 1";
                $query = $this->db->query($sql,array($user_id));
                return $query->getrow();
    }

    public function update_data( $user_id, $data )
    {
        $this->coaching_sport->where( 'user_id', $user_id );
        return $this->coaching_sport->update( $data );
    }


}