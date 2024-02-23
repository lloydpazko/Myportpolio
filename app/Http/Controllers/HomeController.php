<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Experience;
class HomeController extends Controller
{
    public function index()
    {
        $data ['getrecord'] = About::all();
        $data_2 ['getrecord2'] = Experience::all();
        return view('layouts.app', $data , $data_2);
    }
}
