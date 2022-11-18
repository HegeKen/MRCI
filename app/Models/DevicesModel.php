<?php namespace App\Models;
  
use CodeIgniter\Model;
  
class DevicesModel extends Model{
    protected $table = 'devices';
    protected $allowedFields = ['user_name','user_email','user_password','user_created_at'];
}