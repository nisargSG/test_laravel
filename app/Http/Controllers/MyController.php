<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MyController extends Controller
{
    //

    public function showView() {
        return "This is view1";
    }

    public function index(){
        //return view('info',["p1"=>$name,"p2"=>$age])
        $data = [
            'name' => 'John Doe',
            'email' => 'john@example.com',
        ];
        return view('info')->with($data);
    }

    

}
