<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Experience;
use App\Models\Skill;
use App\Models\education;
use App\Models\banner;
use Str;
use Session;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function dashboard(request $request)
    {
        return view('admin-portfolio.backend.dashboard.list');
    }
    public function tables(request $request)
    {
        $data ['getrecord'] = About::all();
        $data ['getrecord2'] = Experience::all();
        $data ['getrecord3'] = Skill::all();
        $data ['getrecord4']= education::all();
        return view('admin-portfolio.backend.dashboard.table-detail', $data);
    }
    public function create(request $request)
    {
        return view('admin-portfolio.backend.dashboard.create-about');
    }
    public function edit_about_store(request $request)
    {
        $insertRecord = new About;
        $insertRecord->position = trim($request->position);
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
    public function edit_about(request $request)
    {
        $data2 = About::find($request->id);
        return view('admin-portfolio.backend.dashboard.edit-about', compact('data2'));
    }
    public function edit_about_update(request $request, $id)
    {
            $insertRecord = About::find($id);

            $insertRecord->position = $request->position;
            $insertRecord->description = $request->description;
            $insertRecord->phone = $request->phone;
            $insertRecord->email = $request->email;
            $insertRecord->website = $request->website;

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
            $insertRecord->update();
        return redirect()->back()->with('success', "Your about was saved successfully");

    }
    public function index_experience()
    {
        return view('admin-portfolio.backend.dashboard.create-experience');
    }
    public function create_experience(request $request)
    {
        $insertrecordsExp = new Experience;
        $insertrecordsExp->campany = trim($request->campany);
        $insertrecordsExp->position_designation = trim($request->position_designation);
        $insertrecordsExp->year = trim($request->year);
        $insertrecordsExp->address = trim($request->address);
        $insertrecordsExp->description = trim($request->description);

        $insertrecordsExp->Save();

        return redirect()->back()->with('success', "Your Experience was Added successfully");
    }
    public function education()
    {
        return view('admin-portfolio.backend.dashboard.create-education');
    }
    public function create_education(request $request)
    {
        $insertrecordsEdu = new education;
        $insertrecordsEdu->year = trim($request->year);
        $insertrecordsEdu->course = trim($request->course);
        $insertrecordsEdu->school = trim($request->school);
        $insertrecordsEdu->address = trim($request->address);
        $insertrecordsEdu->description = trim($request->description);

        $insertrecordsEdu->Save();

        return redirect()->back()->with('success', "Your School history was Added successfully");
    }
    public function edit_education(request $request , $id)
    {
        $education = education::find($id);
        return view('admin-portfolio.backend.dashboard.edit-education', compact('education'));
    }
    public function update_education(request $request , $id)
    {
        $update_education = education::find($id);
        $update_education->year = $request->year;
        $update_education->course = $request->course;
        $update_education->school = $request->school;
        $update_education->address = $request->address;
        $update_education->description = $request->description;
        $update_education->update();

        return redirect()->back()->with('success', "Your education history was updated successfully");
    }
    public function create_skill_store(request $request)
    {
        $insertrecordskill = new Skill;
        $insertrecordskill->name = trim($request->name);
        $insertrecordskill->percentage = trim($request->percentage);
        $insertrecordskill->save();

        return redirect()->back()->with('success', "Your skill history was Added successfully");
    }
    public function create_skill(request $request)
    {
        return view('admin-portfolio.backend.dashboard.create-skills');
    }
    public function edit_skill(request $request ,$id)
    {
        $data = Skill::find($id);
        return view('admin-portfolio.backend.dashboard.edit-skills', compact('data'));
    }
    public function update_skill(request $request , $id)
    {
        $update_data = Skill::find($id);
        $update_data->name = $request->name;
        $update_data->percentage = $request->percentage;
        $update_data->update();
        return redirect()->back()->with('success', "Your skill history was updated successfully");
    }
    public function edit_exp(request $request)
    {
        $Experience = Experience::find($request->id);
        return view('admin-portfolio.backend.dashboard.edit-exprience', compact('Experience'));
    }
    public function edit_update_exp(request $request , $id)
    {
        $update_exp = Experience::find($id);

        $update_exp->campany = $request->campany;
        $update_exp->position_designation = $request->position_designation;
        $update_exp->year = $request->year;
        $update_exp->address = $request->address;
        $update_exp->description = $request->description;

        $update_exp->update();

        return redirect()->back()->with('success', "Your Experience was updated successfully");
    }
    public function preview()
    {
        return view('admin-portfolio.backend.dashboard.indexpagespreview');
    }
    public function create_index(request $request)
    {
        return view('admin-portfolio.backend.dashboard.create-banner');
    }
    public function create_new_index_view(request $request)
    {
        $insertbanner = new banner;
        $insertbanner->name = trim($request->name);
        $insertbanner->dev = trim($request->dev);

        if(!empty($request->file('resume'))){
           $file        = $request->file('resume');
           $randomStr   = Str::random(30);
           $filename    = $randomStr . '.' . $file->getClientOriginalExtension();
           $file->move('admincss/assets/images', $filename);
           $insertbanner->resume = $filename;
        }
        // if(!empty($request->file('imagewelcome'))){
        //     $file        = $request->file('imagewelcome');
        //     $randomStr   = Str::random(30);
        //     $filename    = $randomStr . '.' . $file->getClientOriginalExtension();
        //     $file->move('assets/images/about', $filename);
        //     $insertbanner->imagewelcome = $filename;
        //  }
        $insertbanner->save();

        return redirect('admin/preview-indexpages');
    }
}
