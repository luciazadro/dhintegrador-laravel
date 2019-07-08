@extends('layouts.master')
@include('partials.navbar')
@section('content') 
<div class="formulario col-6">
    <br>
    <br>
    <br>
    <h1>&bull; REGISTRATE &bull;</h1>
    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
    @csrf
    <div class=barra>
      <div class="bar">
      <span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span class="five"></span>
      </div>  
    <div class="form-group"> <!-- Nombre -->
        <label for="full_name_id" class="control-label">Nombre</label>
        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Ingresar el Nombre">
        @error('name')
        <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
      <div class="form-group"> <!-- Apellido -->
        <label for="apellido" class="control-label">Apellido</label>
        <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus placeholder="Ingresar el Apellido">
        @error('lastname')
        <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
        </span>
        @enderror  
      </div>
      <div class="form-group"> <!-- E-mail -->
        <label for="email" class="control-label">E-mail</label>
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Ingresar el E-Mail">
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </div>
      <div class="form-group"> <!-- Password -->
        <label for="password" class="control-label">Contraseña</label>
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Ingresar el Password">

        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </div>
      <div class="form-group"> <!--Confirmacion de Password -->
        <label for="repassword" class="control-label">Confirmar Contaseña</label>
          <input type="password" class="form-control" id="repassword" name="password_confirmation" required autocomplete="new-password" placeholder="Ingresar Confirmacion de Contraseña del usuario">
      </div>
      <div class="bar">
      <span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span class="five"></span>
     </div>  
      <div class="form-group"> <!--Avatar-->
          <input id='avatar' type='file' class="form-control{{ $errors->has('avatar') ? ' is-invalid' : '' }}" name="avatar" value="{{ old('avatar') }}" required autofocus>
          @if ($errors->has('avatar'))
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('avatar') }}</strong>
              </span>
          @endif
      </div>
      <div class="bar">
      <span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span class="five"></span>
     </div>  
      <div class="submit">
          <button type="submit" class="btn btn-primary">
              {{ __('Register') }}
          </button>
      </div>
    </div>
    </form>
  </div>
</div>
@endsection