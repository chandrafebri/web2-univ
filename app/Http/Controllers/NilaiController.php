<?php

namespace App\Http\Controllers;

use App\Nilai;
use Illuminate\Http\Request;
Use Alert;

class NilaiController extends Controller
{
    public function index() {
        $nilai  = Nilai::all();
        return view('nilai.index', compact('nilai'));
    }

}