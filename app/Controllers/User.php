<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsersModel;

class User extends BaseController
{
    public function index()
    {
        $lists = new UsersModel();

        $data = [
            'page_header' => 'Users List',
            'addLink' => '/User/create',
            'lists' => $lists->findAll()
        ];

        return view('admin/users/index', $data);
    }

    public function create()
    {
        dd('create');
    }
}
