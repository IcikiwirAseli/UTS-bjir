<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\mahasiswa;

class CRUD extends Controller
{
    public function tambah(){
    return view('tambah');
    }

    public function Ptambah(Request $request){
        mahasiswa::create([
            'nama' => $request->nama,
            'NIM' => $request->nim,
            'kelas' => $request->kelas
        ]);


    }

    public function lihat(){
        $data = mahasiswa::all();
        return view('lihat', compact('data'));
    }
}
