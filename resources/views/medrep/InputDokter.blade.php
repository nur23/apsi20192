@extends('medrep.medrep')

@section('content')
<h1 class="text-center">Input Data Dokter</h1>
 
<div class="container">
 
    <form method="POST" action="/act_InputDokter">
 
        {{ csrf_field() }}
 
        <div>
            <label >Nama</label>
            <input type="text" name="DataDokter_nama" placeholder="Nama">
 
        </div>
        <div>
            <label >Spesialisasi</label>
            <input type="text" name="DataDokter_spesialisasi" placeholder="Spesialisasi">
 
        </div>

        <div>
            <label >Kontak</label>
            <input type="text" name="DataDokter_kontak" placeholder="Nomor Kontak" maxlength="12">
 
        </div>

        <div>
            <br>
            <input type="submit" value="Submit" style="margin-top: 25px;">
 
        </div>
 
    </form>  
 
</div>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}
 
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}
 
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
 
input[type=submit]:hover {
  background-color: #45a049;
}
 
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
@stop