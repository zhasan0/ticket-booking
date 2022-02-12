<?php

namespace App\Controllers;

use App\Models\TicketOriginModel;
use CodeIgniter\HTTP\URI;

class Home extends BaseController
{
    public function index()
    {
        return view('index');
    }

    public function search()
    {
        try {
            $from = $this->request->getGet("from");
            $to = $this->request->getGet("to");
            $flayingDate = $this->request->getGet("flaying_date");

            $db = db_connect();
            $result = $db->query(
                "SELECT * FROM ticket_origins WHERE _from like ? and _to like ? and fly_date = ?",
                ["%$from%", "%$to%", $flayingDate]
            );
            $data = [
                'page_header' => 'Available Flight',
                'lists' => $result->getResult()
            ];
            return view('flights',$data);
        } catch (\Throwable $throwable) {
            return redirect()->back()->with('fail', $throwable->getMessage());
        }
    }
}
