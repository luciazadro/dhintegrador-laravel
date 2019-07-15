@extends('layouts.master')
@section('content')
<div class='container2 col-12'>
<div class="carrito col-8">
        <img src={{asset("img/Logo_aurora.png")}} alt="Logo de Aurora Materiales">
        <div class="bar">
            <span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span class="five"></span>
        </div>
        <div class="profileadm col-8">
            @foreach($products as $product)
        <div class="block" >
                <div class="top">
                    <ul>
                        <li><a href="#"><i class="favorite"></i></a></li>
                        <li><span class="title_product">{{$product->name}}</span></li>
                        <li><a href="#"><i class="" aria-hidden="true"></i>
                    </ul>
                </div>
            <div class="middle">
            <img src="{{asset('storage/'.$product->picture)}}" alt="" />
            </div>
            <div class="bottom2">
                <div class="info">{{$product->name}}</div>
                <div class="info">{{$product->description}}</div>
                <div class="info">$  {{$product->price}}</div>
            </div>
            <div>
            <a href="{{route('carrito.add', $product->id)}}" class="btn btn-info"><i class="material-icons">&#xE147;</i></a>
            </div>
        </div>
        @endforeach
        </div>
</div>
</div>
@endsection
      