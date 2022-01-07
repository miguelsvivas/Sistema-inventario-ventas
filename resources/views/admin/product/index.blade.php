@extends('layouts.admin')

@section('content')
    <div class="details">


        <div class="recentOrders">
            <div class="cardHeader">
                <h2>
                    Productos</h2>
                <a href="{{ route('products.create') }}" class="btn">Agregar Producto</a>

            </div>
            <table>
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Nombre</td>
                        <td>Cantidad</td>
                        <td>Estado</td>
                        <td>Categoria</td>
                        <td>Proveedor</td>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{$product->stock}}</td>
                            <td>{{$product->status}}</td>
                            <td>{{$product->category->name}}</td>
                            <td>
                                {!! Form::open(['route' => ['products.destroy', $product], 'method' => 'DELETE']) !!}

                                <a href="{{ route('products.edit', $product) }}" title="Editar">
                                    <i class="far fa-edit"></i></a>

                                <button class="btn " type="submit" title="Eliminar">
                                    <i class="fas fa-trash-alt"></i>
                                </button>

                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach





                </tbody>
            </table>
        </div>
    </div>
@endsection
