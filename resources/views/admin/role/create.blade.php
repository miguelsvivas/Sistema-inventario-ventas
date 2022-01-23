@extends('layouts.admin')

@section('content')
            <!-- order detail list -->
<div class="details">
               
                <!-- New Customers -->
         

            
    <div class="recentOrders">
        <div class="cardHeader">
        <h2>
           Registrar Rol</h2>




        {!! Form::open(['route'=>'roles.store', 'method'=>'POST']) !!}
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Nombre" required>
        </div>

        <div class="form-group">
            <label for="slug">Slug</label>
            <input type="text"
              class="form-control" name="slug" id="slug" aria-describedby="helpId" placeholder="">
          </div>
       
        <div class="form-group">
         <label>{!! Form::radio('special', 'all-access') !!} Acceso total</label>
         <label>{!! Form::radio('special', 'no-access') !!} Ningún acceso</label>
    </div>

        @foreach ($permissions as $permission)
        <label>
            {!! Form::checkbox('permissions[]', $permission->id, null) !!}
            {{$permission->name}}
            <em>({{$permission->description}})</em>
        </label>
        @endforeach
   

        <button type="submit" class="btn btn-primary mr-2">Registrar</button>
        {!! Form::close() !!}
        </div>
  
    </div>
</div>
@endsection