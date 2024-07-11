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

    public function show($id)
{
    $artist = Artist::with('albums')->find($id);
    return view('layouts.artists.show', ['artist' => $artist]);
}


}
