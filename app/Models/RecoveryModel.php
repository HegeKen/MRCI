<?php namespace App\Models;
  
use CodeIgniter\Model;
  
class RecoveryModel extends Model{
    protected $table = 'recovery';
    protected $allowedFields = ['id','author','type','device','version','date','url'];
}