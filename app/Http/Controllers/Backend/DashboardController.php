<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(request $request)
    {
        return view('admin-portfolio.backend.dashboard.list');
    }
    public function tables(request $request)
    {
        return view('admin-portfolio.backend.dashboard.table-detail');
    }
}
