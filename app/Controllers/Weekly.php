<?php

namespace App\Controllers;

class Weekly extends BaseController
{
    public function index()
    {
        $data = [
            'page_title' => 'app.wt'
        ];
        echo view("components/header", $data);
        echo view("components/weekly_tabs");
        echo view("components/weekly_footer");
    }
    public function weekcn()
    {
        $url = explode('/', current_url(), 9)[6];
        $week = explode('-', $url, 3)[1];
        echo $week . "+CN";
    }
    public function weeken()
    {
        $url = explode('/', current_url(), 9)[6];
        $week = explode('-', $url, 3)[1];
        echo $week . "+EN";
    }
}
