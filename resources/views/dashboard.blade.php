@extends('layouts.layout')

@section('content')
    <div class="container mt-5">
        <h1>Bem-vindo ao Sistema</h1>
        <p>Você está logado!</p>
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-danger">
            Sair
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
@endsection
