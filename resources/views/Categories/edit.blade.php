@extends('layouts.master')
@section('content')
@if(count($errors) > 0)
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<br>
<br>
<br>
<div class="carrito col-6">
    <h1 class="text-center">Editar Categorias de Productos Aurora</h1>
    <img src="{{asset('img/Logo_aurora.png')}}" alt="Logo de Aurora Materiales">
    <div class="bar">
            <span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span class="five"></span>
    </div>
    <form class='form-group' method="POST" action="{{url('categories.update',$category->id)}}" enctype="multipart/form-data" >
            @method('PUT')
            @csrf
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" name="name" value="{{$category->name}}" class="form-control">
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Editar Producto" id="editProduct">
        </div>
    </form>
</div>
@endsection
