<?php

namespace App\Http\Controllers;

use App\Nilai;
use Illuminate\Http\Request;
Use Alert;
use App\Mahasiswa;
use App\Makul;
use App\User;

class NilaiController extends Controller
{
    public function index() {
        $nilai  = Nilai::all();
        return view('nilai.index', compact('nilai'));
    }

    public function tambah() {
        $mahasiswa  = Mahasiswa::all();
        $makul = Makul::all();
        return view('nilai.tambah', compact('mahasiswa','makul'));
    }

    public function store(Request $request) {
        Nilai::create($request->all());
        alert()->success('Sukses','Data berhasil disimpan.');
        return redirect()->route('nilai');
    }
}