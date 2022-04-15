<?php

namespace Dashboard\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Dashboard;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        //dd('ddd');
        return view('DashboardView::dashboard');
    }



    public function show(Dashboard $dashboard)
    {
        //
    }

}
