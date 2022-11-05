<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'page_title' => 'app.ss'
        ];
        if (current_url() == base_url() . "/") {
            return redirect()->to(service('request')->getLocale());
        } else {
            echo view("components/header",$data);
            echo view("components/index_tabs");
            echo view("components/index_footer");
        }
    }
    public function tutorial()
    {
        $data = [
            'page_title' => 'app.tut'
        ];
        echo view("components/header", $data);
        echo view("components/tutorial_tabs");
        echo view("components/footer");
    }
    public function recovery()
    {
        $data = [
            'page_title' => 'app.ret'
        ];
        echo view("components/header", $data);
        echo view("components/recovery_tabs");
        echo view("components/recovery_footer");
    }
    public function tools()
    {
        $data = [
            'page_title' => 'app.tot'
        ];
        echo view("components/header", $data);
        echo view("components/tools_tabs");
        echo view("components/tools_footer");
    }
    public function thanks()
    {
        $data = [
            'page_title' => 'app.tat'
        ];
        echo view("components/header", $data);
        echo view("components/thanks_tabs");
        echo view("components/footer");
    }
    public function sitelog()
    {
        $data = [
            'page_title' => 'app.slt'
        ];
        echo view("components/header", $data);
        echo view("components/sitelog_tabs");
        echo view("components/footer");
    }
    public function friendly()
    {
        $data = [
            'page_title' => 'app.flt'
        ];
        echo view("components/header", $data);
        echo view("components/friendly_tabs");
        echo view("components/footer");
    }
    public function about()
    {
        $data = [
            'page_title' => 'app.ast'
        ];
        echo view("components/header", $data);
        echo view("components/about_tabs");
        echo view("components/footer");
    }
}
