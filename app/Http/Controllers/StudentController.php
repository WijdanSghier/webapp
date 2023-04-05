<?php

   namespace App\Http\Controllers;
   use App\Models\Student;
   use Illuminate\Http\Request;
   use Illuminate\Http\RedirectResponse;
   use Illuminate\View\View;

   class StudentController extends Controller
   {
    public function create() : View
    {
      return view('student_create');
    }
    public function store(Request $request) : RedirectResponse
    {

        Student::create([
           "first_name" => $request->first_name,
           "last_name" => $request->last_name,
           "email" => $request->email,
           "birthdate" => $request->birthdate,
           "collage" => $request->collage,  ]);
             return redirect("/create");
        }}
