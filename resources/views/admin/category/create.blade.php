@extends('layouts.admin')

@section('content')
            <!-- order detail list -->
<div class="details">
               
                <!-- New Customers -->
         

            
    <div class="recentOrders">
        <div class="cardHeader">
        <h2>
           Registrar Categoria</h2>


        </div>

        @if ($errors->any())
             <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
         </div>
        @endif

        
        {!! Form::open(['route'=>'categories.store', 'method'=>'POST']) !!}
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Nombre" required>
        </div>
        <div class="form-group">
            <label for="description">Descripción</label>
            <textarea class="form-control" name="description" id="description" rows="3"></textarea>
        </div>
        <br/>
        <button type="submit" class="btn btn-primary mr-2">Registrar</button>
        {!! Form::close() !!}
  
    </div>
</div>
@endsection