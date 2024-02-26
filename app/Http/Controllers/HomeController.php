<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Experience;
use App\Models\education;
use App\Models\Skill;
use App\Models\Banner;
class HomeController extends Controller
{
    public function index()
    {
        $data ['get_banner'] = Banner::all();
        $data ['getrecord'] = About::all();
        $data ['getrecord2'] = Experience::all();
        $data ['getrecord3'] = Skill::all();
        $data ['getrecord4'] = education::all();
        return view('layouts.app', $data);
    }
}
