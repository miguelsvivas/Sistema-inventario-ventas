@extends('layouts.admin')

@section('content')
            <!-- order detail list -->
            <div class="details">
               
                <!-- New Customers -->
         

            
<div class="recentOrders">
    <div class="cardHeader">
        <h2>
            Clientes</h2>
        <a href="{{route('clients.create')}}" class="btn">Agregar Cliente</a>   

    </div>
    <table>
        <thead>
            <tr>
                <td>ID</td>
                <td>Nombre</td>
                <td>Identificación</td>
                <td>Dirección</td>
                <td>Telefono</td>
                <td>Correo Electronico</td>
                <td>Acciones</td>

            </tr>
        </thead>
        <tbody>
            @foreach ($clients as $client)
            
            <tr>
                <td>{{$client->id}}</td>
                <td>{{$client->name}}</td>
                <td>{{$client->identificacion}}</td>
                <td>{{$client->address}}</td>
                <td>{{$client->phone}}</td>
                <td>{{$client->email}}</td>
                <td>
                    {!! Form::open(['route'=>['clients.destroy',$client], 'method'=>'DELETE']) !!}
                    
                    <a href="{{route('clients.edit', $client)}}" title="Editar" > 
                    <i class="far fa-edit"></i></a>
                
                    <button class="btn " type="submit" title="Eliminar">
                        <i class="fas fa-trash-alt"></i>
                    </button>

                {!! Form::close() !!}
            </tr>
            @endforeach
          

   
        </tbody>
    </table>
</div>
</div>
@endsection