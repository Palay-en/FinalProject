<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // The index method for displaying the dashboard
    public function index()
    {
        return view('dashboard');  // Return the dashboard view
    }
}
