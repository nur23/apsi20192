@extends('supervisor.supervisor')

@section('content')
	<h3 align="center">Input Produk </h3>
	<br>
	<form method="post" action="{{ route('produk.produk') }}">

	  {{ csrf_field() }}
	  
	  <div class="form-group row">
	    <label class="col-sm-2 col-form-label">Nama</label>
	    <input class="col-sm-10" type="text" name="nama">
	  </div>
	  <div class="form-group row">
	    <label class="col-sm-2 col-form-label">Jenis</label>
	    <input class="col-sm-10" type="text" name="jenis">
	  </div>
	  <div class="form-group row">
	    <label class="col-sm-2 col-form-label">Komposisi</label>
	    <input class="col-sm-10" type="text" name="komposisi">
	  </div>
	  <div class="form-group row">
	    <label class="col-sm-2 col-form-label">Aturan Pakai</label>
	    <input class="col-sm-10" type="text" name="aturan_pakai">
	  </div>
	  <div class="form-group row">
	    <label class="col-sm-2 col-form-label">Cara Kerja</label>
	    <input class="col-sm-10" type="text" name="cara_kerja">
	  </div>
	  <div class="form-group row">
	    <label class="col-sm-2 col-form-label">Peringatan Obat</label>
	    <input class="col-sm-10" type="text" name="peringatan_obat">
	  </div>
	  <div class="form-group row">
	    <label class="col-sm-2 col-form-label">Indikasi</label>
	    <input class="col-sm-10" type="text" name="indikasi">
	  </div>
	  <div class="form-group row">
	    <label class="col-sm-2 col-form-label">Harga</label>
	    <input class="col-sm-10" type="number" name="harga">
	  </div>
	  <button type="submit" class="btn btn-primary mb-2">Input Produk</button>
	</form>
@stop