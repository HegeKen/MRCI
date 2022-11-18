<?php namespace App\Models;
  
use CodeIgniter\Model;
  
class WeeklyModel extends Model{
    protected $table = 'weekly';
    protected $allowedFields = ['week','region','bbs','mc','date','log'];
}