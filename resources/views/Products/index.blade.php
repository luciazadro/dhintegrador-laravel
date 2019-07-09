@extends('layouts.master')
@include('partials.navbar')
@section('content')
<div class="carrito col-8">
        <img src="img/Logo_aurora.png" alt="Logo de Aurora Materiales">
        <div class="bar">
            <span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span class="five"></span>
        </div>
        <div>
        <form action={{route('product.search')}} method="get">
            <article class="bottom-header-search form-group">
                <input type="text" name="busqueda" placeholder="Buscar...">
                    <button type="submit" name="search-submit" ><i class="fas fa-search"></i></button>
            </article>
        </form>
        </div>
        <div>
            @foreach($products as $product)
        <div class="block">
                <div class="top">
                    <ul>
                        <li><span class="title_product">{{$product->name}}</span></li>
                    </ul>
                </div>
            <div class="middle">
            <img src="{{asset($product->picture)}}" alt="" />
            </div>
            <div class="bottom">
                <div class="heading">{{$product->name}}</div>
                <div class="info">{{$product->description}}</div>
                <div class="price">{{$product->price}}</div>
            </div>
            
            @endforeach
        </div>
        </div>
</div>
@endsection
      