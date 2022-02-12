<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\OrderModel;

class Order extends BaseController
{
    public function index()
    {
        $db = db_connect();

        $lists = $db->query("SELECT o.*, u.name as customer_name, u.phone as customer_phone, tor.name ticket_name, tor.fly_date as fly_date FROM orders o
                            join users u ON u.id=o.customer_id
                            join ticket_origins tor ON tor.id=o.ticket_origin_id");

        $data = [
            'page_header' => 'Order List',
            'lists' => $lists->getResult()
        ];

        return view('admin/orders/index', $data);
    }
}
