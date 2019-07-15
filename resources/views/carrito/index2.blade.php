@extends('layouts.master')
@section('content')
<br>
<div class="offset-2 col-6">
    <h1>Carrito de Compras</h1>
    <br>
    @if($products !== null)
    <ul>
        @foreach($products as $product)
        <li>
            <p>{{ $product['name'] }}</p><br>
            <a class="btn btn-info" href="/cart/remove/{{ $product['id'] }}">Quitar Producto</a>
        </li>
        <br>
        @endforeach
    </ul>
    <br>
    <a class="btn btn-danger" href="/cart/flush">Vaciar Carrito</a>
    @else
        <div class="alert alert-danger" role="alert">
            Aun el carrito esta Vacio<a href="/products">!</a>!
        </div>
    @endif
</div>
@endsection