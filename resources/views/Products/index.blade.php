@extends('layouts.master')
@section('content')
<div class='container2' col-12>
<article class="carrito col-10">
        <img src={{asset("img/Logo_aurora.png")}} alt="Logo de Aurora Materiales">
        <div class="bar">
            <span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span class="five"></span>
        </div>
        <article class="profileadm col-12">
        <section class="row">
            @foreach($products as $product)
            <article class="block col" >
                <section class="top">
                    <ul>
                        <li><a href="#"><i class="favorite"></i></a></li>
                        <li><span class="title_product">{{$product->name}}</span></li>
                        <li><a href="#"><i class="" aria-hidden="true"></i>
                    </ul>
                </section>
                <section class="middle" col-12>
                    <img src="{{asset('storage/'.$product->picture)}}" alt="" />
                </section>
                <section class="bottom2">
                <div class="info">{{$product->name}}</div>
                <div class="info">{{$product->description}}</div>
                <div class="info">$  {{$product->price}}</div>
                </section>
                <section>
                    <a href="{{url('carrito/add/'.$product->id)}}" class="btn btn-info"><i class="material-icons">&#xE147;</i></a>
                </section>
                @if(auth()->user() && auth()->user()->role === 9)
                <section>
                    <a href="{{url('/products/{id}/update'.$product->id)}}" class="btn btn-warning"><i class="material-icons">delete</i></a>
                </section>
                <section>
                    <a href="{{url('/products/{id}/destroy'.$product->id)}}" class="btn btn-danger"><i class="material-icons">edit</i></a>
                </section>
                @endif
            </article>
            @endforeach
        </section>
        </article>
</article>
</div>
@endsection
      