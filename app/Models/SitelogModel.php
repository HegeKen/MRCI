<?php namespace App\Models;
  
use CodeIgniter\Model;
  
class SitelogModel extends Model{
    protected $table = 'sitelog';
    protected $allowedFields = ['user_name','user_email','user_password','user_created_at'];
}