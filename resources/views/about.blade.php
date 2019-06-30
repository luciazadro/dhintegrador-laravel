@extends('layouts.master')
@include('partials.navbar')
@section('content')
<br>
    <div class="headerabout row mt-5">
        <div class="col-12 mt-4 d-flex">
            <h2>Sobre Nosotros</h2>
        </div>
        <div class="col-12 p-5 mt-3 d-flex sobre">
            <div class="caja">
                <div class="col-md-10 offset">
                    <ul class="Sobre">
                        <li class="lista">¿Quienes Somos ?</li>
                        <p class="descripcion">Somos una empresa con mas de 90 años en el rubro. Dedicada a la venta de materiales para la construccion y sanitarios. Ofrecemos una solucion integral a la hora de proveer todo lo necesario para la obra</p>
                        <li class="lista">¿Donde estan Ubicados?</li>
                        <p class="descripcion">Estamos Ubicados en la zona de versalles, Capital Federal. Realizamos entregas en toda la provicia de Buenos Aires</p>
                        <li class="lista">¿Como es la metodologia de entrega?</li>
                        <p class="descripcion">Tomamos pedidos de 1 a 2 dias de anticipacion , la entrega se hace con camiones volcadores y el servicio de hidrogrua se contrata aparte por camion completo , <a href="#"> ver tabla</a> de costos para entregas </p>
                        <li class="lista">¿Que Metodos de Pago aceptan?</li>
                        <p class="descripcion">En el local contamos con promociones con varias tarjetas de credito , a su vez aceptamos debito , efectivo , transferencias bancarias y cheques al dia </p>
                    </ul>
                </div>
             </div>
        </div>
    </div>
@endsection