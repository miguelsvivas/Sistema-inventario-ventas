@extends('layouts.admin')

@section('content')
            <!-- order detail list -->
            <div class="details">
               
                <!-- New Customers -->
         

            
<div class="recentOrders">
    <div class="cardHeader">
        <h2>
            Compras</h2>
        <a href="{{route('purchases.create')}}" class="btn">Registrar Compra</a>   

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
            @foreach ($purchases as $purchase)
            <tr>
                <td>
                    <a href="{{route('purchases.show', $purchase)}}">{{$purchase->id}}</a>
                </td>
                <td>
                    {{\Carbon\Carbon::parse($purchase->purchase_date)->format('d M y h:i a')}}
                </td>
                <td>{{$purchase->total}}</td>

                @if ($purchase->status == 'VALID')
                <td>
                    <a class="jsgrid-button btn btn-success" title="Editar">
                        Activo <i class="fas fa-check"></i>
                    </a>
                </td>
                @else
                <td>
                    <a class="jsgrid-button btn btn-danger" title="Editar">
                        Cancelado <i class="fas fa-times"></i>
                    </a>
                </td>
                @endif

                <td>Editar | Borrar

                    <a href="{{route('purchases.pdf',$purchase)}}"><i class="fas fa-print"></i></a>
                </td>

            </tr>

          

            @endforeach
        </tbody>
    </table>
</div>
</div>
@endsection