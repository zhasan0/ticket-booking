<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CompanyModel;
use App\Models\TicketOriginModel;
use http\Env\Request;

class TicketOrigin extends BaseController
{
    public function __construct()
    {
        helper(['url', 'form']);
    }

    public function index()
    {
        $lists = new TicketOriginModel();

        $data = [
            'page_header' => 'Ticket List',
            'addLink' => '/ticketorigin/create',
            'lists' => $lists->findAll()
        ];

        return view('admin/ticket_origins/index', $data);
    }

    public function create()
    {
        $companies = new CompanyModel();
        $data = [
            'page_header' => 'Add New',
            'companies' => $companies->findAll()
        ];

        return view('admin/ticket_origins/create', $data);
    }

    public function store()
    {
        $validation = $this->validate([
            'name' => 'required',
            'company' => 'required',
            'from' => 'required',
            'to' => 'required',
            'fly_date' => 'required',
            'purchase_price' => 'required',
            'sale_price' => 'required',
            'status' => 'required',
        ]);

        if (!$validation) {
            return view('admin/companies/create', ['validation' => $this->validator]);
        } else {
            if ($_REQUEST['status'] == "on") {
                $status = 1;
            } else {
                $status = 0;
            }

            $name = $this->request->getPost('name');
            $company = $this->request->getPost('company');
            $from = $this->request->getPost('from');
            $to = $this->request->getPost('to');
            $fly_date = $this->request->getPost('fly_date');
            $purchase_price = $this->request->getPost('purchase_price');
            $sale_price = $this->request->getPost('sale_price');

            $values = [
                'name' => $name,
                'company_id' => $company,
                '_from' => $from,
                '_to' => $to,
                'fly_date' => $fly_date,
                'purchase_price' => $purchase_price,
                'sale_price' => $sale_price,
                'active' => $status,
            ];

            $model = new \App\Models\TicketOriginModel();
            $model->insert($values);
            return redirect()->to('ticketorigin/create')->with('success', 'Successfully Create!');
        }
    }
}
