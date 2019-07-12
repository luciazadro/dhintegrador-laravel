@extends('layouts.master')
@section('content')
<div class="carrito col-10">
        <img src="img/Logo_aurora.png" alt="Logo de Aurora Materiales">
        <div class="bar">
            <span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span class="five"></span>
        </div>
    <h2>Carrito de Compras</h2>
    <div>
        <table class="table table-hover table-condensed">
            <thead>
                <tr>
                    <th style="width:5%">Foto</th>
                    <th style="width:50%">Producto / Descripcion</th>
                    <th style="width:10%">Stock</th>
                    <th style="width:10%">Precio</th>
                    <th style="width:8%">Cantidad</th>
                    <th style="width:22%" class="text-center">Subtotal</th>
                    <th style="width:5%"></th>
                </tr>
            </thead>
        <tbody>
          {{-- @dd($product); --}}
            @if (session()->get('carrito.products'))
            @php
            $total = 0;
            @endphp
            @foreach (session()->get('carrito.products') as $product)
            @php
            $total = $total + $product->price;
            @endphp
                <tr>
                <td data-th="Foto">
                  <div class="row">
                  <div class="col-sm-2 hidden-xs"><img src="{{asset('storage/'.$product->picture)}}" alt="..." class="img-responsive" />
                    </div>
                <td data-th="Producto / Descripcion">
                  <div class="row">
                    <div class="col-sm-10">
                      <h4 class="nomargin">{{$product->name}}</h4>
                        <p><{{$product->description}}</p>
                    </div>
                  </div>
                </td>
                <td data-th="Stock">{{$product->stock_id}}</td>
                <td data-th="Precio">{{$product->price}}</td>
                <td data-th="Cantidad">
                 <input id="quantity" type="number" class="form-control text-center" value="1">
                </td>
                <td data-th="Subtotal" class="text-center">$ {{$total}}</td>
                <td class="actions" data-th="">
                  <button class="btn btn-danger btn-m"><a href="/carrrito/remove/{{ $product->id}}"></a></button>
                </td> 
                @endforeach
            </tr>
        </tbody>
    <tfoot>
      <tr>
        <td><a href="carrito/flush" class="btn btn-warning"><i class="fa fa-angle-left"></i> Vaciar</a></td>
        <td colspan="2" class="hidden-xs"></td>
        <td class="hidden-sm text-center">$ {{$total}} </td>
        <td><a href="/carrito/checkout" class="btn btn-success btn-block">Comprar <i class="fa fa-angle-right"></i></a></td>
      </tr>
      @else
        <div class="alert alert-danger" role="alert">
            Aun el carrito esta Vacio<a href="/products">!</a>!
        </div>
      @endif
    </tfoot>
  </table>
    </div>
  </div>
@endsection