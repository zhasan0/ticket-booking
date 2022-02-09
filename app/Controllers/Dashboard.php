<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        $userModel = new \App\Models\UsersModel();
        $loggedUserId = session()->get('loggedUser');
        $userInfo = $userModel->find($loggedUserId);
        $data = [
            'title' => 'Dashboard',
            'userInfo' =>$userInfo
        ];
        return view('dashboard/index', $data);
    }
}
