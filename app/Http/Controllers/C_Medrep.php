<?php

namespace App\Http\Controllers;

use App\produk;

use App\dokter;

use App\jadwal;

use App\tugas;
use App\medrep;
use App\transaksi;

use DB;

use Illuminate\Http\Request;

use App\Http\Requests;


class C_Medrep extends Controller
{
    public function homeMedrep(){
    	return view('medrep.medrep');
    }

    public function displayProduk(){
    	// $data = DB::table('produk')->get();
    	$data = produk::All();
    	return view('medrep.produk',compact('data'));  
    }

    public function displayDokter(){
    	$data = dokter::All();
    	return view('medrep.datadokter',compact('data'));
    }

    public function inputPotensi(Dokter $dokter){
    	return view('medrep.inputpotensi',compact('dokter'));
    }

    public function inputPotensiAction(Request $request, Dokter $dokter){
        $jhpd = $dokter->jadwal->count();
        $xph = $request->xph;
        $xos = $request->xos;
        $hos = $request->hos;

        $potensi = $jhpd*4*$xph*$xos*$hos;   
        $dokter->potensi = $potensi;

        $dokter->save();

        return redirect('medrep/datadokter');

    }

    public function viewJadwal(Dokter $dokter){
        return view('medrep.viewjadwal', compact('dokter'));
    }

    public function tambahJadwal(Dokter $dokter){
        return view('medrep.tambahJadwal',compact('dokter'));
    }

    public function tambahJadwalAction(Request $request, Dokter $dokter){
        $data = new Jadwal([
            'hari' => $request->hari,
            'jam_masuk' => $request->jam_masuk,
            'jam_keluar' => $request->jam_keluar,
            'dokter_id' => $dokter->id
        ]);

        $data->save();

        return redirect('/medrep/datadokter/viewjadwal/'.$dokter->id);
    }

    public function deleteJadwal(Jadwal $jadwal){
        $jadwal->delete();

        return redirect('/medrep/datadokter/viewjadwal/'.$jadwal->dokter->id);
    }  

    public function editJadwal(Jadwal $jadwal){
        return view('medrep/editjadwal',compact('jadwal'));
    }

    public function editJadwalAction(Request $request, Jadwal $jadwal){
        $jadwal->hari = $request->hari;
        $jadwal->jam_masuk = $request->jam_masuk;
        $jadwal->jam_keluar = $request->jam_keluar;

        $jadwal->save();

        return redirect('/medrep/datadokter/viewjadwal/'.$jadwal->dokter->id);
    }



    // Yono
    public function displayTugas(int $medrep){
        // $data = DB::table('tugas')->get();
        $data = tugas::where('medrep_id','=',$medrep)->get();
        // return $data;
        return view('medrep.tugas',compact('data'));
    }

    
    public function inputJadwal($id){
        // $data = DB::table('tugas')->where('id', $id)->get();
        $data = tugas::find($id);
        // return $data;
        return view('medrep.inputjadwal', compact('data'));
    }

    public function update(Request $request, $id){
        $data = tugas::find($id);
        $data->jadwal = $request->get('jadwal');
        $data->timestamps = false;
        $data->save();

        return redirect('medrep/tugas/'.$data->medrep_id);
    }

    public function displayTransaksi(tugas $tugas){
        // return $tugas;
        $transaksi = $tugas->transaksi;
        // return $transaksi;
        return view('medrep.transaksi', compact('transaksi', 'tugas'));
    }

    public function inputTransaksi(tugas $tugas){
        $produk = produk::All();
        return view('medrep.inputtransaksi', compact('produk', 'tugas'));
    }


    //RinRin
    public function InputDokter(){
        return view('medrep.InputDokter');
    }

    public function Store_InputDokter(){
        $dokter = new dokter();
 
        $dokter->nama = request('DataDokter_nama');
        $dokter->spesialisasi = request('DataDokter_spesialisasi');
        $dokter->kontak = request('DataDokter_kontak');
        $dokter->status = 0;
        $dokter->potensi = 0;
 
        $dokter->save();
 
        return redirect('/medrep/datadokter');
    }

    public function insert(Request $request, $tugas){

        $this->validate($request, [
            'jumlahresep' => 'integer|min:0', 
            'tgl_akhir' => 'required|date|after:tgl_awal'
        ]);

        $harga = produk::find($request->transaksi)->harga;
        $transaksi = new transaksi([
            'harga' => $harga*$request->jumlah,
            'jumlahresep'  => $request->jumlah,
            'tgl_awal'  => $request->tgl_awal,
            'tgl_akhir'  => $request->tgl_akhir,
            'tugas_id' => $tugas,
            'produk_id' => $request->transaksi
        ]);


        $transaksi->save();
        $medrep = $transaksi->tugas->medrep;
        $medrep->pencapaian = $transaksi->sum('harga');
        
        $medrep->save();
        // return $medrep->pencapaian;
        return redirect('medrep/tugas/'.$transaksi->tugas->medrep->id);
    }
}
