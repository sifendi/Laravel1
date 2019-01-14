<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Usercontroller extends Controller{
    //new controller
    public function index(){
        // return "Hello, I am User controller in function index";
        // return view ('view_user');
        $nama ="afendi";
        $kerja =["programmer","system analyst","project manager"];

        return view ('view_user',['data1'=> $nama, 'data2' => $kerja]);
    }

    public function home(){
        return "I am home";
    }

}
