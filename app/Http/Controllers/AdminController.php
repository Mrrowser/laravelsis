<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Student;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //

    public function edit(Student $admin) {
        return view('admin.student-edit', ['admin' => $admin]);
    }

    public function update(Request $request, Student $admin) {

        $formFields = $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'gender' => 'required',
            'status' => 'required',
            'nationality' => 'required',
            'religion' => 'required',
        ]);
        

        $admin->update($formFields);

        return back()->with('message', 'Student Updated successfully!');
    }


    public function destroy(Student $admin){
        $admin->delete();

        return redirect('/home')->with('message', 'Student Deleted Successfully!');
    }


    public function create(){
        return view('admin.create');
    }

    public function store(Request $request) {
        $formFields1 = $request->validate([
            'what' => 'required',
            'where' => 'required',
            'whenn' => 'required',
            'message' => 'required',
        ]);
        

        Admin::create($formFields1);

        return redirect('/home')->with('message', 'Announcement post successfully!');
    }
}
