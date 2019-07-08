<nav class="navbar navbar-expand-lg navbar-light ">
    <img src="img/Logo_aurora.png" alt= "" width="40px" style="border-radius:50%">
    <a class="navbar-brand" href="/home">Aurora Materiales</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNav">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="/home">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="productos.php">Productos</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="formulario">Contacto</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/about" >Sobre Nosotros</a>
    </li>
    @if(auth()->user())
    <li class="nav-item">
    <a class="nav-link" href="/perfil">Bienvenido:   {{Auth::User()->name}}</a>
    </li>
    @endif
    @if(auth()->user())
    <li class="nav-item">
      <a class="nav-link" href="/perfil">{{"Mi Perfil"}}</a>
    @endif
    @if(auth()->user() && auth()->user()->role === 9)
    <li class="nav-item">
    <a class="nav-link" href="/perfilAdm">Administrar</a>
    </li>
    @endif
    @if(auth()->user())
    <li class="nav-item">
      <a class="nav-link" href="{{ route('logout') }}"
        onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
        </form>
    </li>
    @else
    <li class="nav-link">
        <a href="/login">Ingresar</a>
    </li>
    @endif
    @if(!auth()->user())
    <li class="nav-item">
    <a class="nav-link" href="/register">Registrarse</a>
    </li>
    @endif
  </ul>
</div>
</nav>
