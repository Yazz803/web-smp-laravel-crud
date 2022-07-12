@extends('dashboard.layouts.main')

@section('container')

<main class="form-signin col-lg-6 m-auto">
    <form method="POST" action="/dashboard/datasiswa/{{ $dataSiswaPpdb->nisn }}">
        @method('put')
        @csrf
    <h1 class="h3 mb-3 fw-normal text-center mt-4"><strong>Pendaftaran PPDB</strong></h1>

    <h5 class="mb-2 mt-1 fw-normal text-light">1. Data Calon Siswa</h5>

        {{-- tanggal --}}
        {{ date_default_timezone_set('Asia/Jakarta') }}
        <input type="hidden" name="tgl" value="{{ date('d F Y H:i T') }}">

    <div class="form-floating">
        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" id="floatingInput" placeholder="Nama Lengkap" value="{{ old('name', $dataSiswaPpdb->name) }}" required>
        <label for="floatingInput">Nama Lengkap</label>
        @error('name')
        <div class="invalid-feedback mb-4">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-floating">
        <select name="kelamin" class="mb-2 py-2 px-2 @error('kelamin') is-invalid @enderror" style="border-radius: 5px;" id="kelamin">
            @if(old('kelamin', $dataSiswaPpdb->kelamin) == $dataSiswaPpdb->kelamin)
            <option value="{{ $dataSiswaPpdb->kelamin }}" selected>{{ $dataSiswaPpdb->kelamin }}</option>
            <option value="Laki-Laki">Laki-Laki</option>
            <option value="Perempuan">Perempuan</option>
            @endif
        </select>
        {{-- <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" id="floatingInput" placeholder="Nama Lengkap" value="{{ old('name') }}" required> --}}
        @error('kelamin')
        <div class="invalid-feedback mb-4">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-floating">
        <input type="number" name="nisn" id="nisn" class="form-control @error('nisn') is-invalid @enderror" id="floatingPassword" placeholder="Password" value="{{ old('nisn', $dataSiswaPpdb->nisn) }}" required>
        <label for="floatingPassword">NISN</label>
        @error('nisn')
        <div class="invalid-feedback mb-4">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-floating">
        <input type="number" name="nik" id="nik" class="form-control @error('nik') is-invalid @enderror" id="floatingPassword" placeholder="Password" value="{{ old('nik', $dataSiswaPpdb->nik) }}" required>
        <label for="floatingPassword">NIK</label>
        @error('nik')
        <div class="invalid-feedback mb-4">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-floating">
        <input type="text" name="asalsekolah" id="asalsekolah" class="form-control @error('asalsekolah') is-invalid @enderror" id="floatingPassword" placeholder="Password" value="{{ old('asalsekolah', $dataSiswaPpdb->asalsekolah) }}" required>
        <label for="floatingPassword">Asal Sekolah</label>
        @error('asalsekolah')
        <div class="invalid-feedback mb-4">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-floating">
        <input type="text" name="lahir" id="lahir" class="form-control @error('lahir') is-invalid @enderror" id="floatingPassword" placeholder="Password" value="{{ old('lahir', $dataSiswaPpdb->lahir) }}" required>
        <label for="floatingPassword">Tempat / Tgl Lahir</label>
        @error('lahir')
        <div class="invalid-feedback mb-4">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-floating">
        <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Password"value="{{ old('email', $dataSiswaPpdb->email) }}" required>
        <label for="floatingPassword">Email Aktif</label>
        @error('email')
        <div class="invalid-feedback mb-4">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-floating">
        <input type="number" name="no_hp" id="no_hp" class="form-control @error('no_hp') is-invalid @enderror" id="floatingPassword" placeholder="Password" value="{{ old('no_hp', $dataSiswaPpdb->no_hp) }}" required>
        <label for="floatingPassword">No. HP / WhatsApp</label>
        @error('no_hp')
        <div class="invalid-feedback mb-4">{{ $message }}</div>
        @enderror
    </div>

    <h5 class="mb-2 mt-5 fw-normal text-light">2. Data Orang Tua</h5>
    <div class="form-floating">
        <input type="text" name="namaortu" id="namaortu" class="form-control @error('namaortu') is-invalid @enderror" id="floatingPassword" placeholder="Password" value="{{ old('namaortu', $dataSiswaPpdb->namaortu) }}" required>
        <label for="floatingPassword">Nama Orang Tua / Wali</label>
        @error('namaortu')
        <div class="invalid-feedback mb-4">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-floating">
        <input type="text" name="alamat" id="alamat" class="form-control @error('alamat') is-invalid @enderror" id="floatingPassword" placeholder="Password" value="{{ old('alamat', $dataSiswaPpdb->alamat) }}" required>
        <label for="floatingPassword">Alamat Orang Tua / Wali</label>
        @error('alamat')
        <div class="invalid-feedback mb-4">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-floating">
        <input type="number" name="hportu" id="hportu" class="form-control @error('hportu') is-invalid @enderror" id="floatingPassword" placeholder="Password" value="{{ old('hportu', $dataSiswaPpdb->hportu) }}" required>
        <label for="floatingPassword">Nomor HP/WA Orang Tua / Wali</label>
        @error('hportu')
        <div class="invalid-feedback mb-4">{{ $message }}</div>
        @enderror
    </div>

    <button class="w-100 btn btn-lg btn-success mt-4" type="submit">Ubah Data</button>
    </form>
</main>

@endsection