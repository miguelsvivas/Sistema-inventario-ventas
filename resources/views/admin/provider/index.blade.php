@extends('layouts.admin')

@section('content')
    <div class="details">


        <div class="recentOrders">
            <div class="cardHeader">
                <h2>
                    Provedores</h2>
                <a href="{{ route('providers.create') }}" class="btn">Agregar Provedor</a>

            </div>
            <table>
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Nombre</td>
                        <td>Correo electronico</td>
                        <td>Telefono</td>
                        <td>Dirección</td>
                        <td>Acciones</td>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @foreach ($providers as $provider)
                            <td>{{ $provider->id }}</td>
                            <td>{{ $provider->name }}</td>
                            <td>{{ $provider->email }}</td>
                            <td>{{ $provider->address }}</td>
                            <td>{{ $provider->phone }}</td>
                            <td>
                                {!! Form::open(['route' => ['providers.destroy', $provider], 'method' => 'DELETE']) !!}

                                <a href="{{ route('providers.edit', $provider) }}" title="Editar">
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
