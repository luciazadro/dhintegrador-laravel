@extends('layouts.master')
@include('partials.navbar')
@section('content')
<body>
<br>
<br>
<br>
<div class=container2 col 12>
    <div class="profile col-4">
        <div>
            <img width="40px" style="border-radius:50%" src="{{asset('storage/avatars/'.Auth::User()->avatar)}}" alt="">
        </div>
            <h1>Bienvenido/a:</h1>
            <br>
            {{Auth::user()->name}} {{Auth::user()->lastname}}
            <br>
            <button type="button" class="btn btn-danger"> <a class="nav-link" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
                </form>
            </button>
            <div class="bar">
                <span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span class="five"></span>
            </div>
                <h2> {{Auth::user()->email}}  </h2>
            <div class="bar">
                <span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span class="five"></span>
            </div>
    </div>
    <div class='profile col-2'>
    <img src="img/Logo_aurora.png" alt="Logo de Aurora Materiales">
            <h1>Actualiza tus Datos de Registracion</h1>
        <div class="bar">
        <span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span class="five"></span>
        </div>
        <div>
    
        </div>
        <button type="button"><a href="/users/edit" class="btn btn-danger">Cambiar </a></button>
    </div>
    <div class='profile col-2'>
    <img src="img/Logo_aurora.png" alt="Logo de Aurora Materiales">
    <h1>Actualiza tus Datos de Envio</h1>
            <div class="bar">
            <span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span class="five"></span>
            </div>
            <button type="button"> <a href="/users/edit" class="btn btn-danger">Ingresar </a></button>
        </div>
    <div class="carrito col-12">
        @include('carrito')
    </div>
</div>
</body>