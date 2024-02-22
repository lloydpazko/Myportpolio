<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use Str;
use Session;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function dashboard(request $request)
    {
        return view('admin-portfolio.backend.dashboard.list');
    }
    public function tables(request $request): View
    {
        $data ['getrecord'] = About::all();
        return view('admin-portfolio.backend.dashboard.table-detail', $data);
    }
    public function create(request $request)
    {
        return view('admin-portfolio.backend.dashboard.create-about');
    }
    public function store(request $request)
    {
        // dd($request->all());
        if($request->update == "add"){
            $insertRecord = request()->validate(['profile' => 'required']);
            $insertRecord = new About;
        }else{
            $insertRecord = About::find($request->id);
        }
        // $insertRecord = new About;
        $insertRecord->position = trim($request->position);
        $insertRecord->description = trim($request->description);
        $insertRecord->phone = trim($request->phone);
        $insertRecord->email = trim($request->email);
        $insertRecord->website = trim($request->website);

        if(!empty($request->file('profile'))){

            if(!empty($insertRecord->profile) && file_exists('admincss/assets/img'. $insertRecord->profile))
            {
                unlink('admincss/assets/img'. $insertRecord->profile);
            }
           $file        = $request->file('profile');
           $randomStr   = Str::random(30);
           $filename    = $randomStr . '.' . $file->getClientOriginalExtension();
           $file->move('admincss/assets/img', $filename);
           $insertRecord->profile = $filename;
        }
        $insertRecord->save();

        return redirect()->back()->with('success', "Your about was saved successfully");

        // sample codes for next creations

        // $insertRecord = new About;
        // $insertRecord->position = trim($request->position);
        // $insertRecord->description = trim($request->description);
        // $insertRecord->phone = trim($request->phone);
        // $insertRecord->email = trim($request->email);
        // $insertRecord->website = trim($request->website);

        // if(!empty($request->file('profile'))){
        //    $file        = $request->file('profile');
        //    $randomStr   = Str::random(30);
        //    $filename    = $randomStr . '.' . $file->getClientOriginalExtension();
        //    $file->move('admincss/assets/img', $filename);
        //    $insertRecord->profile = $filename;
        // }
        // $insertRecord->save();

        // return redirect()->back()->with('success', "Your about was saved successfully");
    }
    // public function destroy_about(About $data, $id)
    // {
    //     $data = About::destroy('$id');
    //     $data = delete();

    //     return redirect('admin-portfolio.backend.dashboard.table-detail')->with('success', 'youre about details you given was deleted successfully!');
    // }
    public function edit_about(request $request)
    {
        $data ['getrecord'] = About::all();
        return view('admin-portfolio.backend.dashboard.edit-about', $data);
    }
}
