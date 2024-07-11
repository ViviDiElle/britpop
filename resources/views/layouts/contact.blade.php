@extends('layouts.app')

@section('title', 'Contatti')

@section('content')
<div class="container">
    <h1 class="mb-4">Contatti</h1>
    <div class="row mb-4">
        <div class="col-md-4">
            <h4>Nome:</h4>
            <p>Viviana Di Leonardo</p>
        </div>
        <div class="col-md-4">
            <h4>Email:</h4>
            <p>dileonardov@yahoo.com</p>
        </div>
        <div class="col-md-4">
            <h4>Telefono:</h4>
            <p>+39 0123 456789</p>
        </div>
    </div>

    
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <h2 class="mb-4">Contattami</h2>
    <form action="/sendmail" method="POST" class="needs-validation" novalidate>
        @csrf
        <div class="form-group">
            <label for="name">Nome:</label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="message">Messaggio:</label>
            <textarea id="message" name="message" class="form-control" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Invia</button>
    </form>
</div>
@endsection


