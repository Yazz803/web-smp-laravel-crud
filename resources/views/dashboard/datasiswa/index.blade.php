@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center px-4 py-4 border-bottom bg-light">
    <h1 class="h2">List Data Siswa PPDB</h1>

    <form action="/dashboard/datasiswa">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Cari Siswa" name="search" value="{{ request('search') }}"> {{-- value ini berguna untuk menampilkan data search terakhir yg dilakukan, jadi ketika melakukan searching, kata2 searchingnya masih ada di form search --}}
            <button class="btn btn-primary" type="submit">Search</button>
        </div>
    </form>
    @if(session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {!! session('success') !!}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
</div>


<div class="table-responsive w-100 bg-light">
  {{-- untuk membuat/menabahkan pakae --/--/create --}}
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col" class="text-center">No.</th>
          <th scope="col">Name</th>
          <th scope="col">Asal Sekolah</th>
          <th scope="col" class="text-center">NISN</th>
          <th scope="col" class="text-center">Tanggal Pendaftaran</th>
          <th scope="col" class="text-center">No. HP Ortu</th>
          <th scope="col" class="text-center">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($datasiswa as $siswa)   
        <tr>
          <td class="text-center">{{ $loop->iteration }}</td>
          <td>{{ $siswa->name }}</td>
          <td>{{ $siswa->asalsekolah }}</td>
          <td class="text-center">{{ $siswa->nisn }}</td>
          <td class="text-center">{{ $siswa->tgl }}</td>
          <td class="text-center"><a href="https://wa.me/62{{ ltrim($siswa->hportu, '0') }}" target="_blank" class="text-decoration-none">{{ $siswa->hportu }}</a></td>
          <td class="text-center">
            <a href="/dashboard/datasiswa/{{ $siswa->nisn }}" class="badge bg-info"><span data-feather="eye"></span></a>
            {{-- aturan default dari resource nya, jadi setelah nisn-nya itu, dikasi lagi edit --}}
            <a href="/dashboard/datasiswa/{{ $siswa->nisn }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
            <form action="/dashboard/datasiswa/{{ $siswa->nisn }}" method="POST" class="d-inline">
              @method('delete')
              @csrf
              <button class="badge bg-danger border-0" onclick="return confirm('Datanya akan dihapus, Tekan \'Ok\' untuk menghapus data')"><span data-feather="x-circle"></span></button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>

    {{ $datasiswa->links() }}
  </div>
@endsection