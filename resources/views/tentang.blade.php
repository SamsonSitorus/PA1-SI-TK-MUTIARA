@extends('layouts.main')

@section('container')
<div class="container-fluid bg-primary mb-5">
    <div
      class="d-flex flex-column align-items-center justify-content-center"
      style="min-height: 240px"
    >
      <h3 class="display-3 font-weight-bold text-white"style="font-family: Bookman Old Style">Tentang Kami</h3>
      <div class="d-inline-flex text-white">
        <p class="m-0"><a class="text-white" href="/">Beranda</a></p>
        <p class="m-0 px-2">/</p>
        <p class="m-0">Tentang Kami</p>
      </div>
    </div>
  </div>
  <div class="container-fluid pt-5 pb-3">
    <div class="container">
      <div class="text-center pb-2">
        <p class="section-title px-5">
          <span class="px-2">Tentang Kami</span>
        </p>
      </div>
    </div>
     
{{-- start jumlah siswa --}}
<div class="wrapper">
  @foreach ($jumlahSiswas as $key => $jumlahSiswa)
  <div class="containerr">
   <i class="fa fa-users" aria-hidden="true" style=" font-size:44px;"></i>
    <span class="num" data-val="{{ $jumlahSiswa->kelasA }}">000</span>
    <span class="text">Jumlah Siswa Kelas<br>Kecil</span>
  </div>
  <div class="containerr">
   <i class="fa fa-users" aria-hidden="true" style=" font-size:44px;"></i>
    <span class="num" data-val="{{ $jumlahSiswa->kelasB }}">000</span>
    <span class="text">Jumlah Siswa Kelas <br>Melati</span>
  </div>
  <div class="containerr">
   <i class="fa fa-users" aria-hidden="true" style=" font-size:44px;"></i>
    <span class="num" data-val="{{ $jumlahSiswa->kelasC }}">000</span>
    <span class="text">Jumlah Siswa Kelas <br>Tulip</span>
  </div>
  <div class="containerr">
   <i class="fa fa-users" aria-hidden="true" style=" font-size:44px;"></i>
    <span class="num" data-val="{{ $jumlahSiswa->kelasD }}">000</span>
    <span class="text">Jumlah Siswa Kelas <br>Anggrek</span>
  </div>
  <div class="containerr">
   <i class="fa fa-users" aria-hidden="true" style=" font-size:44px;"></i>
    <span class="num" data-val="{{ $jumlahSiswa->kelasE }}">000</span>
    <span class="text">Jumlah Siswa Kelas <br>Ros</span>
  </div>
  @endforeach
</div>
{{-- end jumlah siswa --}}

    {{-- start guru --}}
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
          <div class="container">
              <div class="text-center" data-aos="fade-up">
                  <h1 class="mb-5"style="font-family: Berlin Sans FB Demi">Guru Kami</h1>
                  <p class="mb-5">Kami memiliki tim guru TK terlatih yang menciptakan lingkungan belajar menyenangkan melalui kegiatan interaktif. Mereka mengembangkan keterampilan dasar, sosial, emosional, dan kognitif anak dengan penuh kesabaran dan kasih sayang. Kami berkomitmen membimbing anak meraih potensi terbaik sebagai bekal kesuksesan masa depan.</p>
              </div>
              <div class="owl-carousel testimonial-carousel position-relative">
                  @foreach ($gurus as $key => $guru)
                      <div class="testimonial-item text-center" data-aos="fade-up" data-aos-delay="{{ $key * 100 }}">
                          <img class="border rounded-circle p-2 mx-auto mb-3" src="{{ asset('guruu/' . $guru->image) }}" style="width: 300px; height: 300px;">
                         
                          {{-- <p>{{ ucfirst($guru->jeniskelamin) }}</p> --}}
                          <div class="testimonial-text bg-light text-center p-4">
                              {{-- <p class="mb-0">{{ $guru->alamat }}</p>
                              <p class="mb-0">{{ $guru->no_telp }}</p> --}}
                              <h5 class="mb-0" style="font-family: Berlin Sans FB Demi">{{ $guru->name }}</h5>
                          </div>
                      </div>
                  @endforeach
              </div>
          </div>
      </div>  
{{-- end guru --}}    

{{-- start lokasi --}}
<div class="container-fluid pt-5 pb-3">
  <div class="container">
      <div class="text-center pb-2">
      </div>
      <!-- Explanation of School Location -->
      <div class="row">
          <div class="col-md-6">
              <h3 style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">Bagaimana Cara Mengunjungi Kami?</h3>
              <p>Taman Kanak-Kanak Swasta Mutiara Balige terletak di Desa Balige III, Kecamatan Balige, hanya beberapa menit dari Danau Toba. Lokasi kami yang strategis memudahkan diakses melalui berbagai moda transportasi.</p>
              <p>Sekolah kami berada di Jl. Ompu Batu Tahan Siahaan yang diapit oleh beberapa fasilitas umum termasuk Angkot Balige . Area ini mudah dijangkau dengan transportasi umum atau kendaraan pribadi.</p>
          </div>
          <div class="col-md-6">
              <!-- Embedded Google Maps Iframe -->
              <div class="d-flex justify-content-center">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3986.5233569772436!2d99.06606077472402!3d2.328714557648458!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302e05acf6d2a7d9%3A0x787c33f5d1b222ab!2sTK%20SWASTA%20MUTIARA%20BALIGE!5e0!3m2!1sen!2sid!4v1717338567953!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
          </div>
      </div>
  </div>
</div>
{{-- end lokasi --}}

@endsection