<?php namespace App\Models;
  
use CodeIgniter\Model;
  
class IndexModel extends Model{
    protected $table = 'index';
    protected $allowedFields = ['user_name','user_email','user_password','user_created_at'];
}