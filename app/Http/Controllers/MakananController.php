<?php

namespace App\Http\Controllers;

use App\Models\Makanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class MakananController extends Controller
{
    public function index()
    {
        $makanans = Makanan::all();
        return view('index', compact('makanans'));
    }


    public function create(Request $request)
    {
        $request->validate([
            'nama_makanan' => 'required',
            'deskripsi_makanan' => 'required',
        ]);

        $makanan = new Makanan();
        $makanan->nama_makanan = $request->nama_makanan;
        $makanan->deskripsi_makanan = $request->deskripsi_makanan;
        
        $makanan->save();
        return Redirect::route('index_makanan')->with('success','Berhasil menambahkan data!!');
    }

   
}
