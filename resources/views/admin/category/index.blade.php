@extends('layouts.admin')

@section('content')
            <!-- order detail list -->
            <div class="details">
               
                <!-- New Customers -->
         

            
<div class="recentOrders">
    <div class="cardHeader">
        <h2>
            Categorias</h2>
        <a href="{{route('categories.create')}}" class="btn">Crear Categoria</a>   

    </div>
    <table>
        <thead>
            <tr>
                <td>Nombre</td>
                <td>Descripción</td>
                <td>Acciones</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
            <th scope="row">{{$category->id}}</th>
            <tr>
                <td>{{$category->name}}</td>
                <td>{{$category->description}}</td>
                <td>Editar | Borrar</td>
            </tr>
            @endforeach
          

   
        </tbody>
    </table>
</div>
</div>
@endsection