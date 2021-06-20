<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $req)
    {
        
        //return view('home')->with('id','123');
        // return view('home')
        // ->withId('123')
        // ->withName('Anik');
        $id = '123';
        $name = $req->session()->get('uname');
        return view('home',compact('id','name'));
        
        
    }
}
