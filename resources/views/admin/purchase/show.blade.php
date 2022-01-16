@extends('layouts.admin')

@section('content')
    <!-- order detail list -->
    <div class="details">

        <!-- New Customers -->



        <div class="recentOrders">
            <div class="cardHeader">
                <h2>
                    Detalles de la compra</h2>
                <a href="{{ route('purchases.index') }}" class="btn">Regresar</a>

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
                    @foreach ($purchaseDetails as $purchaseDetail)
                        <tr>

                            <td>{{ $purchaseDetail->product->name }}</td>

                            <td>s/{{ $purchaseDetail->price }}</td>

                            <td>{{ $purchaseDetail->quantity }}</td>

                            <td>s/{{number_format($purchaseDetail->quantity*$purchaseDetail->price,2)}}</td>

                            


                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection
