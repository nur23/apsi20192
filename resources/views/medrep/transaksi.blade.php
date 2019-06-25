@extends('medrep.medrep')

@section('content')

<body>
	<h3 align="center">Transaksi</h3>	

	<table cellpadding="5" cellspacing="0" width="50%" class="table table-striped">
		<thead>
            <tr>
                <td align="center"><b>Nama Dokter</td>
                <td align="center"><b>Tanggal Awal</td>
                <td align="center"><b>Tanggal Akhir</td>
                <td align="center"><b>Jumlah</td>
            </tr>
        </thead>
		<tbody>
	        @foreach($transaksi as $t)
	        	<tr>
		        	<td align="center">{{ $t->tugas->dokter->nama }}</td>
		            <td align="center">{{ $t->tgl_awal }}</td>
		            <td align="center">{{ $t->tgl_awal }}</td>
		            <td align="center">Rp.{{number_format($t->harga ,2,",",".")}}</td>
	        	</tr>
	        @endforeach
			</tbody>
	</table>
	<div class="text-right">
		<a href="/medrep/inputtransaksi/{{ $tugas->id }}"><button class="btn btn-primary">Input Transaksi</button></a> 
	</div>  
</body>

@stop
