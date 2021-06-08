<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        
        if($req->uname == $req->password)
        {
            //echo "Valid User";
            return redirect('/home');
        }
        else echo "Invalid User";
    }
}

