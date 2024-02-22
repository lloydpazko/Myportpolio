<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
class HomeController extends Controller
{
    public function index()
    {
        $data ['getrecord'] = About::all();
        return view('layouts.app', $data);
    }
}
