@extends('layout.layout')

@section('content')

<div class="jumbotron Roboto text-center jumbotron-fluid">
  <div class="container">
    <h1 class="display-4 refrigeracion">Refrigeración</h1>
    <p class="lead lead1 mt-4">Contamos con técnicos capacitados para realizar nuestro servicos de refrigeración.</p>
  </div>
</div>

<div class="container">
  <div class="container mt-5">
    <h2 class="RT">Nuestros servicios</h2>
    <p class="RP mt-4 text-justify mb-5">Servicio de Refrigeración comercial y residencial donde integralmente hacemos
      mantenimiento preventivo o correctivo según corresponda y requieran nuestros clientes.
      Elaboramos planes y programación de mantenimiento para
      equipos de refrigeración comercial e industrial Evitando que se detenga el
      funcionamiento de sus equipos y por ende perder su materia prima, alimentos y
      demás productos de su empresa u hogar que requieren refrigeración.</p>
  </div>

  <div class="card text-center mb-4">
    <div class="card-header RT">
      $150,000
    </div>
    <div class="card-body">
      <h5 class="card-title RT">Instalación de aires acondicioandos</h5>
      <p class="card-text RP">Instalamos tu aire acondicionado de una manera segura y en el menor tiempo posible.</p>
      <a href="contactenos" class="btn btn-primary RP">Solicitar</a>
    </div>
  </div>

  <div class="card text-center mb-4">
    <div class="card-header RT">
    $50,000
    </div>
    <div class="card-body">
      <h5 class="card-title RT">Mantenimiento</h5>
      <p class="card-text RP">Realizamos el mantenimiento preventivo y correctivo de tus aires acondicionados y neveras.</p>
      <a href="contactenos" class="btn btn-primary RP">Solicitar</a>
    </div>
  </div>

  <div class="card text-center mb-10">
    <div class="card-header RT">
      Convenir
    </div>
    <div class="card-body">
      <h5 class="card-title RT">Reparación de neveras</h5>
      <p class="card-text RP">Enviamos uno de nuestros tecnico para que realice la inspección y reparación de tu nevera.</p>
      <a href="contactenos" class="btn btn-primary RP">Solicitar</a>
    </div>
  </div>
</div>
@endsection