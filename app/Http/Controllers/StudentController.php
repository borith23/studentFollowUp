<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use Image;
use App\Student;
use Illuminate\Http\Request;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $student=Student::all();
        // return view('home',compact("student"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.addStudent');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $users=User::find(Auth::id());
        $student = new Student;
        $student->firstName = $request->get('fname');
        $student->lastName = $request->get('lname');
        $student->class = $request->get('class');
        $student->description = $request->get('description');
        if($request->hasFile('pic')){
            $file = $request->file('pic');
            $extension = $file->getClientOriginalExtension();
            $filename = time(). ".".$extension;
            $file->move('uploads/students', $filename);
            $student->picture = $filename;
        }
        // $student->user_id = $users->id;
        $student->user_id = $request->get('user_id');
        $student->save();
        return redirect('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Student::find($id);
        return view('student.viewStudent', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::find($id);
        return view('student.editStudent',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
       
        $users=User::find(Auth::id());
        $students=Student::find($id);
        $students-> firstName = $request->get('fname');
        $students-> lastName = $request->get('lname');
        $students-> class = $request->get('class');
        $students-> description = $request->get('description');
        if ($request->hasfile('pic')){
            $file = $request->file('pic');
            $extension = $file->getClientOriginalExtension();
            $filename = time(). ".".$extension;
            $file->move('uploads/students', $filename);
            $student->picture = $filename;
            $student->save();
        }
        // $students->user_id = $users->id;
        $students->user_id = $request->get('user_id');
        $students->save();
        return redirect('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }

     
}
