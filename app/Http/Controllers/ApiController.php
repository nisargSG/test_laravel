<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Rules\Uppercase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{
    public function showView()
    {
        return view('addteacher');
    }

    public function getAllTeachers()
    {
        $teachers = DB::table('teachers')->get();
        return $teachers;
    }


    public function getAllTeachersFromDept1()
    {
        $teachers = DB::table('teachers')->where('department', 'dept1')->get();
        return $teachers;
    }

    public function insertNewTeacher(Request $request)
    {

        $validatedData = $request->validate([
            'name' => ['required','string', new Uppercase],
            'phone' => 'required|string|min:10|max:10',
            'department' => 'required|string|max:255',

        ]);


        DB::table('teachers')->insert([
            'name' => $validatedData['name'],
            'phone' => $validatedData['phone'],
            'department' => $validatedData['department'],
        ]);

        //return $validatedData;

        //return $request->all();


        return redirect()->route('teachers.create')->with('success', 'Teacher added successfully!');

    }

}
