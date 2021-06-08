<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        
        //return view('home')->with('id','123');
        return view('home')
        ->withId('123')
        ->withName('Anik');
    }
}
