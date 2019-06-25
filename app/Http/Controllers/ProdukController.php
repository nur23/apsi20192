<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\produk;

class ProdukController extends Controller
{
    public function produk()
    {
    	$data = produk::all();
        return view('produk.produk', compact('data'));
    }

    public function detail(Produk $produk){
    	return view('produk.detail', compact('produk'));
    }

    public function input(){
    	return view('produk.input');
    }

    public function edit(Produk $produk){
    	return view('produk.edit', compact('produk'));
    }

    public function edit_produk(Request $request, Produk $produk){
    	$produk->nama = $request->get('nama');
    	$produk->jenis = $request->get('jenis');
    	$produk->komposisi = $request->get('komposisi');
    	$produk->indikasi = $request->get('indikasi');
    	$produk->aturan_pakai = $request->get('aturan_pakai');
    	$produk->cara_kerja = $request->get('cara_kerja');
    	$produk->harga = $request->get('harga');
    	$produk->peringatan_obat = $request->get('peringatan_obat');

    	$produk->save(); 

    	return redirect('produk');
    }

    public function input_produk(Request $request){
    	$data = new produk([
		    'nama' => $request->get('nama'),
		    'jenis' => $request->get('jenis'),
		    'komposisi' => $request->get('komposisi'),
		    'indikasi' => $request->get('indikasi'),
		    'aturan_pakai' => $request->get('aturan_pakai'),
		    'cara_kerja' => $request->get('cara_kerja'),
		    'harga' => $request->get('harga'),
		    'peringatan_obat' => $request->get('peringatan_obat'),
    	]);

    	$data->save(); 

    	return redirect('produk');
    }

}
