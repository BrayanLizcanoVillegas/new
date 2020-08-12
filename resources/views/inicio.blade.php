@extends('layout.layout')

@section('content')

<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/inicio/tecnico de gas.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="slider">Técnicos en gas</h5>
        <p class="slider2">Realizamos instalaciones y reparaciones en redes de gas.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/inicio/tecnico de refrigeracion.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="slider">Técnicos en refrigeración</h5>
        <p class="slider2">Realizamos mantenimiento preventivo y correctivo de su aire acondicionado.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/inicio/reparacion de neveras.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="slider">Reparación de neveras</h5>
        <p class="slider2">Inspeccionamos y reparamos su nevera.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<h1 class="text-center mt-10">Nuestros servicios</h1>

<div class="container mt-5">
  <div class="row justify-content-center row-cols-1 row-cols-md-2">
    <div class="col mb-4" style="max-width: 340px;">
      <div class="cardin text-center">
        <img src="img/inicio/tecnico.png" class="card-img" alt="...">
        <div class="card-body">
          <h3 class="card-title">Instalaciones de gas</h3>
          <p class="card-text">Nuestros técnicos estan capacitados para proporcionar
            servicios de alta calidad, como lo es el mantenimiento correctivo y preventivo
            de sus gasodomesticos y demas instalaciones.</p>
        </div>
      </div>
    </div>
    <div class="col mb-4" style="max-width: 340px;">
      <div class="cardin text-center">
        <img src="img/inicio/aire.png" class="card-img" alt="...">
        <div class="card-body">
          <h3 class="card-title">Aires acondicionados</h3>
          <p class="card-text">Nuestros técnicos realizaran la instalacion y el
            mantenimiento preventido y correctivo de sus equipos de aire acondicionado,
            contamos con personal capacitado y especializado.</p>
        </div>
      </div>
    </div>
    <div class="col mb-4" style="max-width: 340px;">
      <div class="cardin text-center">
        <img src="img/inicio/nevera.png" class="card-img" alt="...">
        <div class="card-body">
          <h3 class="card-title">Reparación de neveras</h3>
          <p class="card-text">Nuestros técnicos realizaran una visita para hacer una previa
            inspeccion y mantenimiento de su nevera en el menor tiempo posible.</p>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="jumbotron container mt-5">
  <h1 class="display-4">Nuestra empresa</h1>
  <p class="lead mt-4">En SERVIGAS del Huila contamos con un equipo de técnicos en neivaespecializados en instalaciones de redes de gas
    y refrigeración, especialistas que brindan un servicio de calidad con atención personalizada y a domicilio.
    Nuestra experiencia está respaldada por más de 400 clientes satisfechos por nuestros servicios en
    instalaciones de redes de gas mantenimiento y reparación de gasodomesticos, reparación
    de Neveras y aires acondicionados, realizamos reparaciones a todas las marcas y modelos:
    LG, Mabe, Haceb, Samsung, Philips, Olimpo, entre otros. Nuestros servicios técnicos se
    caracteriza por la calidad en la atención y en las reparaciones que realizan nuestros técnicos.</p>
  <hr class="my-4">
  <p>No dudes en contactarnos, te brindaremos en el mejor servicio.</p>
  <a class="btn btn-primary btn-lg" href="#" role="button">Contactenos</a>
</div>
@endsection