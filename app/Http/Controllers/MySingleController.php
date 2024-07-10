<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Http\Request;

class MySingleController extends Controller
{

    public function getAllTeachers(){
        

        $teachers = Teacher::paginate(5);
        return view('teachers', ['teachers' => $teachers]);
    }
    
    public function showView() {
        return "This is view2";
    }
}
