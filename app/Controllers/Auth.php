<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function __construct()
    {
        helper(['url', 'form']);
    }

    public function index()
    {
        return view('auth/login');
    }

    public function register()
    {
        return view('auth/register');
    }

    public function registrationCheck()
    {
        $validation = $this->validate([
            'name' => 'required',
            'email' => 'required|is_unique[users.email]',
            'phone' => 'required',
            'country' => 'required',
            'password' => 'required|min_length[6]|max_length[12]',
            'cpassword' => 'required|min_length[6]|max_length[12]|matches[password]'
        ]);

        if (!$validation) {
            return view('auth/register', ['validation' => $this->validator]);
        } else

            $name = $this->request->getPost('name');
        $email = $this->request->getPost('email');
        $phone = $this->request->getPost('phone');
        $country = $this->request->getPost('country');
        $password = $this->request->getPost('password');

        $values = [
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'country' => $country,
            'password' => md5($password),
        ];

        $usersModal = new \App\Models\UsersModel();
        $query = $usersModal->insert($values);
        if (!$query) {
            return redirect()->back()->with('fail', 'Ohhh! Something went wrong!');

        } else {
            return redirect()->to('login')->with('success', 'Congratulations! Successfully registered!');
        }
    }


    function loginCheck()
    {
        $email = $this->request->getPost('email');
        $password = md5($this->request->getPost('password'));
        $usersModal = new \App\Models\UsersModel();
        $user_info = $usersModal->where('email', $email)->first();

        if (!$user_info) {
            return redirect()->back()->with('fail', "Ohhh! Entered invalid email or password!");
        } else {
            if ($password == $user_info['password']) {
                session()->set('loggedUser', $user_info);
            } else {
                return redirect()->back()->with('fail', "Ohhh! Entered invalid email or password!");
            }
            return redirect()->to('/dashboard');
        }
    }

    function logout()
    {
        if (session()->has('loggedUser')) {
            session()->remove('loggedUser');
            return redirect()->route('login')->with('fail', 'You are logged out');
        }
    }
}