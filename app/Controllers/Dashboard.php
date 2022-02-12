<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        $data = [
            'page_header' => 'Dashboard'
        ];

        return view('admin/index', $data);
    }
}
