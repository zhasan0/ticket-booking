<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function __construct()
    {
        helper(['url','form']);
    }
    public function index()
    {
        return view('auth/login');
    }
    public function register()
    {
        return view('auth/register');
    }
    public function save()
    {
       $validation = $this->validate([
            'name'=>'required',
            'email'=>'required|valid_email|is_unique[users.email]',
            'password' => 'required|min_length[4]|max_length[12]',
            'cpassword'  => 'required|min_length[4]|max_length[12]|matches[password]'
       ]);

       if(!$validation){
           return view('auth/register',['validation'=>$this->validator]);
       }
       else
       
       $name = $this->request->getPost('name');
       $email = $this->request->getPost('email');
       $password = $this->request->getPost('password');

       $values = [
           'name'=>$name,
           'email'=>$email,
           'password'=>$password,
       ];

       $usersModal = new \App\Models\UsersModel();
       $query = $usersModal->insert($values);
       if(!$query)
       {
           return redirect()->back()->with('fail','Somthing went wrong');
           
       }
       else
       {
        return redirect()->to('auth/register')->with('success','You have done it');
       }
    }

    function check()
    {
        $validation = $this->validate([
            'email'=> [
                'rules'=>'required|valid_email|is_not_unique[users.email]',
                'erroes'=>[
                    'required'=>'Email Required',
                    'valid_email'=>'Enter a valid Email ',
                    'is_not_unique'=>'This Email is not registered',
                ]
                
                ],
                'password'=> [
                    'rules'=>'required|min_length[4]|max_length[12]|matches[password]',
                    'erroes'=>[
                        'required'=>'Password is Required',
                        'min_length'=>'Must have atleast 4 char',
                        'max_length'=>'Must have atleast 12 char',
                    
                    ]
                ]
            
       ]);

       if(!$validation){
        return view('auth/login',['validation'=>$this->validator]);
       }else
       {
         $email = $this->request->getPost('email');
         $password = $this->request->getPost('password');
         $usersModal = new \App\Models\UsersModel();
         $user_info = $usersModal->where('email', $email)->first();
        // $check_password = Hash::check($password, user_info['password']);

        // if(!$check_password){
        //     session()->setFlashdata('fail','Incorrect Password');
        //     return redirect()->to('/auth')->withInput();
        // }

        if($password == $user_info['password'] && $user_info['email'] == $email ){
            $user_id = $user_info['id'];
            session()->set('loggedUser', $user_id);

            return redirect()->to('/dashboard');
        }
        return view('auth/login');

       }
    }

    function logout(){
        if(session()->has('loggedUser')){
            session()->remove('loggedUser');
            return redirect()->to('/auth?access=out')->with('fail', 'You are logged out');
        }
    }
}