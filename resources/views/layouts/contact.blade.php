@extends('layouts.app')

@section('title', 'Contatti')

@section('content')
<div class="container">
    <h1>Contatti</h1>
    <p>Nome: Viviana Di Leonardo </p>
    <p>Email: dileonardov@yahoo.com</p>
    <p>Telefono: +39 0123 456789</p>

    <!-- Inserisci qui il codice per visualizzare il messaggio di successo -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <h2>Contattami</h2>
    <form action="/sendmail" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nome:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="message">Messaggio:</label>
            <textarea id="message" name="message" required></textarea>
        </div>
        <button type="submit">Invia</button>
    </form>
</div>
@endsection

