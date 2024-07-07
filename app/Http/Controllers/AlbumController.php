<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Album;

class AlbumController extends Controller
{
    public function index()
    {
        $albums = Album::all();
        return view('layouts.albums', compact('albums'));
    }

    public function show(Album $album)
    {
        return view('albums.show', compact('album'));
    }

    public function create()
    {
        return view('albums.create');
    }

    public function store(Request $request)
    {
        $album = Album::create($request->all());
        return redirect()->route('layouts.albums');
    }

    public function edit(Album $album)
    {
        return view('albums.edit', compact('album'));
    }

    public function update(Request $request, Album $album)
    {
        $album->update($request->all());
        return redirect()->route('layouts.albums');
    }

    public function destroy(Album $album)
    {
        $album->delete();
        return redirect()->route('layouts.albums');
    }
}