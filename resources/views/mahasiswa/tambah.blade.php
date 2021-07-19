@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">TAMBAH DATA</div>

                <div class="card-body">
                <h3>TAMBAH DATA MAHASISWA</h3>
                    <form action="{{route('simpan.mahasiswa')}}" method="post">
                    @csrf
                        <div class="form-group">
                            <label for="">NAMA MAHASISWA</label>
                            <select name="user_id" id="user_id" class="form-control">
                                <option value="" disabled selected>--Pilih User--</option>
                                @foreach ($user as $u)
                                    <option value="{{$u->id}}">{{$u->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">NPM</label>
                            <input type="number" name="npm" class="form-control" placeholder="Masukkan NPM" maxlength="8">
                        </div>
                        <div class="form-group">
                            <label for="">TEMPAT LAHIR</label>
                            <input type="text" name="tempat_lahir" class="form-control" placeholder="Masukkan Tempat Lahir">
                        </div>
                        <div class="form-group">
                            <label for="">TANGGAL LAHIR</label>
                            <input type="date" name="tanggal_lahir" class="form-control" placeholder="Masukkan Tanggal Lahir">
                        </div>
                        <div class="form-group">
                            <label for="">JENIS KELAMIN</label>
                            <select name="gender" id="gender" class="form-control">
                                <option value="disable" disabled selected>--Pilih Jenis Kelamin--</option>
                                <option value="L">Laki-Laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for=""><Table>TELFON</Table></label>
                            <input type="number" name="telepon" class="form-control" placeholder="Masukkan Nomor Telfon">
                        </div>
                        <div class="form-group">
                            <label for="">ALAMAT</label>
                            <textarea name="alamat" name="alamat" id="alamat" cols="2" rows="3" class="form-control" style="resize: none"></textarea>
                        </div>
                        <button class="btn btn-primary" type="submit">SIMPAN</button>
                        <a href="mahasiswa" class="btn btn-danger">BATAL</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
