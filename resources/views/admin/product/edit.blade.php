@extends('layouts.admin')


@section('content')

<div class="details">
               
    <!-- New Customers -->



<div class="recentOrders">
<div class="cardHeader">
<h2>Editar Producto</h2>


{!! Form::model($product,['route'=>['products.update',$product], 'method'=>'PUT','files' => true]) !!}
<div class="form-group">
        <label for="name">Nombre</label>
        <input type="text" name="name" id="name" value="{{$product->name}}" class="form-control" placeholder="Nombre" required>
</div>

<div class="form-group">
    <label for="sell_price">Precio de venta</label>
    <input type="number" name="sell_price" id="sell_price" value="{{$product->sell_price}}" class="form-control" required>
</div>

<div class="form-group">
    <label for="category_id">Categoría</label>
    <select class="form-control" name="category_id" id="category_id">
      @foreach ($categories as $category)
      <option value="{{$category->id}}" 
          @if ($category->id == $product->category_id)
          selected
          @endif
          >{{$category->name}}</option>
      @endforeach
    </select>
  </div>

  <div class="form-group">
      <label for="provider_id">Proveedor</label>
      <select class="form-control" name="provider_id" id="provider_id">
        @foreach ($providers as $product)
        <option value="{{$product->id}}"
          @if ($product->id == $product->provider_id)
          selected
          @endif
          >{{$product->name}}</option>
        @endforeach
      </select>
  </div>

  <div class="form-group">
    <label for="image" class="form-label"></label>
    <input type="file" class="form-control" name="image" id="image" aria-describedby="fileHelpId">
    <small id="fileHelpId" class="form-text text-muted">Cargar imagen</small>
  </div>

  

    
<button type="submit" class="btn btn-primary mr-2">Actualizar</button>
{!! Form::close() !!}
</div>

</div>
</div>

@endsection