@extends('layouts.admin')

@section('content')
            <!-- order detail list -->
<div class="details">
               
                <!-- New Customers -->
         

            
    <div class="recentOrders">
        <div class="cardHeader">
        <h2>
           Registrar Cliente</h2>


        {!! Form::open(['route'=>'clients.store', 'method'=>'POST']) !!}
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" name="name" id="name" class="form-control"  required>
        </div>
        <div class="form-group">
            <label for="identificacion">Identificación</label>
            <input type="number" name="identificacion" id="identificacion" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="address">Dirección</label>
            <input type="text" name="address" id="address" class="form-control">
        </div>

        <div class="form-group">
            <label for="phone">Telefono</label>
            <input type="number" name="phone" id="phone" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="email">Correo Electronico</label>
            <input type="email" name="email" id="email" class="form-control">
        </div>




        <button type="submit" class="btn btn-primary mr-2">Registrar</button>
        {!! Form::close() !!}
        </div>
  
    </div>
</div>
@endsection