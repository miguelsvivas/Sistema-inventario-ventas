@extends('layouts.admin')


@section('content')

<div class="details">
               
    <!-- New Customers -->



<div class="recentOrders">
<div class="cardHeader">
<h2>
Editar Cliente</h2>


{!! Form::model($client,['route'=>['clients.update',$client], 'method'=>'PUT']) !!}
<div class="form-group">
        <label for="name">Nombre</label>
        <input type="text" name="name" id="name" value="{{$client->name}}" class="form-control" placeholder="Nombre" required>
</div>

    <div class="form-group">
        <label for="description">Identificación</label>
        <input type="number" name="identificacion" id="identificacion" value="{{$client->identificacion}}" class="form-control" placeholder="Nombre" required>

    </div>

<div class="form-group">
    <label for="address">Dirección</label>
    <input type="text" name="address" id="address" value="{{$client->address}}" class="form-control"  required>

</div>

<div class="form-group">
    <label for="phone">Telefono</label>
    <input type="number" name="phone" id="phone" value="{{$client->phone}}" class="form-control"  required>

</div>

<div class="form-group">
    <label for="email">Correo electronico</label>
    <input type="text" name="email" id="email" value="{{$client->email}}" class="form-control"  required>

</div>    




<button type="submit" class="btn btn-primary mr-2">Actualizar</button>
{!! Form::close() !!}
</div>

</div>
</div>

@endsection