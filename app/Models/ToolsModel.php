<?php namespace App\Models;
  
use CodeIgniter\Model;
  
class ToolsModel extends Model{
    protected $table = 'tools';
    protected $allowedFields = ['user_name','user_email','user_password','user_created_at'];
}