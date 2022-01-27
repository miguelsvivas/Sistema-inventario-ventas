@extends('layouts.admin')

@section('content')
            <!-- order detail list -->
            <div class="details">
               
                <!-- New Customers -->
         

            
<div class="recentOrders">
    <div class="cardHeader">
        <h2>
           Dashboard</h2>
                    <!--Cards-->
       

    </div>

    <div class="cardBox">
        <div class="card">
            <div>
                <div class="numbers">1,504</div>
                <div class="cardName">Daily Views</div>


            </div>
            <div class="iconBx">
                <ion-icon name="eye-outline"></ion-icon>
            </div>
        </div>
        <div class="card">
            <div>
                <div class="numbers">80</div>
                <div class="cardName">Sales</div>


            </div>
            <div class="iconBx">
                <ion-icon name="cart-outline"></ion-icon>
            </div>
        </div>
        <div class="card">
            <div>
                <div class="numbers">284</div>
                <div class="cardName">Comments</div>


            </div>
            <div class="iconBx">
                <ion-icon name="chatbubbles-outline"></ion-icon>
            </div>
        </div>
        <div class="card">
            <div>
                <div class="numbers">$7,852</div>
                <div class="cardName">Earnings</div>


            </div>
            <div class="iconBx">
                <ion-icon name="cash-outline"></ion-icon>
            </div>
           
        </div>
        
    </div>
    <br/>

    <div class="grafico">

    <canvas id="myChart" width="200" height="65"></canvas>
 
    </div>
</div>

</div>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    const ctx = document.getElementById('myChart').getContext('2d');
    const myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: [ <?php foreach ($ventasdia as $ventadia)
            {
                    $dia = $ventadia->dia;
                    
                    echo '"'. $dia.'",';} ?>],
                    datasets: [{
                        label: 'Ventas por dia',
                        data: [<?php foreach ($ventasdia as $reg)
                        {echo ''. $reg->totaldia.',';} ?>],
                        backgroundColor: 'rgba(20, 204, 20, 1)',
                        borderColor: 'rgba(54, 162, 235, 0.2)',
                        borderWidth: 1
                    }]
                },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
    </script>    
@endsection
