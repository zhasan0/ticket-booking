<?php

namespace App\Controllers;

use App\Models\OrderModel;
use App\Models\TicketOriginModel;
use App\Models\UsersModel;

class Dashboard extends BaseController
{
    public function index()
    {
        $orders = new OrderModel();
        $tickets = new TicketOriginModel();
        $customers = new UsersModel();

        $data = [
            'page_header' => 'Dashboard',
            'orders' => $orders->findAll(),
            'tickets' => $tickets->findAll(),
            'customers' => $customers->findAll(),
        ];

        return view('admin/index', $data);
    }
}
