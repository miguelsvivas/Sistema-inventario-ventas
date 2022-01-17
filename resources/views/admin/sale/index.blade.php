@extends('layouts.admin')

@section('content')
            <!-- order detail list -->
            <div class="details">
               
                <!-- New Customers -->
         

            
<div class="recentOrders">
    <div class="cardHeader">
        <h2>
           Ventas</h2>
        <a href="{{route('sales.create')}}" class="btn">Registrar Venta</a>   

    </div>
    <table>
        <thead>
            
                
           
            <tr>
                <td>ID</td>
                <td>Fecha</td>
                <td>Total</td>
                <td>Estado</td>
                <td>Acciones</td>

            </tr>
            
        </thead>
        <tbody>
            @foreach ($sales as $sale)
            <tr>
                <th scope="row">
                    <a href="{{route('sales.show', $sale)}}">{{$sale->id}}</a>
                </th>
                <td>{{$sale->total}}</td>


            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>
@endsection