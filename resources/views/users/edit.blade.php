<form class="" action={{"/users/update"}} method="{{route('users.update',$user->id)}}" enctype="multipart/`rm-data">
    @method('PUT')
    @csrf
    <img src="img/Logo_aurora.png" alt="Logo de Aurora Materiales
    ">
    <h1>Actualiza tus Datos</h1>
    <div class="bar">
        <span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span class="five"></span>
    </div>
    <div class="form-group"> <!-- Nombre -->
        <label for="full_name_id" class="control-label">Nombre</label>
        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$users->name}}" required autocomplete="name" autofocus placeholder="Ingresar el Nombre">
        @error('name')
        <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
      <div class="form-group"> <!-- Apellido -->
        <label for="apellido" class="control-label">Apellido</label>
        <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{$users->lastname}}" required autocomplete="lastname" autofocus placeholder="Ingresar el Apellido">
        @error('lastname')
        <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
        </span>
        @enderror  
      </div>
      <div class="form-group"> <!-- E-mail -->
        <label for="email" class="control-label">E-mail</label>
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$users->email}}" required autocomplete="email" placeholder="Ingresar el E-Mail">
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </div>
    <div class="bar">
            <span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span class="five"></span>
    </div>
    <button type="submit" class="btn btn-danger"> Actualizar </button>
    </form>
