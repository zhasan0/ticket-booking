<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        $loggedUser = session()->get('loggedUser');
        $data = [
            'title' => 'Dashboard',
            'loggedUser' => $loggedUser
        ];
        return view('dashboard/index', $data);
    }
}
