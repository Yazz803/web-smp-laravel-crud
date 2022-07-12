<?php

namespace App\Http\Controllers;

use App\Models\DataSiswaPpdb;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    const BASEURL = 'http://127.0.0.1:8000';

    public function index()
    {
        return view('dashboard.datasiswa.index',[
            'baseurl' => DashboardController::BASEURL,
            'datasiswa' => DataSiswaPpdb::latest()->filter(request(['search']))->paginate(11)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DataSiswaPpdb  $dataSiswaPpdb
     * @return \Illuminate\Http\Response
     */
    public function show(DataSiswaPpdb $dataSiswaPpdb)
    {
        // $data = DataSiswaPpdb::where('id', 3)->get();
        return view('dashboard.datasiswa.show',[
            'dataSiswaPpdb' => $dataSiswaPpdb,
            'baseurl' => DashboardController::BASEURL
        ]);
        // return dd(DataSiswaPpdb::where('id', 3)->get());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DataSiswaPpdb  $dataSiswaPpdb
     * @return \Illuminate\Http\Response
     */
    public function edit(DataSiswaPpdb $dataSiswaPpdb)
    {
        return view('dashboard.datasiswa.edit',[
            'dataSiswaPpdb' => $dataSiswaPpdb,
            'baseurl' => DashboardController::BASEURL
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DataSiswaPpdb  $dataSiswaPpdb
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DataSiswaPpdb $dataSiswaPpdb)
    {
        $rules = [
            'name' => 'required|max:255',
            'tgl' => 'required|max:255',
            'kelamin' => 'required|max:255',
            'asalsekolah' => 'required|max:255',
            'lahir' => 'required|max:255',
            'namaortu' => 'required|max:255',
            'alamat' => 'required|max:255',
            'hportu' => 'required|max:255',
            'no_hp' => 'required|max:20'
        ];

        if($request->nisn != $dataSiswaPpdb->nisn){
            $rules['nisn'] = 'required|unique:data_siswa_ppdbs';
        }
        if($request->nik != $dataSiswaPpdb->nik){
            $rules['nik'] = 'required|unique:data_siswa_ppdbs';
        }
        if($request->email != $dataSiswaPpdb->email){
            $rules['email'] = 'required|unique:data_siswa_ppdbs';
        }

        $validateData = $request->validate($rules);

        DataSiswaPpdb::where('nisn', $dataSiswaPpdb->nisn)->update($validateData);

        return redirect('/dashboard/datasiswa')->with('success', 'Data siswa <b>'. $dataSiswaPpdb->name .'</b> berhasil di ubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DataSiswaPpdb  $dataSiswaPpdb
     * @return \Illuminate\Http\Response
     */
    public function destroy(DataSiswaPpdb $dataSiswaPpdb)
    {
        DataSiswaPpdb::destroy($dataSiswaPpdb->id);
        return redirect('/dashboard/datasiswa')->with('success', 'Data siswa <b>'. $dataSiswaPpdb->name .'</b> berhasil dihapus!');
    }
}
