@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="container">
    <h1>Homepage</h1>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet fugit perferendis rerum laudantium sunt sed consectetur sit atque officiis, dignissimos dolor? Tenetur et saepe possimus voluptate, quas libero reiciendis incidunt!</p>

    <h2>Bands</h2>
    <ul class="list-group">
        @foreach ($bands as $band)
            <li class="list-group-item">{{ $band->name }}</li>
        @endforeach
    </ul>
</div>
@endsection
