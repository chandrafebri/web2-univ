@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">EDIT DATA</div>

                <div class="card-body">
                <h3>EDIT DATA MAHASISWA</h3>
                    <form action="{{route('update.mahasiswa', $mahasiswa->id)}}" method="post">
                    @csrf
                        <div class="form-group">
                            <label for="">NAMA MAHASISWA</label>
                            <select name="user_id" id="user_id" class="form-control">
                                <option value="" disabled selected>--Pilih User--</option>
                                @foreach ($user as $u)
                                    <option value="{{$u->id}}" {{$mahasiswa->user_id == $u->id ? 'selected' : ''}} >{{$u->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">NPM</label>
                            <input type="number" name="npm" class="form-control" placeholder="Masukkan NPM" maxlength="8" value="{{is_null($mahasiswa) ? '' : $mahasiswa->npm}}">
                        </div>
                        <div class="form-group">
                            <label for="">TEMPAT LAHIR</label>
                            <input type="text" name="tempat_lahir" class="form-control" placeholder="Masukkan Tempat Lahir" value="{{is_null($mahasiswa) ? '' : $mahasiswa->tempat_lahir}}">
                        </div>
                        <div class="form-group">
                            <label for="">TANGGAL LAHIR</label>
                            <input type="date" name="tanggal_lahir" class="form-control" placeholder="Masukkan Tanggal Lahir" value="{{is_null($mahasiswa) ? '' : $mahasiswa->tanggal_lahir}}">
                        </div>
                        <div class="form-group">
                            <label for="">JENIS KELAMIN</label>
                            <select name="gender" id="gender" class="form-control">
                                <option value="disable" disabled selected>--Pilih Jenis Kelamin--</option>
                                <option value="L" {{ $mahasiswa->gender == 'L' ? 'selected' : ''}} >Laki-Laki</option>
                                <option value="P" {{ $mahasiswa->gender == 'P' ? 'selected' : ''}} >Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">TELFON</label>
                            <input type="number" name="telepon" class="form-control" placeholder="Masukkan Nomor Telfon" value="{{is_null($mahasiswa) ? '' : $mahasiswa->telepon}}">
                        </div>
                        <div class="form-group">
                            <label for="">ALAMAT</label>
                            <textarea name="alamat" name="alamat" id="alamat" cols="2" rows="3" class="form-control" style="resize: none" >
                                {{is_null($mahasiswa) ? '' : $mahasiswa->alamat}}
                            </textarea>
                        </div>
                        <button class="btn btn-primary" type="submit" name="simpan">SIMPAN</button>
                        <a href="{{route('mahasiswa')}}" class="btn btn-danger">BATAL</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
