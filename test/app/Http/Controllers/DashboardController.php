<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function create()
    {
        return view('dashboard');
 
        
    }
}
