@extends('supervisor.supervisor')

@section('content')
	<h4 align="center">Tugas Medical Representative {{ $medrep->nama }}</h4>
	<table border="1" cellpadding="5" cellspacing="0" width="50%" class="table table-striped">
		<thead>
            <tr>
                <td>Dokter</td>
                <td>Tipe Kunjungan</td>
                <td>Potensi</td>
            </tr>
        </thead>
        <tbody>
    @if ($medrep->tugas != null)
		@foreach($medrep->tugas as $tugas)
			<tr>
	            <td>{{ $tugas->dokter->nama }}</td>
	            <td>{{ $tugas->tipe }}</td>
	            <td>Rp {{ $tugas->dokter->potensi }}</td>
	        </tr>
		@endforeach
	@endif
		</tbody>
	</table>

	<a href="tugas/{{ $medrep->id }}"><button class="btn btn-primary">Tambah Tugas</button></a>
@stop