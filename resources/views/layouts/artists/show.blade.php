@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    Dettagli Artista
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $artist->name }}</h5>
                    <p><strong>Album:</strong></p>
                    <ul>
                        @foreach ($artist->albums as $album)
                            <li>{{ $album->title }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
