@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex bg-light justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Data Siswa PPDB {{ date("Y") }}</h1>
</div>


{{-- @dd($dataSiswaPpdb) --}}

<div class="table-responsive w-100 bg-light">
  {{-- untuk membuat/menabahkan pakae --/--/create --}}
    <table class="table table-striped table-sm tabelsiswa">
        <h4>Data Calon Siswa</h4>
        <tr>
            <th style="width: 170px;">Nama  </th>
            <td><b>: </b>{{ $dataSiswaPpdb->name }}</td>
        </tr>
        <tr>
            <th>Kelamin  </th>
            <td><b>: </b>{{ $dataSiswaPpdb->kelamin }}</td>
        </tr>
        <tr>
            <th>NISN  </th>
            <td><b>: </b>{{ $dataSiswaPpdb->nisn }}</td>
        </tr>
        <tr>
            <th>NIK  </th>
            <td><b>: </b>{{ $dataSiswaPpdb->nik }}</td>
        </tr>
        <tr>
            <th>Asal Sekolah  </th>
            <td><b>: </b>{{ $dataSiswaPpdb->asalsekolah }}</td>
        </tr>
        <tr>
            <th>Tgl Lahir  </th>
            <td><b>: </b>{{ $dataSiswaPpdb->lahir }}</td>
        </tr>
        <tr>
            <th>Email  </th>
            <td><b>: </b>{{ $dataSiswaPpdb->email }}</td>
        </tr>
        <tr>
            <th>No. HP  </th>
            <td><b>: </b><a href="https://wa.me/62{{ ltrim($dataSiswaPpdb->no_hp, '0') }}" class="text-decoration-none">{{ $dataSiswaPpdb->no_hp }}</a></td>
        </tr>
    </table>
    <table class="table table-striped table-sm w-100 tabelsiswa">
        <h4>Data Orang Tua</h4>
        <tr>
            <th style="width:170px">Nama Orang Tua</th>
            <td><b>: </b>{{ $dataSiswaPpdb->namaortu }}</td>
        </tr>
        <tr>
            <th>Alamat Orang Tua  </th>
            <td><b>: </b>{{ $dataSiswaPpdb->alamat }}</td>
        </tr>
        <tr>
            <th>Nomor HP Ortu  </th>
            <td><b>: </b><a href="https://wa.me/62{{ ltrim($dataSiswaPpdb->hportu, '0') }}" class="text-decoration-none">{{ $dataSiswaPpdb->hportu }}</a></td>
        </tr>
    </table>
  </div>
@endsection