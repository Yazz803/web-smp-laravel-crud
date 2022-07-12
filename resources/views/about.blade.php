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
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="/assets/img/pic8.jpg" class="d-block w-100" alt="/assets/img/pic1.jpeg">
      <div class="carousel-caption d-none d-md-block" style="background-color: rgba(30,30,30,80%); color:white;">
        <h5>Para staf dan guru SMP Darma Bakti</h5>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, nihil?</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="10000">
      <img src="/assets/img/picbg3.jpg" class="d-block w-100" alt="/assets/img/pic1.jpeg">
      <div class="carousel-caption d-none d-md-block" style="background-color: rgba(30,30,30,80%); color:white;">
        <h5>Outdoor Learing Ke PT. Yakult Indonesia</h5>
        <p>Outdoor learning merupakan kegiatan pembelajaran yang dilaksanakan di luar kelas/sekolah yang memanfaatkan lingkungan sebagai sumber belajar yang utama agar peserta didik mendapatkan kesempatan untuk belajar lebih aktif dengan obyek langsung dan juga nyata</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="/assets/img/pic13.jpg" class="d-block w-100" alt="/assets/img/pic1.jpeg">
      <div class="carousel-caption d-none d-md-block rounded">
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
    <h3>Alamat SMP Darma Bakti</h3>
    <p>SMP DARMA BAKTI beralamat di Jl Raya H.E. Sukma Bakomsari No 44, Harjasari, Kec. Kota Bogor Selatan, Kota Bogor, Jawa Barat, dengan kode pos 16720.</p>
    <br>
    <h3>Akreditasi</h3>
    <p>SMP DARMA BAKTI memiliki akreditasi A, berdasarkan sertifikat 02.00/273/BAP-SM/SK/X/2016</p>
    <br>
    <h3>Visi Misi SMP Darma Bakti</h3>
    <p>Terwujudnya peserta didik berakhlakul karimah dan berprestasi untuk meningkatkan potensi diri secara optimal dengan dilandasi agama</p>
    <ol>
        <li>Mempersiapkan peserta didik bertaqwa kepada Allah SWT</li>
        <li>Melatih peserta didik untuk hidup berakhlakul karimah</li>
        <li>Mempersiapkan peserta didik agar menjadi manusia yang berkepribadian, cerdas, berkualitas dan berprestasi dalam bidang akademik, olahraga, dan seni</li>
        <li>Membekali peserta didik agar memiliki keterampilan teknologi informasi dan komunikasi serta mampu mengembangkan diri secara madniri.</li>
        <li>Menanamkan peserta didik sikap ulet dan gigih dalam berkompetisi, beradaptasi dengan lingkungan dan mengembangkan sikap sportifita</li>
    </ol>
    <h3>Motto SMP Darma Bakti</h3>
    <h4 style="font-family:'Times New Roman', Times, serif;font-weight:bold">INSAN BERIMAN</h4>
    <ul>
        <li>
            <p><b>IN</b>tegristas, <b>SAN</b>tun, <b>B</b>ersih, <b>E</b>lok, <b>R</b>api, <b>I</b>ntelek, <b>M</b>andiri, <b>A</b>gamis, <b>N</b>asionalisme</p>
        </li>
    </ul>

    <!-- 
        Nama Sekolah	: SMP Darma Bakti
NPSN		: 20220398
Kecamatan	: Bogor Selatan
Kota		: Bogor
No. Tlp		: (0251)8292909
Nama Yayasan	: Yayasan Baitul Mukaromah
Nama Kepala Sekolah : Abdul Rahman Amir, S.Kom
Jenjang akreditas :Terakreditasi "A"
Kategori Sekolah : SPM
Tahun Beroperasi : 1990



     -->
     <h3>Informasi Lengkap SMP Darma Bakti</h3>
     <table cellpadding="5" style="width: 100%;" >
        <tr>
            <th>Nama</th>
            <td>SMP Darma Bakti</td>
        </tr>
        <tr>
            <th>NPSN</th>
            <td>20220398</td>
        </tr>
        <tr>
            <th>Alamat</th>
            <td>Jl Raya H.E. Sukma Bakomsari No 44</td>
        </tr>
        <tr>
            <th>Kecamatan</th>
            <td>Bogor Selatan</td>
        </tr>
        <tr>
            <th>Kota</th>
            <td>Kota Bogor</td>
        </tr>
        <tr>
            <th>No.Tlp</th>
            <td>(0251)8292909</td>
        </tr>
        <tr>
            <th>Nama Yayasan</th>
            <td>Yayasan Baitul Mukaromah</td>
        </tr>
        <tr>
            <th>Nama Kepala Sekolah</th>
            <td>Abdul Rahman Amir, S.Kom</td>
        </tr>
        <tr>
            <th>Kategori Sekolah</th>
            <td>SPM</td>
        </tr>
        <tr>
            <th>Tahun Beroperasi</th>
            <td>1990</td>
        </tr>
     </table>
  </div>
</div>

@endsection