@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="container">
    <h1>Tied to the 90s</h1>
    <p>Let's dive into some of the greatest Britpop bands and albums from the 90s!</p>

    <h2>Bands</h2>
    <ul class="list-group">
        @foreach ($bands as $band)
            <li class="list-group-item">{{ $band->name }}</li>
        @endforeach
    </ul>
</div>
@endsection
