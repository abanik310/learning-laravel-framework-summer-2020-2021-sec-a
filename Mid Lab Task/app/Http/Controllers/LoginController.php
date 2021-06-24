<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\userRequest;
use Validator;

class LoginController extends Controller
{
    public function index()
    {
        return view('Login.login');
    }

    public function verify(userRequest $req)
    {
        //return view('login');
        //dd($req);
        //echo "username : ".$req->uname. "<br> Password : ".$req->password;

        // $validation = Validator :: make($req->all(), 
        // [
        //     'email' => 'required|min:5',
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
        //     'email' => 'required|min:5',
        //      'password' => 'required'
        // ])->validate();

        // $this->validate($req, [
        //         'email'=> 'required|regex:/^.+@.+$/i',
        //         'password'=> 'required'
        //     ])->validate();

        $req->session()->put('email', $req->email);
        
        if($req->email == $req->password)
        {
            //echo "Valid User";
            return redirect('/home');
        }
        else 
        {
            $req->session()->flash('msg','Invalid Email or Password!');
            return redirect('login');
        }

        
    }
}

