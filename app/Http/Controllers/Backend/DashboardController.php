<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use Str;
use Session;

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
    public function create(request $request)
    {
        return view('admin-portfolio.backend.dashboard.create-about');
    }
    public function store(request $request)
    {
        //dd($request->all());

        $insertRecord = new About;
        $insertRecord->position = trim($request->position);
        // $insertRecord->profile = trim($request->profile);
        $insertRecord->description = trim($request->description);
        $insertRecord->phone = trim($request->phone);
        $insertRecord->email = trim($request->email);
        $insertRecord->website = trim($request->website);

        if(!empty($request->file('profile'))){
           $file        = $request->file('profile');
           $randomStr   = Str::random(30);
           $filename    = $randomStr . '.' . $file->getClientOriginalExtension();
           $file->move('admincss/assets/img', $filename);
           $insertRecord->profile = $filename;
        }
        $insertRecord->save();

        return redirect()->back()->with('success', "Your about was saved successfully");
    }
}
