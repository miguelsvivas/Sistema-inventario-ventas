@extends('layouts.admin')

@section('content')
    <!-- order detail list -->
    <div class="details">

        <!-- New Customers -->



        <div class="recentOrders">
            <div class="cardHeader">
                <h2>
                    Detalles de la venta</h2>
                <a href="{{ route('sales.index') }}" class="btn">Regresar</a>

            </div>
            <table>
                <thead>
                    <tr>
                        <td>Producto</td>
                        <td>Precio</td>
                        <td>Cantidad</td>
                        <td>Subtotal</td>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($saleDetails as $saleDetail)
                        <tr>

                            <td>{{$saleDetail->product->name}}</td>

                            

                            


                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection
