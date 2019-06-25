@extends('medrep.medrep')

@section('content')
    <table border="1" cellpadding="3" cellspacing="0" width="50%" class="table table-stripped">
        <thead>
            <tr>
                <td>Nama</td>
                <td>Jenis</td>
                <td>Harga</td>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $p)
            <tr>
                <td>{{ $p->nama }}</td>
                <td>{{ $p->jenis }}</td>
                <td>Rp {{ $p->harga }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@stop