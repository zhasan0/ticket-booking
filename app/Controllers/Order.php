<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\OrderModel;
use App\Models\TicketOriginModel;

class Order extends BaseController
{
    public function __construct()
    {

    }

    public function index()
    {
        $db = db_connect();
        if (session()->get('loggedUser')['type'] == "admin") {
            $lists = $db->query("SELECT o.*, u.name as customer_name, u.phone as customer_phone, tor.name ticket_name, tor.fly_date as fly_date FROM orders o
                            join users u ON u.id=o.customer_id
                            join ticket_origins tor ON tor.id=o.ticket_origin_id");
            $result = $lists->getResult();
        } else {
            $customer_id = session()->get('loggedUser')['id'];
            $lists = $db->query("SELECT o.*, u.name as customer_name, u.phone as customer_phone, tor.name ticket_name, tor.fly_date as fly_date FROM orders o
                            join users u ON u.id=o.customer_id
                            join ticket_origins tor ON tor.id=o.ticket_origin_id
                            WHERE o.customer_id=$customer_id");
            $result = $lists->getResult();
        }

        $data = [
            'page_header' => 'Order List',
            'lists' => $result
        ];

        return view('admin/orders/index', $data);
    }

    public function booking($id)
    {
        $db = db_connect();

        $customer_id = session()->get('loggedUser')['id'];
        $ticket_model = new TicketOriginModel();
        $ticket = $ticket_model->find($id);
        // check order is exist
        $order = $db->query("SELECT o.* FROM orders o
                            WHERE o.customer_id=$customer_id and ticket_origin_id=$id");

        if (!empty($order->getResult())) {
            return redirect()->back()->with('info', "Already you booked it!");
        } else {
            $values = [
                'customer_id' => $customer_id,
                'purchase_price' => $ticket['purchase_price'],
                'sale_price' => $ticket['sale_price'],
                'ticket_origin_id' => $id,
                'created_by' => $customer_id,
            ];

            $model = new OrderModel();
            $query = $model->insert($values);
            if (!$query) {
                return redirect()->back()->with('fail', "Oh! Something went Wrong! Try Again");
            } else {
                return redirect()->back()->with('success', "Wow! Successfully booked!");
            }
        }

    }
}
