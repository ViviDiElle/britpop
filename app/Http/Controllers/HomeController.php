<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Artist;

class HomeController extends Controller
{
    public function index()
    {
        $artists = Artist::all(); 
        return view('layouts.home', ['bands' => $artists]); 
    }
}

