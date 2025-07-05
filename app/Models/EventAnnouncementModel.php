<?php namespace App\Models;

use CodeIgniter\Model;

class EventAnnouncementModel extends Model
{
    protected $table = 'events_announcements';
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'description', 'btn_title', 'btn_url'];
    protected $useTimestamps = true;
}