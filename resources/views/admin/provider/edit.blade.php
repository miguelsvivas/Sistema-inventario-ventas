@extends('layouts.admin')


@section('content')

<div class="details">
               
    <!-- New Customers -->



<div class="recentOrders">
<div class="cardHeader">
<h2>
Editar Provedor</h2>


{!! Form::model($provider,['route'=>['providers.update',$provider], 'method'=>'PUT']) !!}

<div class="form-group">
    <label for="name">Nombre</label>
    <input type="text" name="name" id="name" value="{{$provider->name}}" class="form-control" placeholder="Nombre" required>
</div>
<div class="form-group">
    <label for="email">Correo electronico</label>
    <input type="email" name="email" id="email" class="form-control" value="{{$provider->email}}" placeholder="Email" required>
</div>
<div class="form-group">
    <label for="address">Dirección</label>
    <input type="text" name="address" id="address" value="{{$provider->address}}" class="form-control" placeholder="Dirección" required>
</div>

<div class="form-group">
    <label for="phone">Telefono</label>
    <input type="text" name="phone" id="phone" value="{{$provider->phone}}" class="form-control" placeholder="Telefono" required>

</div>



    <button type="submit" class="btn btn-primary mr-2">Actualizar</button>
{!! Form::close() !!}
</div>

</div>
</div>

@endsection