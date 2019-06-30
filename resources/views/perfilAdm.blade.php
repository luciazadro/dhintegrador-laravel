@extends('layouts.master')
@section('content')
@include('partials.head_perfil')
<body>
<br>
<br>
<br>
<div class=container col 12>
    <div class="profile col-4">
        <div>
            <img width="40px" style="border-radius:50%" src="{{asset('storage/avatars/'.Auth::User()->avatar)}}" alt="">
        </div>
            <h1>Bienvenido/a:
              <br>
            {{Auth::user()->namme}} {{Auth::user()->lastname}}
            <br>
            <button type="button" class="btn btn-danger"> <a href={{}}>Logout </a> </button>
            </h1>
            <div class="bar">
                <span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span class="five"></span>
            </div>
                <h2> {{$user->email}}  </h2>
            </div>
            <div class="bar">
                <span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span class="five"></span>
            </div>
        <div class='carrito col-10'>
        <form action="" method="POST">
            <img src="img/Logo_aurora.png" alt="Logo de Aurora Materiales
            ">
            <h1>Actualiza tus Datos
            <div class="bar">
                <span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span class="five"></span>
            </div>
            <div>
            {{-- <?php include_once('Users_Folder/modify_Users.php'); ?> --}}
            <div class="bar">
                <span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span class="five"></span>
            </div>
            <div class="form-group">
                <label for="fotoperfil" class="control-label">Foto de Perfil</label>
                 <br>
               <input  type="file" name="avatar" value=""/>
            </div>
            <button type="submit" class="btn btn-danger"> Actualizar </button>
            </h1>
            </form>
        </div>
    </div>
    <div class=container2 col 12>
        <div class='carrito col-6'>
            <img src="img/Logo_aurora.png" alt="Logo de Aurora Materiales
            ">
            <h1>Listado de Usuarios en Base de Datos
            <div class="bar">
                <span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span class="five"></span>
            </div>
            <div>
            {{-- <?php include_once('Users_Folder/list_Users.php'); ?> --}}
            </div>
        </div>
    </div>
        <div class=container3 col 12>
        <div class='carrito col-6'>
        <form action="" method="POST">
            <img src="img/Logo_aurora.png" alt="Logo de Aurora Materiales
            ">
            <h1>Listado de Pedidos Confirmados
            <div class="bar">
                <span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span class="five"></span>
            </div>
            </form>
        </div>
        </div>
        <div class=container4 col 12>
        <div class='carrito col-6'>
        <form action="" method="POST">
            <img src="img/Logo_aurora.png" alt="Logo de Aurora Materiales
            ">
            <h1>Listado de Productos
            <div class="bar">
                <span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span class="five"></span>
            </div>
            </form>
        </div>
        </div>
    <div> 
    <?php include_once('components/footer.php'); ?>
    </div>
    </body>