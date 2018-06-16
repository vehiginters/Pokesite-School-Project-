<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getHome(){
      return view('home');
    }
    public function getCustom(){
        return view('custom');
    }
    public function getSubmit(){
        return view('submit');
    }
    public function getLogin(){
        return view('signin');
    }
    public function getRegister(){
        return view('register');
    }
}
