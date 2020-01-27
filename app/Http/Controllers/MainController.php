<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()  {
        return view('home');
    }
    public function dashboard() {
        return view('dashboard.master');
    }
    public function add_category() {
        return view('dashboard.category');
    }
}
