@extends('supervisor.supervisor')

@section('content')
	<h4 align="center">Input Tugas Medical Representative {{ $medrep->nama }}</h4>
	<br>
	<form method="post" action="{{ route('superv.storeTugas', $medrep->id) }}">

	  {{ csrf_field() }}
	  
	  <div class="form-group row">
	    <label for="staticEmail" class="col-sm-2 col-form-label">Dokter</label>
	    <div class="col-sm-10">
	    	<select name="dokter" class="form-control">
			@foreach($dokter as $dok)
				<option value="{{ $dok->id }}">{{ $dok->nama }} (Rp {{ $dok->potensi }})</option>
			@endforeach									
			</select>
	    </div>
	  </div>
	  <div class="form-group row">
	    <label class="col-sm-2 col-form-label">Tipe Kunjungan</label>
	    <div class="col-sm-10">
		    <select name="tipe" class="form-control">
				 <option value="Detailing">Detailing</option>
		  		 <option value="Follow Up">Follow Up</option>
		  		 <option value="Survey">Survey</option>
			</select>
	    </div>
	  </div>
	  <button type="submit" class="btn btn-primary mb-2">Input Tugas</button>
	</form>
	
@stop