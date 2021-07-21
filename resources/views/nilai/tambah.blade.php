@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">TAMBAH DATA</div>

                <div class="card-body">
                <h3>TAMBAH DATA NILAI</h3>
                    <form action="{{route('simpan.nilai')}}" method="post">
                    <br>
                    @csrf
                        <div class="form-group">
                            <label for="">NAMA MAHASISWA</label>
                            <div class="dropdown" class="form-control">
                                    <select name="mahasiswa_id" id="mahasiswa_id" class="select2">
                                        <option value=""  disabled selected>--Pilih Mahasiswa--</option>
                                        @foreach ($mahasiswa as $m)
                                            <option value="{{ $m->id }}">{{ $m->user->name }}</option>
                                        @endforeach
                                    </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">MATA KULIAH</label>
                            <div class="dropdown" class="form-control">
                                    <select name="makul_id" id="makul_id" class="select2">
                                        <option value=""  disabled selected>--Pilih Mata Kuliah--</option>
                                        @foreach ($makul as $mk)
                                            <option value="{{ $mk->id }}">{{ $mk->nama_makul }}</option>
                                        @endforeach
                                    </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">NILAI</label>
                            <input type="number" name="nilai" class="form-control" placeholder="Isikan Nilai" maxlength="3">
                        </div>  
                        <button class="btn btn-primary" type="submit">SIMPAN</button>
                        <a href="nilai" class="btn btn-danger">BATAL</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection