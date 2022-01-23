@extends('layouts.admin')

@section('content')
            <!-- order detail list -->
            <div class="details">
               
                <!-- New Customers -->
         

            
<div class="recentOrders">
    <div class="cardHeader">
        <h2>
            Roles</h2>
            <a href="{{route('roles.create')}}" class="btn">Crear Rol</a>   
        

    </div>
    <table>
        <thead>
            <tr>
                <td>ID</td>
                <td>Nombre</td>
                <td>Descripción</td>
                <td>Acciones</td>
            
            </tr>
        </thead>
        <tbody>
        
            @foreach ($roles as $row)
                
          
            <tr>
                <td>{{$row->id}}</td>
                <td>{{$row->name}}</td>
            </tr>
            
            @endforeach 

   
        </tbody>
    </table>
</div>
</div>
@endsection