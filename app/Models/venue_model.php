<?php
namespace App\Models;
use CodeIgniter\Model;
use CodeIgniter\Cache\CacheInterface;
class venue_model extends Model 
{
    protected function initialize()

    {
        $this->db_read                     = \Config\Database::connect();
        $this->db_write                    = \Config\Database::connect();
        $this->venue_sports                = $this->db_write->table('venue_sports');
        $this->venue_amenities             = $this->db_write->table('venue_amenities');
        $this->venue_banner                = $this->db_write->table('venue_banner');
        $this->venue_court                 = $this->db_write->table('venue_court');
        $this->all_venues                  = $this->db_write->table('all_venues');
        $this->bookings                    = $this->db_write->table('bookings');
        $this->post                        = $this->db_write->table('post');
    }

    public function post_name_add($data)
    {
        $this->venue_sports->insert($data);
        return $this->db_write->insertID();
    }

    public function show_sports_list()
    {
        $sql = "SELECT  user_id, sports_title, sports_image
                FROM  venue_sports 
                ORDER BY user_id  DESC";
        $query = $this->db_read->query($sql);
        return $query->getResultArray();
    }

    public function delete_sports_data($user_id)
    {
        $this->venue_sports->where(["user_id" =>$user_id]);
        return $this->venue_sports->delete();
    }

    public function add_amenity($data)
    {
        $this->venue_amenities->insert($data);
        return $this->db_write->insertID(); 
    }

    public function show_amenity_list()
    {
        $sql = "SELECT  user_id, amenity_name
                FROM  venue_amenities 
                ORDER BY user_id  DESC";
        $query = $this->db_read->query($sql);
        return $query->getResultArray();
    }

    public function delete_amenity_data($user_id)
    {
        $this->venue_amenities->where(["user_id" =>$user_id]);
        return $this->venue_amenities->delete();
    }

    public function bannar_name_add($data)
    {
        $this->venue_banner->insert($data);
        return $this->db_write->insertID();
    }

    public function show_bannar_list()
    {
        $sql = "SELECT  user_id, venue_name, banner_image
                FROM  venue_banner 
                ORDER BY user_id  DESC";
        $query = $this->db_read->query($sql);
        return $query->getResultArray();
    }

    public function delete_bannar_data($user_id)
    {
        $this->venue_banner->where(["user_id" =>$user_id]);
        return $this->venue_banner->delete();
    }

    public function add_court_data($data)
    {
        $this->venue_court->insert($data);
        return $this->db_write->insertID(); 
    }

    public function show_court_list()
    {
        $sql = "SELECT  user_id, court_name
                FROM  venue_court 
                ORDER BY user_id  DESC";
        $query = $this->db_read->query($sql);
        return $query->getResultArray();
    }

    public function delete_court_data($user_id)
    {
        $this->venue_court->where(["user_id" =>$user_id]);
        return $this->venue_court->delete();
    }

    public function get_amenity_data()
    {
        $sql = "SELECT amenity_name,user_id
        FROM  venue_amenities ORDER BY user_id DESC";
        $query =  $this->db_read->query( $sql);
        return $query->getResultArray();
    }

    public function get_sport_data()
    {
        $sql = "SELECT sports_title,user_id
        FROM  venue_sports ORDER BY user_id DESC";
        $query =  $this->db_read->query( $sql);
        return $query->getResultArray();
    }

    public function get_court_data()
    {
        $sql = "SELECT court_name,user_id
        FROM  venue_court ORDER BY user_id DESC";
        $query =  $this->db_read->query( $sql);
        return $query->getResultArray();
    }

    public function add_venue_details($data)
    {
        $this->all_venues->insert($data);
        return $this->db_write->insertID();
    }

    public function all_venues_name_list()
    {
        $sql = "SELECT  user_id, add_venue_name, address, details, venue_photo, map, location, select_amenity_name, select_sports_name, select_court_name
                FROM  all_venues 
                ORDER BY user_id  DESC";
        $query = $this->db_read->query($sql);
        return $query->getResultArray();
    }

    public function sports_details($user_id)
    {
        $sql = "SELECT  user_id, sports_title, sports_image 
                FROM venue_sports
                WHERE user_id = ?
                -- LIMIT 1";
                $query = $this->db->query($sql,array($user_id));
                return $query->getrow();
    }

    public function update_sport_data( $user_id, $data )
    {
        $this->venue_sports->where( 'user_id', $user_id );
        return $this->venue_sports->update( $data );
    }

    public function amenity_details($user_id)
    {
        $sql = "SELECT  user_id, amenity_name 
                FROM venue_amenities
                WHERE user_id = ?
                -- LIMIT 1";
                $query = $this->db->query($sql,array($user_id));
                return $query->getrow();
    }

    public function amenity_details_save($user_id, $data)
    {
        $this->venue_amenities->where(["user_id" =>$user_id] );
        return $this->venue_amenities->update($data);
    }

    public function bannar_data_details($user_id)
    {
        $sql = "SELECT  user_id, venue_name, banner_image 
                FROM venue_banner
                WHERE user_id = ?
                -- LIMIT 1";
                $query = $this->db->query($sql,array($user_id));
                return $query->getrow();
    }

    public function update_data( $user_id, $data )
    {
        $this->venue_banner->where( 'user_id', $user_id );
        return $this->venue_banner->update( $data );
    }

    public function all_venues_details($user_id)
    {
        $sql = "SELECT  user_id, add_venue_name, address, details, venue_photo, map, location, select_amenity_name, select_sports_name, select_court_name 
                FROM all_venues
                WHERE user_id = ?
                -- LIMIT 1";
                $query = $this->db->query($sql,array($user_id));
                return $query->getrow();
    }

    public function all_venu_update_data( $user_id, $data )
    {
        $this->all_venues->where( 'user_id', $user_id );
        return $this->all_venues->update( $data );
    }

    public function show_venus_list()
    {
        $sql = "SELECT  id, user_id, booking_date, court_name, time_slot, price
                FROM  bookings 
                ORDER BY id  DESC";
        $query = $this->db_read->query($sql);
        return $query->getResultArray();
    }

    public function add_post_details($data)
    {
        $this->post->insert($data);
        return $this->db_write->insertID();
    }

    public function show_post_list()
    {
        $sql = "SELECT user_id, post_image, date, published_by, content
                FROM  post 
                ORDER BY user_id  DESC";
        $query = $this->db_read->query($sql);
        return $query->getResultArray();
    }

    public function delete_post_data($user_id)
    {
        $this->post->where(["user_id" =>$user_id]);
        return $this->post->delete();
    }

    public function blog_details($user_id)
    {
        $sql = "SELECT  user_id, post_image, date, published_by, content 
                FROM post
                WHERE user_id = ?
                -- LIMIT 1";
                $query = $this->db->query($sql,array($user_id));
                return $query->getrow();
    }

    public function post_update_data( $user_id, $data )
    {
        $this->post->where( 'user_id', $user_id );
        return $this->post->update( $data );
    }


}