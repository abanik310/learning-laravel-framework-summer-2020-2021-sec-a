<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create()
    {
        return view('user.create');
    }

    public function view()
    {
        $users = 
        [
            [1,'AB Anik','123','anik@gmail.com','Admin'],
            [2,'Akash','456','akash@gmail.com','Student'],
            [3,'Afridi','789','afridi@gmail.com','Admin']
        ];
        return view ('user.viewAllUser')->with('userlist',$users);
    }
}
