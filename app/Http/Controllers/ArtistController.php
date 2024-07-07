<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Artist;


class ArtistController extends Controller
{
    public function index()
    {
        $artists = Artist::all();
        return view('layouts.artists', compact('artists'));
    }

    public function show(Artist $artist)
    {
        return view('artists.show', compact('artist'));
    }

    public function create()
    {
        return view('artists.create');
    }

    public function store(Request $request)
    {
        $artist = Artist::create($request->all());
        return redirect()->route('layouts.artists');
    }

    public function edit(Artist $artist)
    {
        return view('artists.edit', compact('artist'));
    }

    public function update(Request $request, Artist $artist)
    {
        $artist->update($request->all());
        return redirect()->route('layouts.artists');
    }

    public function destroy(Artist $artist)
    {
        $artist->delete();
        return redirect()->route('layouts.artists');
    }
}