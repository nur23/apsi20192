@extends('supervisor.supervisor')

@section('content')
<h4 align="center">Medical Representative</h4>
<table border="1" cellpadding="5" cellspacing="0" width="50%" class="table table-striped">
        <thead>
            <tr>
                <td>ID</td>
                <td>Nama</td>
                <td>Pencapaian</td>
                <td>Target</td>
                <td>Input Tugas</td>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $medrep)
            <tr>
                <td>{{ $medrep->medrepId }}</td>
                <td>{{ $medrep->nama }}</td>
                @if($medrep->target != 0)
                    <td>{{ ($medrep->pencapaian*100)/$medrep->target}}%</td>
                @else
                   <td>0%</td>
                @endif
                <td>
                    @if($medrep->target == 0)
                         <a href="target/{{ $medrep->id }}"><button class="btn btn-primary">Target</button></a>
                    @else
                        Rp {{ $medrep->target }}
                    @endif
                </td>
                <td>
                	<a href="{{ $medrep->id }}"><button class="btn btn-primary">Tugas</button></a>
                   
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@stop