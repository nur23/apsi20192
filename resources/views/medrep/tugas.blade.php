@extends('medrep.medrep')

@section('content')
	<table cellpadding="5" cellspacing="0" width="50%" class="table table-striped">
		<thead>
            <tr>
                <td align="center"><b>Nama Dokter</td>
                <td align="center"><b>Tipe Kunjungan</td>
                <td align="center"><b>Klasifikasi</td>
                <td align="center" colspan="2"><b>Jadwal</td>
                <td align="center"><b>Transaksi</td>
            </tr>
        </thead>
        <tbody>
        @foreach($data as $tugas)
        	<tr>
	        	<td align="center">{{ $tugas->dokter->nama }}</td>
	            <td align="center">{{ $tugas->tipe }}</td>
	            <td align="center">A</td>

                @if($tugas->jadwal == 0000-00-00)
                    <td align="center" colspan="2"><a href="/medrep/inputjadwal/{{ $tugas->id }}"><button class="btn btn-primary">Input Jadwal</button></a></td>
                @else 
                    <td align="center">{{ $tugas->jadwal }}</td>
                    <td align="center"><a href="/medrep/inputjadwal/{{ $tugas->id }}"><button class="btn btn-primary">Edit Jadwal</button></a></td>
                @endif
                
                <td align="center"><a href="/medrep/transaksi/{{ $tugas->id }}"><button class="btn btn-primary">Transaksi</button></a></td>
        	</tr>
        @endforeach
		</tbody>
	</table>        
@stop