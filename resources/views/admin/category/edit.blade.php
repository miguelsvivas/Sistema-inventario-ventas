@extends('layouts.admin')


@section('content')

<div class="details">
               
    <!-- New Customers -->



<div class="recentOrders">
<div class="cardHeader">
<h2>
Editar Categoria</h2>


{!! Form::model($category,['route'=>['categories.update',$category], 'method'=>'PUT']) !!}
<div class="form-group">
        <label for="name">Nombre</label>
        <input type="text" name="name" id="name" value="{{$category->name}}" class="form-control" placeholder="Nombre" required>
</div>

    <div class="form-group">
        <label for="description">Descripción</label>
        <textarea class="form-control" name="description" id="description" rows="3">{{$category->description}}</textarea>
    </div>
<button type="submit" class="btn btn-primary mr-2">Actualizar</button>
{!! Form::close() !!}
</div>

</div>
</div>

@endsection