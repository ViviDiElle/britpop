@extends('layouts.app')

@section('title', 'Albums')

@section('content')
<div class="container">
    <h1>Albums</h1>
    <a href="{{ route('albums.create') }}" class="btn btn-primary mb-3">Crea nuovo album</a>
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Artist</th>
                <th>Year</th>
                <th>Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($albums as $album)
                <tr>
                    <td>{{ $album->title }}</td>
                    <td>{{ $album->artist->name }}</td>
                    <td>{{ $album->year }}</td>
                    <td>
                        <a href="{{ route('albums.show', $album) }}" class="btn btn-info">Dettagli</a>
                        <a href="{{ route('albums.edit', $album) }}" class="btn btn-warning">Modifica</a>
                        <form action="{{ route('albums.destroy', $album) }}" method="POST" style="display: inline;" onsubmit="return confirm('Sei sicuro di voler eliminare questo album?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Elimina</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
