@extends('layouts.app')

@section('title', 'Albums')

@section('content')
<div class="container">
    <h1>Albums</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Artist</th>
                <th>Year</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($albums as $album)
                <tr>
                    <td>{{ $album->title }}</td>
                    <td>{{ $album->artist->name }}</td>
                    <td>{{ $album->year }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
