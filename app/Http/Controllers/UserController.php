<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function form()
    {
        return view('form');
    }
    public function contact()
    {
        return view('contact');
    }
    public function details()
    {
        return view('form-details');
    }
    public function admit()
    {
        return view('admit');
    }

}
