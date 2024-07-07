@extends('layouts.app')

@section('title', 'Record Labels')

@section('content')
<div class="container">
    <h1>Record Labels</h1>
    <ul class="list-group">
        @foreach ($labels as $label)
            <li class="list-group-item">{{ $label->name }}</li>
        @endforeach
    </ul>
</div>
@endsection
