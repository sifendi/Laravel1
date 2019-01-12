<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Usercontroller extends Controller{
    //new controller
    public function index(){
        return "Hello, I am User controller in function index";
    }

    public function home(){
        return "I am home";
    }

}
