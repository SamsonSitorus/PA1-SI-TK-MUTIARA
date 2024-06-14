@extends('layouts.main')

@section('container')

<div class="container-fluid bg-primary mb-5 bac">
    <div
      class="d-flex flex-column align-items-center justify-content-center"
      style="min-height: 200px">
      <h3 class="display-3 font-weight-bold text-white"style="font-family: Bookman Old Style">Fasilitas Kelas</h3>
      <div class="d-inline-flex text-white">
        <p class="m-0"><a class="text-white" href="/">Beranda</a></p>
        <p class="m-0 px-2">/</p>
        <p class="m-0">Fasilitas Kelas</p>
      </div>
    </div>
  </div>
  <div class="container-fluid pt-5 pb-3">
    <div class="container">
      <div class="text-center pb-2">
        <p class="section-title px-5">
          <span class="px-2">Fasilitas Kelas</span>
          <p>Fasilitas Kelas  Menyajikan Informasi lengkap mengenai ruang-ruang kelas yang tersedia,serta Fasilitas pendukung lainnya, sehingga membantu Anda untuk mengetahui kondisi lingkungan belajar yang ada disekolah Kami </p>
        </p>
      </div>
    </div>
    {{-- start fasilitas --}}
    <section id="portfolio" class="portfolio section">
      <div class="container">
        <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
          @foreach ($fasilitas as $key => $fasilitas)
          <div class="col-lg-4 col-md-6 portfolio-item">
            <div class="portfolio-wrap">
              <div class="portfolio-image">
                <img src="{{ asset('fasilitass/' . $fasilitas->image) }}" class="img-fluid" alt="{{ $fasilitas->name }}">
                <div class="portfolio-links">
                  <a href="{{ asset('fasilitass/' . $fasilitas->image) }}" data-gallery="portfolio-gallery" class="portfolio-lightbox" title="{{ $fasilitas->name }}">
                    <i class="fa fa-search"></i>
                  </a>
                </div>
              </div>
              <div class="portfolio-info">
                <h4 style="font-family: Berlin Sans FB Demi">{{ $fasilitas->name }}</h4>
                <a href="{{ route('show5', $fasilitas->id) }}" target="_blank" class="btn btn-primary btn-block">Lihat Selengkapnya</a>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section>
    
    {{-- end fasilitas--}}
  
@endsection