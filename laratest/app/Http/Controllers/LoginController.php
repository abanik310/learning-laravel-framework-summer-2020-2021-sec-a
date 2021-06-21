<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

class LoginController extends Controller
{
    public function index()
    {
        return view('Login.login');
    }

    public function verify(Request $req)
    {
        //return view('login');
        //dd($req);
        //echo "username : ".$req->uname. "<br> Password : ".$req->password;

        // $validation = Validator :: make($req->all(), 
        // [
        //     'uname' => 'required|min:5',
        //     'password' => 'required'
        // ]);

        // if($validation->fails())
        // {
            
        //     return back()
        //     ->with('errors', $validation->errors())
        //     ->withInput();
        // }

        // $this->validate($req,
        // [
        //     'uname' => 'required|min:5',
        //      'password' => 'required'
        // ])->validate();

        $this->validate($req, [
                'uname'=> 'required|min:5',
                'password'=> 'required'
            ])->validate();

        $req->session()->put('uname', $req->uname);
        
        if($req->uname == $req->password)
        {
            //echo "Valid User";
            return redirect('/home');
        }
        else 
        {
            $req->session()->flash('msg','Invalid Username or Password!');
            return redirect('login');
        }

        
    }
}

