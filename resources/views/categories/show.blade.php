@extends('layouts.master')
@include('partials.navbar')
@section('content')
<div class="carrito col-12">
        <table>
            <thead>
                <tr class="table table-hover table-condensed">
                    <th style="width:10%">#</th>
                    <th style="width:40%">Nombre</th>
                    <th style="width:50%">Editando</th>
                </tr>
            </thead>
        <tbody>
            <tr>
                <td data-th="Category">
                        @foreach ($categories as $category)
                        <tr>
                        <td>{{$category->id}}</td>
                        <td>{{$category->name}}</td>
                        <td>
                        <a href="{{url('categories/edit/'.$category->id)}}" class="edit"><i class="fas fa-edit icono"></i></a>
						<form id='{{$category->id}}' class='form-delete' action="{{url('categories/destroy/'.$category->id)}}" method="post">
							@method('DELETE')
							@csrf
							<a id='delete-link-{{$category->id}}' href="#" class="delete"><i class="fas fa-trash-alt icono"></i></a>
                        </form>
                        </td>
                </td> 
            </tr> 
                        @endforeach
        </tbody>
        </table>
</div>
@endsection 