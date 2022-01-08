@extends('layouts.admin')

@section('content')
            <!-- order detail list -->
<div class="details">
               
                <!-- New Customers -->
         

            
    <div class="recentOrders">
        <div class="cardHeader">
        <h2>
           Registrar Producto</h2>


        {!! Form::open(['route'=>'products.store', 'method'=>'POST','files' => true]) !!}
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Nombre" required>
        </div>
        <div class="form-group">
            <label for="sell_price">Precio de venta</label>
            <input type="number" name="sell_price" id="sell_price" class="form-control" required>
        </div>

        <div class="form-group">
          <label for="category_id" class="form-label"></label>
          <select class="form-control" name="category_id" id="category_id">
              @foreach ($categories as $category)
                  <option value="{{$category->id}}">{{$category->name}}</option>
              @endforeach
            
          </select>
        </div>

        <div class="form-group">
            <label for="provider_id" class="form-label"></label>
            <select class="form-control" name="provider_id" id="provider_id">
                @foreach ($providers as $provider)
                    <option value="{{$provider->id}}">{{$provider->name}}</option>
                @endforeach
              
            </select>
          </div>

          <div class="mb-3">
            <label for="pic" class="form-label"></label>
            <input type="file" class="form-control" name="pic" id="pic" aria-describedby="fileHelpId">
            <small id="fileHelpId" class="form-text text-muted">Cargar imagen</small>
          </div>

        <button type="submit" class="btn btn-primary mr-2">Registrar</button>
        {!! Form::close() !!}
        </div>
  
    </div>
</div>
@endsection