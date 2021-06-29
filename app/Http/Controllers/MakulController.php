<?php

namespace App\Http\Controllers;

use App\Makul;
use Illuminate\Http\Request;
Use Alert;

class MakulController extends Controller
{
    public function index() {
        $makul  = Makul::all();
        return view('makul.index', compact('makul'));
    }

    public function create() {
        return "halo saya Makul Kontroler, dari Method create";
    }

    public function halo() {
        return "Halo Dunia";
    }

    public function tambah() {
        return view('makul.tambah');
    }

    public function store(Request $request) {
        Makul::create($request->all());
        alert()->success('Sukses','Data berhasil disimpan.');
        return redirect()->route('makul');
    }

    public function edit($id) {
        $makul = Makul::find($id);
        return view('makul.edit', compact('makul'));
    }

    public function update (Request $request, $id) {
        $makul = Makul::find($id);
        $makul->update($request->all());
        toast('Yeay, berhasil Edit Data','success');
        return redirect()->route('makul');
    }

    public function hapus($id) {
        $makul = Makul::find($id);
        $makul->delete();
        toast('Yeay, berhasil Hapus Data','success');
        return redirect()->route('makul');
    }
}
