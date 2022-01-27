@extends('layouts.admin')

@section('content')
            <!-- order detail list -->
<div class="details">
               
                <!-- New Customers -->
         

            
    <div class="recentOrders">
        <div class="cardHeader">
        <h2>
           Crear Usuario</h2>


        {!! Form::open(['route'=>'users.store', 'method'=>'POST']) !!}
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Nombre" required>
        </div>
        <div class="form-group">
            <label for="email">Correo Electronico</label>
            <input type="email" class="form-control" name="email" id="email" rows="3">
        </div>

        <div class="form-group">
            <label for="password">Contraseña</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="" aria-describedby="helpId">
        </div>




        @foreach ($roles as $role)
        <li>
            <label>
                {!! Form::checkbox('roles[]', $role->id, null) !!}
                {{$role->name}}
            </label>
        </li>
     @endforeach


        <button type="submit" class="btn btn-primary mr-2">Registrar</button>
        {!! Form::close() !!}
        </div>
  
    </div>
</div>
@endsection