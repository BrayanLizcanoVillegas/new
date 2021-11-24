
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    @extends('layout.layout')

    @section('content')
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#agregar">
        Agregar usuarios
    </button>
      
    
    <table class="table">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nombres</th>
          <th scope="col">Apellidos</th>
          <th scope="col">Direcciònes</th>
          <th scope="col">Correos</th>
          <th scope="col">Telefonos</th>
          <th scope="col">Servicios</th>
          <th scope="col">Acciones</th>
        </tr>
      </thead>
      <tbody>
      @foreach ($usuarios as $user)
      <tr>
      <th scope="row">{{$user->id}}</th>
          <td>{{$user->nombre}}</td>
          <td>{{$user->apellido}}</td>
          <td>{{$user->direccion}}</td>
          <td>{{$user->correo}}</td>
          <td>{{$user->telefono}}</td>
          <td>{{$user->servicio}}</td>
          <td>
            <a href="{{route('editar' , $user->id)}}" class="btn btn-warning">Editar</a>
            <form action="{{route('eliminar' , $user->id)}}" method="POST" class="d-inline">
               @method('DELETE')
               @csrf
               <button type="submit" class="btn btn-danger">Eliminar</button>
             </form>
        </td>   
      <tr>  
        @endforeach
      </table>
      @if (session('eliminar'))
          <div class='alert- alert-success mt-3'>
            {{session('eliminar')}}
          </div>
      @endif
  </div>
      <!-- Modal agregar-->
      <div class="modal fade" id="agregar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Agregar usuarios</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="{{ url('usuarios') }}" method="POST">
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
            </div>
          </div>
        </div>
      </div>
     @if (session('formulario'))
       <div class='alert- alert-success mt-3'>
         {{session('formulario')}}
       </div>
     @endif
      </div>
    </div>
  </div>
</div>


    
    @endsection

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>