@extends('medrep.medrep')

@section('content')
    <div class="col-md-9 text-center" style="margin-bottom: 20px">
        {{-- <h2>Nama Dokter : {{ $jadwal->dokter->nama }}</h2> --}}
    </div>
        <form action="{{route('edit.jadwal.action',$jadwal->id)}}">
            <div class="form-group row">
                <label for="xos" class="col-md-4 col-form-label text-md-right">Hari</label>
                <div class="col-md-2">
                    <select name="hari" class="form-control">
                        <option value="senin" @if($jadwal->hari == 'senin') selected="true" @endif>Senin</option>
                        <option value="selasa" @if($jadwal->hari == 'selasa') selected="true" @endif>Selasa</option>
                        <option value="rabu" @if($jadwal->hari == 'rabu') selected="true" @endif>Rabu</option>
                        <option value="kamis" @if($jadwal->hari == 'kamis') selected="true" @endif>Kamis</option>
                        <option value="jumat" @if($jadwal->hari == 'jumat') selected="true" @endif>Jumat</option>
                        <option value="sabtu" @if($jadwal->hari == 'sabtu') selected="true" @endif>Sabtu</option>
                        <option value="minggu" @if($jadwal->hari == 'minggu') selected="true" @endif>Minggu</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="xph" class="col-md-4 col-form-label text-md-right">Jam</label>
                <div class="col-md-4">
                    <input class="col-md-5 form-control" style="display: inline;" type="time" maxlength="3" placeholder="123" name="jam_masuk" value="{{$jadwal->jam_masuk}}"> - 
                    <input class="col-md-5 form-control" style="display: inline;" type="time" maxlength="3" placeholder="123" name="jam_keluar" value="{{$jadwal->jam_keluar}}">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-4">
                </div>
                <div class="col-md-2">
                    <input type="submit" class="btn btn-primary" value="Edit">
                </div>
            </div>
        </form>
    </table>
@stop