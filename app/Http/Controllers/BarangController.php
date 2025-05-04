<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\barang;

class BarangController extends Controller
{
    function tampilan_awal(){
        $brg = barang::all();
        return view('form', compact('brg'));
    }

    function buat_baru(Request $request){
        barang::create([
            'nama' => $request->input('nama'),
            'jumlah' => $request->input('jumlah')
        ]);

        return redirect(url('/'));
    }
}
