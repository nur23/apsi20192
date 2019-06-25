@extends('supervisor.supervisor')

@section('content')
	<h4 align="center">Input Target Medical Representative</h4>
	<p>Medical Representative : {{ $medrep->nama }}</p>
	<form method="post" action="{{ route('superv.updateTarget', $medrep->id) }}">
    	{{ csrf_field() }}

        <p>Target : <input type="text" name="target" ></p>
        <button type="submit" class="btn btn-primary">Input Target</button>
    </form>
@stop