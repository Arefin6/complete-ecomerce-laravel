<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    
    public function dashboard(){

        return view('admin.dashboard');
    }

    public function orders(){

        return view('admin.Orders.index');
    }
}
