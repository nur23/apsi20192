@extends('supervisor.supervisor')

@section('content')
	<h3 align="center">Input Produk </h3>
	<br>
	<form method="post" action="{{ route('produk.edit', $produk->id)}}">

	  {{ csrf_field() }}
	  
	  <div class="form-group row">
	    <label class="col-sm-2 col-form-label">Nama</label>
	    <input class="col-sm-10" type="text" value ="{{ $produk->nama }}" name="nama">
	  </div>
	  <div class="form-group row">
	    <label class="col-sm-2 col-form-label">Jenis</label>
	    <input class="col-sm-10" type="text" value ="{{ $produk->jenis }}" name="jenis">
	  </div>
	  <div class="form-group row">
	    <label class="col-sm-2 col-form-label">Komposisi</label>
	    <input class="col-sm-10" type="text" value ="{{ $produk->komposisi }}" name="komposisi">
	  </div>
	  <div class="form-group row">
	    <label class="col-sm-2 col-form-label">Aturan Pakai</label>
	    <input class="col-sm-10" type="text" value ="{{ $produk->aturan_pakai }}" name="aturan_pakai">
	  </div>
	  <div class="form-group row">
	    <label class="col-sm-2 col-form-label">Cara Kerja</label>
	    <input class="col-sm-10" type="text" value ="{{ $produk->cara_kerja }}" name="cara_kerja">
	  </div>
	  <div class="form-group row">
	    <label class="col-sm-2 col-form-label">Peringatan Obat</label>
	    <input class="col-sm-10" type="text" value ="{{ $produk->peringatan_obat }}" name="peringatan_obat">
	  </div>
	  <div class="form-group row">
	    <label class="col-sm-2 col-form-label">Indikasi</label>
	    <input class="col-sm-10" type="text" value ="{{ $produk->indikasi }}" name="indikasi">
	  </div>
	  <div class="form-group row">
	    <label class="col-sm-2 col-form-label">Harga</label>
	    <input class="col-sm-10" type="number" value ="{{ $produk->harga }}" name="harga">
	  </div>
	  <button type="submit" class="btn btn-primary mb-2">Edit Produk</button>
	</form>
@stop