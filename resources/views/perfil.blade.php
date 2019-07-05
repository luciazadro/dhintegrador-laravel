@extends('layouts.master')
@include('partials.navbar')
@include('partials.head_perfil')
@section('content')

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
            {{Auth::user()->name}} {{Auth::user()->lastname}}
            <br>
            <button type="button" class="btn btn-danger"> <a href={{ route('logout') }}>Logout </a> </button>
            </h1>
            <div class="bar">
                <span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span class="five"></span>
            </div>
                <h2> {{Auth::user()->email}}  </h2>
            <div class="bar">
                <span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span class="five"></span>
            </div>
    </div>
    <div class='profile col-8'>
        <form class="" action={{"/users/update"}} method="POST" enctype="multipart/`rm-data">
            {{ method_field('PATCH') }}
            @csrf
            <img src="img/Logo_aurora.png" alt="Logo de Aurora Materiales
            ">
            <h1>Actualiza tus Datos
            <div class="bar">
                <span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span class="five"></span>
            </div>
                <div class="form-group"> <!-- Domicilio -->
                    <label for="domicilio" class="control-label">Domicilio</label>
                    <input id="adress" type="text" class="form-control @error('adress') is-invalid @enderror" name="adress" value="{{ old('adress') }}" required autocomplete="adress" autofocus placeholder="Ingresar el Domicilio">
                    @error('adress')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror  
                </div>
                <div class="form-group"> <!-- Localidad -->
                    <label for="localidad" class="control-label">Localidad</label>
                    <input id="location" type="text" class="form-control @error('location') is-invalid @enderror" name="location" value="{{ old('location') }}" required autocomplete="location" autofocus placeholder="Ingresar la Localidad">
                    @error('location')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror  
                </div>
                <div class="form-group"> <!-- Estado -->
                    <label for="provincia" class="control-label">Provincia</label>
                    <input id="stade" type="text" class="form-control @error('stade') is-invalid @enderror" name="stade" value="{{ old('stade') }}" required autocomplete="stade" autofocus placeholder="Ingresar la Provincia">
                    @error('stade')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror  
                </div>
                <div class="form-group"> <!-- Codigo Postal -->
                    <label for="codigoPostal" class="control-label">Codigo Postal</label>
                    <input id="zipcode" type="text" class="form-control @error('zipcode') is-invalid @enderror" name="zipcode" value="{{ old('zipcode') }}" required autocomplete="zipcode" autofocus placeholder="Ingresar el Codigo Postal">
                    @error('zipcode')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror  
                </div>
                <div class="form-group"> <!-- Pais -->
                    <label for="pais" class="control-label">Pais</label>
                    <input id="country" type="text" class="form-control @error('') is-invalid @enderror" name="country" value="{{ old('country') }}" required autocomplete="country" autofocus placeholder="Ingresar el Pais">
                    @error('country')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror  
                </div>
              {{-- <div class="form-group"> <!--Avatar-->
                <label for="full_name_id" class="control-label">Actualizar Foto de Perfil</label>
                <input id='avatar' type='file' class="form-control{{ $errors->has('avatar') ? ' is-invalid' : '' }}" name="avatar" value="{{ old('avatar') }}" required autofocus>
                @if ($errors->has('avatar'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('avatar') }}</strong>
                    </span>
                @endif
              </div> --}}
            <div class="bar">
                    <span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span class="five"></span>
            </div>
            <button type="submit" class="btn btn-danger"> Actualizar </button>
            </h1>
            </form>
    </div>
</div>
<div class="profile col-12">
 @include('carrito.index')
</div>
</body>