@extends('layouts.admin')

@section('content')
            <!-- order detail list -->
            <div class="details">
               
                <!-- New Customers -->
         

            
<div class="recentOrders">
    <div class="cardHeader">
        <h2>
           Usuarios Registrados</h2>
        <a href="" class="btn">Crear usuario</a>   

    </div>
    <table>
        <thead>
            <tr>
                <td>ID</td>
                <td>Nombre</td>
                <td>Email</td>
                <td>Acciones</td>
            
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            
            <tr>
                <td>
                    <a href="{{route('users.show', $user)}}">{{$user->id}}</a>
                </td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>

                <td>
                  
            </tr>
            @endforeach
          

   
        </tbody>
    </table>
</div>
</div>
@endsection