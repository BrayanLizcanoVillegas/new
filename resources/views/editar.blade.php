@extends('layout.layout')
@section('content')

<h3 class="text-center mb-3pt-3">Editar usuario {{$usuarioActualizar->nombre}}</h3>
<form action="{{route('update' , $usuarioActualizar->id)}}" method="POST">
    @method('PUT')
    @csrf

    <div class="form-group">
         <input type="text" name="nombre" id="nombre" value="{{$usuarioActualizar->nombre}}" class="form-control"  placeholder="Nombre" required>
    </div>

    @error('nombre')
        <div class="alert alert-danger">
             El nombre es requerido
        </div>
    @enderror

    <div class="form-group">
         <input type="text" name="apellido" id="apellido" value="{{$usuarioActualizar->apellido}}" class="form-control"  placeholder="Apellido" required>
    </div>

    @error('apellido')
        <div class="alert alert-danger">
             El apellido es requerido
        </div>
    @enderror

    <div class="form-group">
         <input type="text" name="direccion" id="direccion" value="{{$usuarioActualizar->direccion}}" class="form-control"  placeholder="Dirección" required>
    </div>

    @error('direccion')
        <div class="alert alert-danger">
             La dirección es requerido
        </div>
    @enderror

    <div class="form-group">
     <input type="text" maxlength="10" name="telefono" id="telefono" value="{{$usuarioActualizar->telefono}}" class="form-control"  placeholder="Telefono" required>
    </div>

    @error('telefono')
        <div class="alert alert-danger">
         El telefono es requerido
        </div>
    @enderror

    <div class="form-group">
         <input type="text" name="correo" id="correo" value="{{$usuarioActualizar->correo}}" class="form-control" placeholder="E-mail/Correo electronico" required>
    </div>

    @error('correo')
        <div class="alert alert-danger">
             El correo es requerido
        </div>
    @enderror

    <div class="form-group">
        <input type="text" name="servicio" id="servicio" value="{{$usuarioActualizar->servicio}}" class="form-control" placeholder="Servicios" required>
   </div>

   @error('servicio')
       <div class="alert alert-danger">
            El servicio es requerido
       </div>
   @enderror

    
   <br>
    <button type="submit" class="btn btn-success btn-black">Agregar datos</button> <a href="{{route('usuarios')}}" class="btn btn-secondary">Regresar</a>
</form>

@if (session('update'))
<div class='alert- alert-success mt-3'>
{{session('update')}}
</div>
@endif

@endsection