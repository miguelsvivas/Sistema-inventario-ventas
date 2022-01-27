@extends('layouts.admin')

@section('content')
    <!-- order detail list -->
    <div class="details">

        <!-- New Customers -->



        <div class="recentOrders">
            <div class="cardHeader">
                <h2>
                    Detalles del usuario</h2>
                <a href="{{ route('users.index') }}" class="btn">Regresar</a>

            </div>
            <table>
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Nombre</td>
                        <td>Email</td>
                        <td>Rol</td>
                    </tr>
                </thead>
                <tbody>
                        <tr>

                            <td>{{ $user->id }}</td>


                            <td>{{ $user->name }}</td>

                            <td>s/{{ $user->email }}</td>


                            <td> 
                                 @foreach ($user->roles as $role)
                                        <a href="">{{$role->name}}</a>
                                @endforeach</td>
                            


                        </tr>

                </tbody>
            </table>
        </div>
    </div>
@endsection
