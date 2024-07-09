<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;
use App\Models\Artist;

class AlbumController extends Controller
{
   public function index()
{
    $albums = Album::all();
    return view('layouts.albums', compact('albums'));
}

    public function show(Album $album)
    {
        return view('layouts.albums.show', compact('album'));
    }

    public function create()
{
    $artists = Artist::all();
    return view('layouts.albums.create', compact('artists'));
}

    public function store(Request $request)
{
    $data = $request->except('_token');
    $album = Album::create($data);
    return redirect()->route('albums.index');
}


    public function edit(Album $album)
    {
        return view('layouts.albums.edit', compact('album'));
    }

    public function update(Request $request, Album $album)
    {
        $album->update($request->all());
        return redirect()->route('albums.index');
    }

    public function destroy(Album $album)
    {
        $album->delete();
        return redirect()->route('albums.index');
    }
}
