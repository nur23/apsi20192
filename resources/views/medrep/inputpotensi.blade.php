@extends('medrep.medrep')

@section('content')
    <div class="col-md-9 text-center" style="margin-bottom: 20px">
        <h2>Nama Dokter : {{ $dokter->nama }}</h2>
    </div>
    <table class="table table-striped">
        <form action="{{route('input.potensi.action',$dokter->id)}}">
            <tr>
                <div class="form-group row">
                    <label for="xph" class="col-md-4 col-form-label text-md-right">XPH</label>
                    <div class="col-md-2">
                        <input type="text" class="form-control" maxlength="3" placeholder="123" name="xph">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="xos" class="col-md-4 col-form-label text-md-right">XOS</label>
                    <div class="col-md-2">
                        <input type="text" class="form-control" maxlength="3" placeholder="123" name="xos">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="hos" class="col-md-4 col-form-label text-md-right">HOS</label>
                    <div class="col-md-2">
                        <input type="text" class="form-control" maxlength="7" placeholder="123" name="hos">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-primary">Submit</button></a>
                    </div>
                </div>
                <div>
                    <table>
                        <font size="2">
                            <tr><td>XPH  <td>: Rata-rata pasien per hari</td></td></tr>
                            <tr><td>XOS  <td>: Rata-rata obat sejenis diresepkan</td></td></tr>
                            <tr><td>HOS  <td>: Harga obat sejenis yang akan ditawarkan</td></td></tr>
                        </font>
                    </table>
                </div>
            </tr>
        </form>
    </table>
@stop