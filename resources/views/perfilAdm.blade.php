@extends('layouts.master')
@include('partials.navbar')
@section('content')
<body>
<br>
<br>
<br>
<div class="container2 col-12" >
    <div class="profileadm col-6">
        <div>
            <img width="40px" style="border-radius:50%" src="{{asset('storage/avatars/'.Auth::user()->avatar)}}" alt="">
        </div>
            <h1>Bienvenido/a:</h1>
              <br>
            {{Auth::user()->name}} {{Auth::user()->lastname}}
            <br>
            <button type="button" class="btn btn-danger"> <a href="{{ route('logout') }}"
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
    <div class='profileadm col-6'>
            <img src="img/Logo_aurora.png" alt="Logo de Aurora Materiales">
            <h1>Agregar Productos</h1>
            <div class="bar">
                <span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span class="five"></span>
            </div>
            <div>

            </div>
            <button type="button"class="btn btn-danger"><a href={{asset("/products.create")}}></a> Nuevo Producto </button>
    </div>
    <div class='profileadm col-6'>
            <img src="img/Logo_aurora.png" alt="Logo de Aurora Materiales">
            <h1>Agregar Categorias</h1>
            <div class="bar">
                <span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span class="five"></span>
            </div>
            <div>

            </div>
            <button type="button" href="/producto/create" class="btn btn-danger"> Nueva Categoria </button>
    </div>
    <div class='carrito col-10'>
            <img src="img/Logo_aurora.png" alt="Logo de Aurora Materiales">
            <h1>Listado de Usuarios en Base de Datos
            <div class="bar">
                <span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span class="five"></span>
            </div>
            @include('users.index')
            {{-- <button type="button" class="btn btn-danger"> <a href="/users/index">Listado de Usuarios </a> </button> --}}
    </div>
    <div class='carrito col-10'>
        <form action="" method="POST">
            <img src="img/Logo_aurora.png" alt="Logo de Aurora Materiales
            ">
            <h1>Listado de Pedidos Confirmados
            <div class="bar">
                <span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span class="five"></span>
            </div>
            </form>
    </div>
    <div class='carrito col-10'>
        <form action="" method="POST">
            <img src="img/Logo_aurora.png" alt="Logo de Aurora Materiales
            ">
            <h1>Listado de Productos
            <div class="bar">
                <span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span class="five"></span>
            </div>
            @include('products.index')
            </form>
    </div>
</div> 
</body>