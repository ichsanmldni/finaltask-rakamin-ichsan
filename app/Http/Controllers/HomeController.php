<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home.index');
    }
    public function service(){
        return view('home.service');
    }
    public function portfolio(){
        return view('home.portfolio');
    }
    public function contact(){
        return view('home.contact');
    }
    public function about(){
        return view('home.about');
    }
}