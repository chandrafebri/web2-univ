@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">EDIT DATA</div>

                <div class="card-body">
                <h3>EDIT DATA NILAI</h3>
                    <form action="{{ route('update.nilai', $nilai->id)}}" method="post">
                    @csrf
                        <div class="form-group">
                            <label for="">NAMA MAHASISWA</label>
                            <div class="dropdown" class="form-control">
                                    <select name="mahasiswa_id" id="mahasiswa_id">
                                        <option value=""  disabled selected>--Pilih Mahasiswa--</option>
                                        @foreach ($mahasiswa as $m)
                                            <option value="{{ $m->id }}" {{ $nilai->mahasiswa_id == $m->id ? 'selected' : '' }}>{{ $m->user->name }}</option>
                                        @endforeach
                                    </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="">MATA KULIAH</label>
                            <div class="dropdown" class="form-control">
                                    <select name="makul_id" id="makul_id">
                                        <option value=""  disabled selected>--Pilih Mata Kuliah--</option>
                                        @foreach ($makul as $mk)
                                            <option value="{{ $mk->id }}" {{ $nilai->makul_id == $mk->id ? 'selected' : '' }}>{{ $mk->nama_makul }}</option>
                                        @endforeach
                                    </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="">NILAI</label>
                            <input type="number" name="nilai" class="form-control" maxlength="3" value="{{is_null($nilai) ? '' : $nilai->nilai}}">
                        </div>
                        <button class="btn btn-primary" type="submit" name="simpan">SIMPAN</button>
                        <a href="{{route('nilai')}}" class="btn btn-danger">BATAL</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
