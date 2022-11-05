<?php

namespace App\Controllers;

class Devices extends BaseController
{
    public function index()
    {
        $data = [
            'page_title' => 'app.dt'
        ];
        echo view("components/header",$data);
        echo view("components/devices_tabs");
        echo view("components/devices_footer");
    }
    public function devices()
    {
        $device = explode('/', current_url(), 9)[5];
        echo $device;
    }
}
