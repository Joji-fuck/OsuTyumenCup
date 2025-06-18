<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MappoolController extends Controller
{
    public function index(){
        $title = "Mappool";
        return view('mappool', compact('title'));
    }
}
