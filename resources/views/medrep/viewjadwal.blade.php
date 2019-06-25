@extends('medrep.medrep')

@section('content')
    <div style="float: left;">
        <h4>Nama Dokter : {{ $dokter->nama }}</h4>
    </div>
    <div style="float: right; margin-bottom: 10px;"><a href="{{route('tambah.jadwal',$dokter->id)}}"><button class="btn btn-primary">Tambah Jadwal</button>
    </div>
    <table class="table table-striped">
        @if($dokter->jadwal->count() != 0)
            <tr>
                <td>Hari </td>
                <td>Jam Kerja</td>
                <td>Edit</td>
            </tr>
            @foreach($dokter->jadwal as $jadwal)
                <tr>
                    <td>{{$jadwal->hari}} </td>
                    <td>{{$jadwal->jam_masuk}} - {{$jadwal->jam_keluar}}</td>
                    <td><a href="{{route('edit.jadwal',$jadwal->id)}}"><button class="btn btn-primary">Edit</button></a> <a href="{{route('delete.jadwal',$jadwal->id)}}"><button class="btn btn-primary">Delete</button></a></td>
                </tr>
            @endforeach
        @else
            <tr>
                <td><h4 class="text-center"><font color="red"><i>*Data Jadwal Dokter Ini Kosong,Mohon Tambah Jadwal Terlebih Dahulu</i></h4></font></td>
            </tr>
        @endif
    </table>
@stop