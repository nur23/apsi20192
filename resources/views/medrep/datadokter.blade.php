@extends('medrep.medrep')

@section('content')
    <div style="margin-bottom: 10px;"><a href="InputDokter"><button class="btn btn-primary">Tambah Dokter</button>
    </div>
    <table class="table table-striped">
        <tr>
            <td>Nama Dokter</td>
            <td>Kontak</td>
            <td>Spesialisasi</td>
            <td>Potensi</td>
            <td>Jadwal</td>
        </tr>
        @foreach ($data as $dokter)
            <tr>
                <td>{{ $dokter->nama }}</td>
                <td>{{ $dokter->kontak }}</td>
                <td>{{ $dokter->spesialisasi }}</td>

                @if($dokter->potensi > 0)
                    <td>Rp.{{number_format($dokter->potensi,2,",",".")}}</td>
                @else
                    <td><a href="{{route('input.potensi',$dokter->id)}}"><button class="btn btn-primary" {{($dokter->jadwal->count() == 0) ? 'disabled' : ''}}>Input Potensi</button></td>
                @endif
                <td><a href="{{route('view.jadwal',$dokter->id)}}"><button class="btn btn-primary">View Jadwal</button></td>

            </tr>
        @endforeach
    </table>
@stop