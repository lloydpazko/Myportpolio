<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Experience;
use App\Models\education;
class HomeController extends Controller
{
    public function index()
    {
        $data ['getrecord'] = About::all();
        $data ['getrecord2'] = Experience::all();
        $data ['getrecord4'] = education::all();
        return view('layouts.app', $data , $data);
    }
}
