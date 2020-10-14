<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req)
    {
        $student = Student::where('email',$req->email)->first();
        if (!$student) {
            return response()->json(['success'=>false, 'message' => 'Login Fail, please check email id']);
         }

         if (Hash::check('password', $student->password)) {
            return response()->json(['success'=>false, 'message' => 'Login Fail, pls check password']);
         }

         return view ('Landing page',compact('student'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       echo "Create";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|max:20',
            'email'=>'required|email|unique:students',
            'password' => 'required|max:20',
        ]);
        $student = new Student([
            'username' => $request->get('username'),
            'email' => $request->get('email'),
            'password' => Hash::make($request->get('password')),
        ]);

        $student->save ();
        return view ('Landing page',compact('student'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function profile ($id)
    {
        $student=Student::findOrFail($id);
        return view ('Profile page',compact ('student'));
    }

    public function landing ($id)
    {
        $student=Student::findOrFail($id);
        return view ('Landing page',compact ('student'));
    }
}
