<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CompanyModel;

class Company extends BaseController
{
    public function __construct()
    {
        helper(['url', 'form']);
    }

    public function index()
    {
        $lists = new CompanyModel();

        $data = [
            'page_header' => 'Companies List',
            'addLink' => '/company/create',
            'lists' => $lists->findAll()
        ];

        return view('admin/companies/index', $data);
    }

    public function create()
    {
        $data = [
            'page_header' => 'Add New Company',
        ];

        return view('admin/companies/create', $data);
    }

    public function store()
    {
        $validation = $this->validate([
            'name' => 'required',
            'location' => 'required',
        ]);

        if (!$validation) {
            return view('admin/companies/create', ['validation' => $this->validator]);
        } else {
            $name = $this->request->getPost('name');
            $location = $this->request->getPost('location');

            $values = [
                'name' => $name,
                'location' => $location
            ];

            $model = new \App\Models\CompanyModel();
            $query = $model->insert($values);
            if (!$query) {
                return redirect()->back()->with('fail', 'Ohhh! Something went wrong!');
            } else {
                return redirect()->with('success', 'Successfully Create!');
            }
        }
    }
}
