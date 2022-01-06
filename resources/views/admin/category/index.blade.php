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
                <td>ID</td>
                <td>Nombre</td>
                <td>Descripción</td>
                <td>Acciones</td>
            
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
            
            <tr>
                <td>{{$category->id}}</td>
                <td>{{$category->name}}</td>
                <td>{{$category->description}}</td>
                <td>
                    {!! Form::open(['route'=>['categories.destroy',$category], 'method'=>'DELETE']) !!}
                    
                    <a href="{{route('categories.edit', $category)}}" title="Editar" > 
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