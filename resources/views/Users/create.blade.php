@extends('master')

@section('content')

<br>
<br>
<br>
<div class="formulario col-6">
     <h1>&bull; REGISTRATE &bull;</h1>

     <form action="{{ route('login')}}" method="post" enctype= "multipart/form-data">
          @csrf
          <div class="bar">
               <span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span class="five"></span>
          </div>  
          
          <div class="form-group"> <!-- Nombre -->
               <label for="full_name_id" class="control-label">Nombre</label>
               <input type="text" class="form-control" id="Nombre" name="nombre" placeholder="Ingresar Nombre" value="{{ old ('nombre')}}">
          </div>
          
          <div class="form-group"> <!-- Apellido -->
               <label for="apellido" class="control-label">Apellido</label>
               <input type="text" class="form-control" id="Apellido" name="apellido" value="{{ old ('apellido')}}" placeholder="Ingresar Apellido">
          </div>
          
          <div class="form-group"> <!-- E-mail -->
               <label for="email" class="control-label">E-mail</label>
               <input type="text" class="form-control" id="email" name="email" value="{{ old ('email')}}" placeholder="Ingresar numero e-mail de Conctato">
          </div>
          
          <div class="form-group"> <!-- Password -->
               <label for="password" class="control-label">Contraseña</label>
               <input type="password" class="form-control" id="password" name="password" placeholder="Ingresar Contraseña del usuario">
          </div>
          
          <div class="form-group"> <!--Confirmacion de Password -->
               <label for="repassword" class="control-label">Confirmar Contaseña</label>
               <input type="password" class="form-control" id="repassword" name="repassword" placeholder="Ingresar Confirmacion de Contraseña del usuario">
          </div>
          
          <div class="bar">
               <span class="one"></span>
               <span class="two"></span><span class="three"></span>
               <span class="four"></span><span class="five"></span>
          </div>  
          
          <div class="form-group">
               <label for="fotoperfil" class="control-label">Foto de Perfil</label>
               <br>
               <input  type="file" name="avatar" value=""/>
          </div>
          
          <div class="bar">
               <span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span class="five"></span>
          </div>  
          
          <div class="submit">
               <input type="submit" class="btn btn-danger" value="Registrarse" id="form_button" />
          </div>
     
     </form>
</div>

@endsection

     <!-- poner persistencia de datos value="{{old('Nombre')}}"
     $ruta = $request->file("poster")->store("public");
     $nombreArchivo =basename($ruta); -->