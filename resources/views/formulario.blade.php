@extends('layout.layout')
@section('content')

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
     
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <br><h2 class="text-primary">Debes de llenar el formulario para continuar.</h2>
                  <div class="card">
   <form action="{{ url('formulario') }}" method="POST">
         @csrf

         <div class="form-group">
              <input type="text" name="nombre" id="nombre" class="form-control"  placeholder="Nombre" required>
         </div>

         @error('nombre')
             <div class="alert alert-danger">
                  El nombre es requerido
             </div>
         @enderror

         <div class="form-group">
              <input type="text" name="apellido" id="apellido" class="form-control"  placeholder="Apellido" required>
         </div>

         @error('apellido')
             <div class="alert alert-danger">
                  El apellido es requerido
             </div>
         @enderror

         <div class="form-group">
              <input type="text" name="direccion" id="direccion" class="form-control"  placeholder="Dirección" required>
         </div>

         @error('direccion')
             <div class="alert alert-danger">
                  La dirección es requerido
             </div>
         @enderror

         <div class="form-group">
          <input type="text" maxlength="10" name="telefono" id="telefono" class="form-control"  placeholder="Telefono" required>
         </div>

         @error('telefono')
             <div class="alert alert-danger">
              El telefono es requerido
             </div>
         @enderror

         <div class="form-group">
              <input type="text" name="correo" id="correo" class="form-control" placeholder="E-mail/Correo electronico" required>
         </div>

         @error('correo')
             <div class="alert alert-danger">
                  El correo es requerido
             </div>
         @enderror

         <label>Slecione un servicio</label>

            <select name="servicio" id="servicio">
              <option value="refrigeracion">Gas</option>
              <option value="gas">Refrigeración</option>
              <option value="otros">Otros</option>
            </select>
            
            @error('servicio')
            <div class="alert alert-danger">
                 El servivcio es requerido
            </div>
        @enderror
        <br>

         <button type="submit" class="btn btn-success btn-black">Agregar datos</button>
    </form>
     @if (session('formulario'))
       <div class='alert- alert-success mt-3'>
         {{session('formulario')}}
       </div>
     @endif
    <br>

    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Tratamiento de datos
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class=".modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        En virtud de los artículos 9° y 12° de la Ley 1581 de 2012, autorizo 
        en forma permanente a la Consultoría para los Derechos Humanos y el 
        Desplazamiento, en adelante “CODHES”, para que someta mis datos 
        personales a distintas formas de tratamiento, como recolección, 
        intercambio, actualización, procesamiento, reproducción, compilación, 
        almacenamiento, uso, sistematización y organización. Todas ellas de 
        forma parcial o total, siempre y cuando sea en cumplimiento de la 
        siguiente finalidad: Enviar mensajes a través de correo electrónico 
        con contenidos institucionales, información sobre noticias, próximos 
        eventos, estado actual de los litigios, notificación de nuevas 
        publicaciones y demás información relativa al portafolio de 
        actividades de CODHES que puedan ser de interés para el Titular 
        de los datos personales.<br>
        Declaro además que tengo conocimiento de los derechos que me asisten 
        en mi calidad de Titular de datos personales, consagrados en el 
        artículo 8° de la Ley 1581 de 2012.<br>
        En constancia de haber leído y entendido, doy mi consentimiento 
        previo, expreso e informado.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>

@endsection