<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function Applicants()
    {
        return view('admin');
    }
    public function search()
    {
        return view('search');
    }
}
