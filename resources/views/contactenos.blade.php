@extends('layout.layout')

@section('content')
<div class="container mt-5">
    <div class="card bg-dark text-white">
        <img src="img/contacto/1.png" class="card-img" alt="...">
    </div>

    <form class="mt-5">
        <h1>Contáctenos</h1>
        <div class="form-row mt-3">
            <div class="col-md-6 mb-3">
                <label for="validationDefault01">Nombres</label>
                <input type="text" class="form-control" id="validationDefault01" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="validationDefault02">Apellidos</label>
                <input type="text" class="form-control" id="validationDefault02" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" id="inputEmail4">
            </div>
            <div class="col-md-3 mb-3">
                <label for="validationDefault03">Ciudad</label>
                <input type="text" class="form-control" id="validationDefault03" required>
            </div>
            <div class="col-md-3 mb-3">
                <label for="validationDefault05">Teléfono</label>
                <input type="number" class="form-control" id="validationDefault05" required>
            </div>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">En que podemos ayudarte?</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <button class="btn btn-primary mb-10" type="submit">Enviar</button>
    </form>
</div>


@endsection