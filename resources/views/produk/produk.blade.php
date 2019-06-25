@extends('supervisor.supervisor')

@section('content')
    <h3 align="center">INFORMASI PRODUK</h3>
    <table border="1" cellpadding="3" cellspacing="0" width="50%" class="table table-stripped">
        <thead>
            <tr>
                <td>Nama</td>
                <td>Jenis</td>
                <td>Harga</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $produk)
            <tr>
                <td>{{ $produk->nama }}</td>
                <td>{{ $produk->jenis }}</td>
                <td>Rp {{ $produk->harga }}</td>
                <td>
                    <a href="produk/detail/{{ $produk->id }}"><button class="btn btn-primary">Detail</button></a>
                    <a href="produk/edit/{{ $produk->id }}"><button class="btn btn-primary">Edit</button></a>
                    <a href="#"><button class="btn btn-primary">Delete</button></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>


    <div class="text-right">
        <a href="/produk/input"><button class="btn btn-primary pull-right">Tambah</button></a>
    </div>
@stop