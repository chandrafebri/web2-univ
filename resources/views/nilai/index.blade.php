@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Data Nilai
                    <a href="tambah-nilai" class="btn btn-sm btn-primary float-right">TAMBAH DATA</a>
                </div>

                <div class="card-body">
                   <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <th>NO</th>
                                <th>NPM</th>
                                <th>NAMA</th>
                                <th>MAKUL</th>
                                <th>SKS</th>
                                <th>NILAI</th>
                                <th>AKSI</th>
                            </tr>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($nilai as $nli)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$nli->mahasiswa->npm}}</td>
                                <td>{{$nli->mahasiswa->user->name}}</td>
                                <td>{{$nli->makul->nama_makul}}</td>
                                <td>{{$nli->makul->sks}}</td>
                                <td>{{$nli->nilai}}</td>
                                <td>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                   </div> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection