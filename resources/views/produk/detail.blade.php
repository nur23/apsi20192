@extends('supervisor.supervisor')

@section('content')
    <h3 align="center">DETAIL PRODUK</h3>
    <table border="0" cellpadding="5" cellspacing="0" width="50%" class="table table-stripped">
        <tbody>
            <tr>
                <th>NAMA :</th>
                <td>{{ $produk->nama }}</td>
            </tr>
            <tr>
                <th>JENIS</th>
                <td>{{ $produk->jenis }}</td>
            </tr>
            <tr>
                <th>HARGA</th>
                <td>{{ $produk->harga }}</td>
            </tr>
            <tr>
                <th>KOMPOSISI</th>
                <td>{{ $produk->komposisi }}</td>
            </tr>
            <tr>
                <th>ATURAN PAKAI</th>
                <td>{{ $produk->aturan_pakai }}</td>
            </tr>
            <tr>
                <th>CARA KERJA</th>
                <td>{{ $produk->cara_kerja }}</td>
            </tr>
            <tr>
                <th>PERINGATAN OBAT</th>
                <td>{{ $produk->peringatan_obat }}</td>
            </tr>
            <tr>
                <th>INDIKASI</th>
                <td>{{ $produk->indikasi }}</td>
            </tr>
        </tbody>
    </table>

    <div class="text-right">
        <a href="/produk"><button class="btn btn-primary pull-right">Kembali</button></a>
    </div>
@stop