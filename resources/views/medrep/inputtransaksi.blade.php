@extends('medrep.medrep')

@section('content')

<form action="{{ route('medrep.transaksi', $tugas->id) }}" method="post">
	{{ csrf_field() }}

	<div class="form-group-row">
		<label class="col-sm-2 col-form-label">Produk</label>
		<div class="col-sm-10">
			<select name="transaksi" class="form-control">
			@foreach($produk as $p)
				<option value="{{ $p->id }}">{{ $p->nama }} (Rp {{ $p->harga }})</option>
			@endforeach
			</select>
		</div>	
	</div>
	<div class="form-group-row">
		<label class="col-sm-2 col-form-label">Produk</label>
		<div class="col-sm-10">
			Jumlah <input type="text" name="jumlah" required="required"> <br/>
			Tanggal Awal <input type="date" name="tgl_awal" required="required"> <br/>
			Tanggal Akhir <input type="date" name="tgl_akhir" required="required"> <br/>
			<button class="btn btn-primary">Simpan</button>
		</div>	
	</div>
	
</form>

@stop