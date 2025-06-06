<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        $title = 'Osu Tyumen Cup 2025';
        return view('main', compact('title'));
    }
}
