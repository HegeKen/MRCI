<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\IndexModel;
use App\Models\WeeklyModel;
use App\Models\DevicesModel;
use App\Models\RecoveryModel;
use App\Models\ToolsModel;
use App\Models\SitelogModel;

class Dashboard extends Controller
{
    public function index()
    {
        // $session = session();

        // //echo "Welcome back, ".$session->get('user_name');
        $title = [
            'page_title' => 'app.adt'
        ];
        echo view('admin/header', $title);
        echo view('admin/tabs');
        echo view('admin/dashboard');
        echo view('admin/footer');
    }
    public function weekly()
    {
        // $session = session();

        // //echo "Welcome back, ".$session->get('user_name');
        $title = [
            'page_title' => 'app.adw'
        ];
        echo view('admin/header', $title);
        echo view('admin/tabs');
        echo view('admin/weekly');
        echo view('admin/footer');
    }
    public function devices()
    {
        // $session = session();

        // //echo "Welcome back, ".$session->get('user_name');
        $title = [
            'page_title' => 'app.add'
        ];
        echo view('admin/header', $title);
        echo view('admin/tabs');
        echo view('admin/devices');
        echo view('admin/footer');
    }
    public function recovery()
    {
        // $session = session();

        // //echo "Welcome back, ".$session->get('user_name');
        $title = [
            'page_title' => 'app.adr'
        ];
        $model = new RecoveryModel();
        $query = $model->query("SELECT * from recovery");
        $row = $query->getResult('array');
        if (isset($row)) {
            
        }
        echo view('admin/header', $title);
        echo view('admin/tabs');
        //echo view('admin/recovery',$this->data);
        echo view('admin/footer');
    }
    public function tools()
    {
        // $session = session();

        // //echo "Welcome back, ".$session->get('user_name');
        $title = [
            'page_title' => 'app.adtools'
        ];
        echo view('admin/header', $title);
        echo view('admin/tabs');
        echo view('admin/tools');
        echo view('admin/footer');
    }
    public function sitelog()
    {
        // $session = session();

        // //echo "Welcome back, ".$session->get('user_name');
        $title = [
            'page_title' => 'app.ads'
        ];
        echo view('admin/header', $title);
        echo view('admin/tabs');
        echo view('admin/sitelog');
        echo view('admin/footer');
    }
}
