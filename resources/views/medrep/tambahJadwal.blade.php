@extends('medrep.medrep')

@section('content')
    <div class="col-md-9 text-center" style="margin-bottom: 20px">
        <h2>Nama Dokter : {{ $dokter->nama }}</h2>
    </div>
        <form action="{{route('tambah.jadwal.action',$dokter->id)}}">
            <div class="form-group row">
                <label for="xos" class="col-md-4 col-form-label text-md-right">Hari</label>
                <div class="col-md-2">
                    <select name="hari" class="form-control">
                        <option value="senin">Senin</option>
                        <option value="selasa">Selasa</option>
                        <option value="rabu">Rabu</option>
                        <option value="kamis">Kamis</option>
                        <option value="jumat">Jumat</option>
                        <option value="sabtu">Sabtu</option>
                        <option value="minggu">Minggu</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="xph" class="col-md-4 col-form-label text-md-right">Jam</label>
                <div class="col-md-4">
                    <input class="col-md-5 form-control" style="display: inline;" type="time" maxlength="3" placeholder="123" name="jam_masuk"> - 
                    <input class="col-md-5 form-control" style="display: inline;" type="time" maxlength="3" placeholder="123" name="jam_keluar">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-4">
                </div>
                <div class="col-md-2">
                    <input type="submit" class="btn btn-primary">
                </div>
            </div>
        </form>
    </table>
@stop