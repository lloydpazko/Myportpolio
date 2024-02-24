<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Experience;
use App\Models\Skill;
use App\Models\education;
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
        $data ['getrecord2'] = Experience::all();
        $data ['getrecord3'] = Skill::all();
        $data ['getrecord4']= education::all();
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
        if($request->update = "update"){
            $editRecord = request()->validate(['name' => 'request']);
            $editRecord = request()->validate(['percentage' => 'request']);
            $editRecord = new Skill;
        }else{
            $editRecord = Skill::find($request->id);
            $editRecord->name = trim($request->name);
            $editRecord->percentage = trim($request->percentage);
            $editRecord->save();
            return redirect()->back()->with('success', "Your skill history was Added successfully");
        }
    }
    // public function update_skill(Request $request, $id)
    // {
    //     $request->validate([
    //         'name' => ['required','string','max:255'],
    //         'percentage' => ['required','string','max:255'],

    //     ]);
    //     $product = Skill::find($id);
    //     $product -> name = $request->name;
    //     $product -> percentage = $request->percentage;
    //     $product -> save();

    //     return redirect()->back()->with('success', "Your skill has beed updated successfully");
    // }

    // public function destroy(Product_model $product, $id)
    // {
    //     $product = Product_model::find($id);
    //     $product->delete();
    //     return redirect()->route('ProductList.index');
    // }
    }
