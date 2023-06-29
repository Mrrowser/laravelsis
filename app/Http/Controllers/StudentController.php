<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function index() {

        if(Auth::id()) {
            $usertype=Auth()->user()->usertype;

            if($usertype == 'user')
            {
                return view('students.index', [
                    'students' => Student::latest()->filter(request(['search']))->get()
                ]);
            }
            else if($usertype == 'admin')
            {

                return view('admin.adminhome', [
                    'admins' => Student::latest()->filter(request(['search']))->get()
                ]);
                
            }
            else 
            {
                return redirect()->back();
            }
        }
    }

    public function create(){
        return view('students.create');
    }

    public function store(Request $request) {
        $formFields = $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'gender' => 'required',
            'status' => 'required',
            'nationality' => 'required',
            'religion' => 'required',
        ]);
        

        $formFields['user_id'] = Auth::id();

        Student::create($formFields);

        return redirect('/home')->with('message', 'Student Enrolled successfully!');
    }
}
