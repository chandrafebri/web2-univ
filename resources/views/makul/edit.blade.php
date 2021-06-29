@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">EDIT DATA</div>

                <div class="card-body">
                <h3>TAMBAH DATA MATA KULIAH</h3>
                    <form action="{{route('update.makul', $makul->id)}}" method="post">
                    @csrf
                        <div class="form-group">
                            <label for="">KODE MAKUL</label>
                            <input type="text" name="kd_makul" id="" class="form-control" placeholder="Masukkan Kode Mata Kuliah" value="{{is_null($makul) ? '' : $makul->kd_makul}}">
                        </div>
                        <div class="form-group">
                            <label for="">NAMA MAKUL</label>
                            <input type="text" name="nama_makul" id="" class="form-control" placeholder="Masukkan Nama Mata Kuliah" value="{{is_null($makul) ? '' : $makul->nama_makul}}">
                        </div>
                            <label for="">SKS</label>
                            <input type="number" name="sks" id="" class="form-control" placeholder="Masukkan Jumlah SKS" value="{{is_null($makul) ? '' : $makul->sks}}">
                        </div>
                        <button class="btn btn-primary" type="submit" name="simpan">SIMPAN</button>
                        <a href="makul" class="btn btn-danger">BATAL</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
