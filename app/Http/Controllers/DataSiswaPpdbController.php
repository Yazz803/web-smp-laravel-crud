<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataSiswaPpdb;

class DataSiswaPpdbController extends Controller
{
    public function index()
    {
        return view('ppdb.index',[
            'title' => 'Register PPDB'
        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|max:255',
            'tgl' => 'required|max:255',
            'kelamin' => 'required|max:255',
            'asalsekolah' => 'required|max:255',
            'lahir' => 'required|max:255',
            'namaortu' => 'required|max:255',
            'alamat' => 'required|max:255',
            'hportu' => 'required|max:255',
            'nisn' => 'required|min:10|max:10|unique:data_siswa_ppdbs',
            'nik' => 'required|min:16|max:16|unique:data_siswa_ppdbs',
            'email' => 'required|email:dns|unique:data_siswa_ppdbs',
            'no_hp' => 'required|max:20'
        ]);

        DataSiswaPpdb::create($validateData);

        return redirect('/daftarppdb/success')->with('success', '<b>Berhasil Melakukan Pendaftaran!</b> Silahkan masuk ke Grup dibawah ini untuk info lebih lanjut');
        // 
    }

    public function success()
    {
        return view('ppdb.success');
    }
}
