<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table = 'admin';
    protected $allowedFields = ['username', 'email', 'password'];
    protected $beforeInsert = ['beforeInsert'];
    protected $beforeUpdate = ['beforeUpdate'];

    protected function beforeInsert(array $data)
    {
        $data = $this->passHash($data);
        return $data;
    }

    protected function beforeUpdate(array $data)
    {
        $data = $this->passHash($data);
        return $data;
    }

    protected function passHash(array $data)
    {
        if (isset($data['data']['password']))
            $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);
        return $data;
    }
}
