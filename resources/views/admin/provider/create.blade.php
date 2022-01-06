@extends('layouts.admin')

@section('content')
            <!-- order detail list -->
<div class="details">
               
                <!-- New Customers -->
         

            
    <div class="recentOrders">
        <div class="cardHeader">
        <h2>
           Registrar Provedor</h2>


        {!! Form::open(['route'=>'providers.store', 'method'=>'POST']) !!}
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Nombre" required>
        </div>
        <div class="form-group">
            <label for="email">Correo electronico</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="Email" required>
        </div>
        <div class="form-group">
            <label for="address">Dirección</label>
            <input type="text" name="address" id="address" class="form-control" placeholder="Dirección" required>
        </div>

        <div class="form-group">
            <label for="phone">Telefono</label>
            <input type="text" name="phone" id="phone" class="form-control" placeholder="Telefono" required>

        </div>

        <button type="submit" class="btn btn-primary mr-2">Registrar</button>
        {!! Form::close() !!}
        </div>
  
    </div>
</div>
@endsection