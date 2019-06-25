@extends('medrep.medrep')

@section('content')

<body>
	<h3>Input Jadwal Kunjungan</h3>	

	<table border="0">
		<tr>
			<td>Nama Dokter</td>
			<td>:</td>
			<td>{{ $data->dokter->nama }}</td>
		</tr>
		<tr>
			<td>Tipe Kunjungan</td>
			<td>:</td>
			<td>{{ $data->tipe }}</td>
		</tr>
		<tr>
			<td>Klasifikasi</td>
			<td>:</td>
			<td>C</td>
		</tr>
		<tr>
			<td>Jadwal Kunjungan</td>
			<td>:</td>
			<td>
				<form action="/medrep/update/{{ $data->id }}" method="post">
					{{ csrf_field() }}

					<input type="date" name="jadwal" value="{{ $data->jadwal }}">
					<button class="btn btn-primary">Input Jadwal</button>
				</form>
			</td>
		</tr>
	</table>
</body>

@stop
