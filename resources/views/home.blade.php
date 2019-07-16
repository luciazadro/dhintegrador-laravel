@extends('layouts.master')

@section('content')

<body>
    @include('partials.navbar')
    <div class="section1 row mx-0">
        <h2 class="first-title"> Tu futuro proyecto comienza aqui</h2>
        <br>
        <article class="articulo1 p-0 col-12 col-md-12 col-lg-12">
            <div class="home-text">    
                <p class="foot">Somos una empresa con mas de 90 años en el rubro. Dedicada a la venta de materiales para la construccion y sanitarios. Ofrecemos una solucion integral a la hora de proveer todo lo necesario para la obra</p>
                <p class="foot">Estamos Ubicados en la zona de versalles, Capital Federal. Realizamos entregas en toda la provicia de Buenos Aires</p>
                <p class="foot">Tomamos pedidos de uno a dos días de anticipacion; la entrega se hace con camiones volcadores y el servicio de hidrogrúa se contrata aparte por camion completo. </p>
                <p class="foot">Contamos con promociones con varias tarjetas de credito, aceptamos débito, efectivo, transferencias bancarias y cheques al día.</p>
            </div>
        </article>
        <!-- <button type="button" class="btn btn-primary cotizar" name="button">Cotizar ahora</button> -->
    </div>
    <section class="section2 row mx-0">
        <!-- PRIMERA CARD -->
        <div class="card-titulo col-12 col-md-12" style="width: 18rem;">
            <h2 class="titulo-seccion"> Especiales </h2>
        </div>
        <article class="articulo1 p-0 col-12 col-md-6 col-lg-6">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="img/cemento.jpg" alt="ofertas" style="width:300px;height:300px;">
                    </div>
                    <div class="flip-card-back">
                        <h1>Nuevos usuarios</h1>
                        <p>
                        <a class="nav-link" href="/register">
                            <button type="button" class="btn btn-primary">Registrarse</button></a>
                    </div>
                </div>
            </div>
        </article>
        <!-- SEGUNDA CARD -->
        <article class="articulo2 p-0 col-12 col-md-6 col-lg-6">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="img/casquito.png" alt="instructivos" style="width:300px;height:300px;">
                    </div>
                    <div class="flip-card-back">
                        <h1> Iniciar Sesión </h1>
                        <p>
                        <a class="nav-link" href="/login">
                            <button type="button" class="btn btn-primary">Ingresar</button></a>
                    </div>
                </div>
            </div>
        </article>
    </section>
    <section class="section3 row mx-0">
        <div class="container">
            <div class="row">
            <div class="card col-12 col-md-12" style="width: 18rem;">
                <h2 class="titulo-seccion">Categorías </h2>
            </div>
            <div class="card col-12 col-md-4" style="width: 18rem;">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="img/planos.jpg" alt="oferta" style="width:300px;height:300px;">
                        </div>
                        <div class="flip-card-back">
                            <h1> Diseño de espacios </h1>
                            <p> Agrimensoría, Arquitectura, Ingeniería </p>
                            <p>
                                <!-- <button type="button" class="btn btn-primary">Ver más </button> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="card col-12 col-md-4" style="width: 18rem;">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="img/pincel.jpg" alt="oferta" style="width:300px;height:300px;">
                        </div>
                        <div class="flip-card-back">
                            <h1> Pintura </h1>
                            <p> Restauración de paredes </p>
                            <p>
                                <!-- <button type="button" class="btn btn-primary"> Ver más </button> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="card col-12 col-md-4" style="width: 18rem;">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="img/obrero1.jpg" alt="oferta" style="width:300px;height:300px;">
                        </div>
                        <div class="flip-card-back">
                            <h1> Herrería </h1>
                            <p> Diseño y armado de rejas, vallas, etc. </p>
                            <p>
                                <!-- <button type="button" class="btn btn-primary"> Ver más </button> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="card col-12 col-md-4" style="width: 18rem;">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="img/obrero-cheto.jpg" alt="oferta" style="width:300px;height:300px;">
                        </div>
                        <div class="flip-card-back">
                            <h1> Llenado de cemento </h1>
                            <p> Alquiler de maquinaria para cementado, asfaltado, etc. </p>
                            <p>
                                <!-- <button type="button" class="btn btn-primary"> Ver más </button> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="card col-12 col-md-4" style="width: 18rem;">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="img/terminaciones.jpeg" alt="oferta" style="width:300px;height:300px;">
                        </div>
                        <div class="flip-card-back">
                            <h1> Terminaciones en piedra </h1>
                            <p> Venecitas, marmol, símiles </p>
                            <p>
                                <!-- <button type="button" class="btn btn-primary"> Ver más </button> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="card col-12 col-md-4" style="width: 18rem;">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="img/presupuesto.jpeg" alt="oferta" style="width:300px;height:300px;">
                        </div>
                        <div class="flip-card-back">
                            <h1> Presupuestación </h1>
                            <p> Simulador de presupuesto </p>
                            <p>
                                <!-- <button type="button" class="btn btn-primary"> Presupuesta ahora</button> -->
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>
</body>
@endsection