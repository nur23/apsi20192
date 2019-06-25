@extends('supervisor.supervisor')

@section('content')
    <h3 align="center">LAPORAN</h3>
    <h5>Kunjungan</h5>
    <table border="1" cellpadding="3" cellspacing="0" width="50%" class="table table-stripped">
        <thead>
            <tr>
                <td>Id Kunjungan</td>
                <td>Id Dokter</td>
                <td>Date</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>123</td>
                <td>12343e</td>
                <td>2433244</td>
            </tr>
        </tbody>
    </table>

    <br><br>

    <h5>Transaksi</h5>
    <table border="1" cellpadding="5" cellspacing="0" width="50%" class="table table-stripped">
        <thead>
            <tr>
                <td>Id Transaksi</td>
                <td>Id Dokter</td>
                <td>Banyak Peresepan</td>
                <td>Harga</td>
                <td>Total</td>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>

    <br><br>

    <table border="0" cellpadding="5" cellspacing="0" width="50%" class="table table-stripped">
        <tbody>
            <tr>
              <th>Total Transaksi</th>
                <td>99999</td>
            </tr>
        </tbody>
    </table>

    <div class="text-right">
        <a href="#"><button class="btn btn-primary pull-right">Print</button></a>
    </div>
    <div style="width: 500px;height: 500px">
        <canvas id="myChart"></canvas>
    </div>

    <script type="text/javascript" src="css/js/Chart.js"></script>
    <script>
        var ctx = document.getElementById("myChart").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: [
                    @foreach($medrep as $m)  
                     '{{ $m->nama }} ',
                    @endforeach 

                ],
                datasets: [{
                    label: 'Target',
                    data: [
                        @foreach($medrep as $m)  
                            {{ $m->target }} ,
                        @endforeach
                    ],
                    backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                }
            }
        });
    </script>
@stop