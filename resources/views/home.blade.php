@extends('layouts.templates')
@section('konten')

    <!-- Slide img -->
    <div id="carouselExampleDark" class="gambar carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner" style="margin-top:80px;">
    <div class="carousel-item active" data-bs-interval="5000">
      <img src="/assets/img/pic1.jpeg" class="d-block w-100" alt="/assets/img/pic1.jpeg">
      <div class="carousel-caption d-none d-md-block" style="background-color: rgba(30,30,30,80%); color:white;">
        <h5>Para staf dan guru SMP Darma Bakti</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, nihil.</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="5000">
      <img src="/assets/img/picbg1.jpeg" class="d-block w-100" alt="/assets/img/pic1.jpeg">
      <div class="carousel-caption d-none d-md-block" style="background-color: rgba(30,30,30,80%); color:white;">
        <h5>Sambut 1 Muharram 1441 H, SMP Darma Bakti Gelar Kirab</h5>
        <p>Ratusan siswa dan siswi SMP Darma Bakti bersiap mengikuti kirab.</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="5000">
      <img src="/assets/img/picbg2.jpeg" class="d-block w-100" alt="/assets/img/pic1.jpeg">
      <div class="carousel-caption d-none d-md-block rounded" style="background-color: rgba(30,30,30,80%); color:white;">
        <h5>Sambut 1 Muharram 1441 H, SMP Darma Bakti Gelar Kirab</h5>
        <p>Ketua Yayasan Baitul Mukaromah H. Jaja Jamaludin saat membuka Kegiatan kirab 1 Muharram 1441 Hijriah.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<div class="bagian1">
  <div class="bag-kiri">
    <h3>SMP Darma Bakti</h3>
    <p>SMP DARMA BAKTI adalah salah satu satuan pendidikan dengan jenjang SMP di Harjasari, Kec. Kota Bogor Selatan, Kota Bogor, Jawa Barat. Dalam menjalankan kegiatannya, SMP DARMA BAKTI berada di bawah naungan Kementerian Pendidikan dan Kebudayaan.</p>
    <br>
    <h3>Fasilitas yang disediakan SMP Darma Bakti</h3>
    <p>SMP DARMA BAKTI menyediakan listrik untuk membantu kegiatan belajar mengajar. Sumber listrik yang digunakan oleh SMP DARMA BAKTI berasal dari PLN. SMP DARMA BAKTI menyediakan akses internet yang dapat digunakan untuk mendukung kegiatan belajar mengajar menjadi lebih mudah. Provider yang digunakan SMP DARMA BAKTI untuk sambungan internetnya adalah Telkom Speedy.</p>
    <br>
    <h3>Jam Pembelajaran di SMP Darma Bakti</h3>
    <p>Pembelajaran di SMP DARMA BAKTI dilakukan pada Pagi. Dalam seminggu, pembelajaran dilakukan selama 6 hari.</p>
  </div>
  <div class="bag-kanan">
    <center>
      <img src="/assets/img/pic4.jpg" alt="">
      <p>Gedung SMP Darma Bakti</p>
      <img src="/assets/img/pic6.jpg" alt="">
      <p>Ruang Tata Usaha</p>
    </center>
  </div>
</div>
<!-- beres -->

<div class="datasiswa bg-light pt-5" id="datasiswa">
    <h2 class="text-center">Daftar Siswa PPDB {{ date('Y') }}</h2>
    <div class="table-responsive col-lg-8 m-auto">
        <table class="table table-striped table-sm">
          <form action="/#datasiswa">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Cari Siswa yg sudah terdaftar" name="search" value="{{ request('search') }}"> {{-- value ini berguna untuk menampilkan data search terakhir yg dilakukan, jadi ketika melakukan searching, kata2 searchingnya masih ada di form search --}}
                <button class="btn btn-success" type="submit">Search</button>
            </div>
        </form>
          <thead>
            <tr>
              <th class="text-center" scope="col">No.</th>
              <th scope="col">Nama</th>
              <th scope="col">Tanggal Pendaftaran</th>
              <th class="text-center" scope="col">Status Pendaftaran</th>
            </tr>
          </thead>
          <tbody> 
            @foreach ($datas as $data)
            <tr>
              <td class="text-center">{{ $loop->iteration }}</td>
              <td class="text-start">{{ $data->name }}</td>
              <td>{{ $data->tgl }}</td>
              <td class="text-center">Berhasil</td>
            </tr>
            @endforeach 
          </tbody>
        </table>
        {{ $datas->links() }}

        <p class="lead">Untuk yg sudah terdaftar, <b>Wajib</b> gabung ke grup dibawah ini</p>
        <h3 class="mb-5"><a href="/#datasiswa" class="text-decoration-none">Gabung Grup</a></h3>
      </div>
</div>

@endsection