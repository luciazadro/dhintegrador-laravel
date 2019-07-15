@extends('layouts.master')
@section('content')
<body>
    @include('partials.navbar')
    <div class="profile col-12">
        <img src="img/Logo_aurora.png" alt="Logo de Aurora Materiales">
        <h1>Listado de Usuarios en Base de Datos
        <div class="bar">
            <span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span class="five"></span>
        </div>
        <table>
            <thead>
                <tr>
                    <th style="width:10%">#</th>
                    <th style="width:30%">Nombre</th>
                    <th style="width:30%">Apellido</th>
                    <th style="width:30%">E-Mail</th>

                    <th>Ver</th>
                    <th>Editar</th>
                    <th>Borrar</th>
            </thead>
        <tbody>
            <tr>
                <td data-th="Users">
                        @foreach ($users as $user)
                        <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->lastname}}</td>
                        <td>{{$user->email}}</td>
                        
                            <td><a href="/users/show{{$user->id}}">Ver</a></td>
                            <td><a href="/users/update{{$user->id}}">Editar</a></td>    
                            <td><a href="/users/delete{{$user->id}}">Borrar</a></td>
                        </tr>
                        @endforeach
        </tbody>
        </table>
    </div>
</body>
@endsection