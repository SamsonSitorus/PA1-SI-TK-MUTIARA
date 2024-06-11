@extends('layouts.main')

@section('container')
<!-- Carousel Wrapper -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Carousel Content -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('img/bg1cop.jpg') }}" alt="Gambar 1" class="d-block w-100">
      <div class="carousel-caption">
        <h1 class="display-3 text-white animated slideInDown" style="font-family: Bookman Old Style">Keceriaan di Setiap Langkah!</h1>
        <br>
          <!-- Search Container -->
      <div class="search-container">
        <input type="text" id="searchInput1" placeholder="Search...">
        <button onclick="searchCarousel()">Search</button>
    </div>
        <p class="fs-5 text-white mb-4 pb-2">Mendidik Anak Dengan Semangat Cinta Kasih.</p>
      </div>
    <script>
        function searchCarousel() {
            var query = document.getElementById('searchInput1').value;
            window.location.href = '/search?query=' + encodeURIComponent(query);
        }
    </script>
    
    </div>
    <div class="carousel-item">
      <img src="{{ asset('img/bg.jpg') }}" alt="Gambar 2" class="d-block w-100">
      <div class="carousel-caption">
        <h1 class="display-3 text-white animated slideInDown"style="font-family: Bookman Old Style">Keceriaan di Setiap Langkah!</h1>
        <br>
        <p class="fs-5 text-white mb-4 pb-2">Mendidik Anak Dengan Semangat Cinta Kasih.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ asset('img/taman.jpg') }}" alt="Gambar 3" class="d-block w-100">
      <div class="carousel-caption">
        <h1 class="display-3 text-white animated slideInDown"style="font-family: Bookman Old Style">Keceriaan di Setiap Langkah!</h1>
        <br>
        <p class="fs-5 text-white mb-4 pb-2">Mendidik Anak Dengan Semangat Cinta Kasih.</p>
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="carousel-prev" href="#myCarousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-next" href="#myCarousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

 <!-- service start-->
 <div class="container-xxl py-5">
  <div class="container">
    <div class="row g-4">
      <div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-delay="100">
        <div class="service-item text-center pt-3">
          <div class="p-4">
            <i class="fa fa-3x fa-graduation-cap text-primary mb-4"></i>
            <h5 class="mb-3"style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Pendidikan Berkualitas</h5>
            <p class="mb-4 fixed-height">Metode pengajaran yang inovatif dan interaktif</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-delay="300">
        <div class="service-item text-center pt-3">
          <div class="p-4">
            <i class="fa fa-3x fa-sign-language text-primary mb-4"></i>
            <h5 class="mb-3"style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Pendidikan <br>Berahlak</h5>
            <p class="mb-4 fixed-height">Menekankan nilai kejujuran, tanggung jawab dan disiplin</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-delay="500">
        <div class="service-item text-center pt-3">
          <div class="p-4">
            <i class="fa fa-3x fa-home text-primary mb-4"></i>
            <h5 class="mb-3"style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Pendidikan Berketuhanan</h5>
            <p class="mb-4 fixed-height">Mengintegrasikan ajaran agama dan nilai ketuhanan</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-delay="700">
        <div class="service-item text-center pt-3">
          <div class="p-4">
            <i class="fa fa-3x fa-tv   text-primary mb-4"></i>
            <h5 class="mb-3"style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Pendidikan Berteknologi</h5>
            <p class="mb-4 fixed-height">Memanfaatkan teknologi sebagai media belajar</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Service End -->

  <!-- Foto Start -->
  <div class="section-foto parallax">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-5" data-aos="fade-down" data-aos-delay="100">
            <div class="d-flex align-items-center">
                <div class="stripe-putih me-2"></div>
                <h5 class="fw-bold text-white">Kegiatan</h5>
            </div>
        </div>
        <div class="row g-3">
            <div class="col-lg-12">
                <div class="row g-3">
                    <div class="col-lg-6 col-md-12">
                        <video width="100%" controls>
                            <source src="{{ asset('img/video.mp4') }}" type="video/mp4">
                        </video>        
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <video width="100%" controls>
                          <source src="{{ asset('img/video1.mp4') }}" type="video/mp4">
                      </video>    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

  <!-- Foto end -->
  
  <!-- GalleryStart -->
<div class="container-xxl py-5">
  <div class="container">
      <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
          <h1 class="mb-5" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Popular Gallery</h1>
      </div>
      <div id="galleryCarousel" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
              @foreach ($galleries->chunk(3) as $key => $galleryChunk)
                  <div class="carousel-item @if($key == 0) active @endif">
                      <div class="row">
                          @foreach ($galleryChunk as $gallery)
                              <div class="col-lg-4 col-md-6 mb-4">
                                  <div class="course-item bg-light position-relative">
                                      <div class="overflow-hidden position-relative">
                                          @if ($gallery->image)
                                              <img class="img-fluid" src="{{ asset('galleryy/' . $gallery->image) }}" alt="{{ $gallery->title }}">
                                              <a href="{{ asset('galleryy/' . $gallery->image) }}" title="{{ $gallery->title }}" data-gallery="portfolio-gallery-app" class="glightbox preview-link">
                                                  <i class="fa fa-search icon-overlay"></i>
                                              </a>
                                          @else
                                              <span class="text-muted">Tidak ada gambar</span>
                                          @endif
                                      </div>
                                      <div class="text-center p-4 pb-0">
                                          <h3 style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif" class="mb-0">{{ $gallery->title }}</h3>
                                          <div class="mb-3">
                                              <small class="fa fa-star text-primary"></small>
                                              <small class="fa fa-star text-primary"></small>
                                              <small class="fa fa-star text-primary"></small>
                                              <small class="fa fa-star text-primary"></small>
                                              <small class="fa fa-star text-primary"></small>
                                          </div>
                                          <p class="mb-4 fixed-height">{{ Str::limit($gallery->content, 50) }}</p>
                                      </div>
                                      <div class="d-flex border-top">
                                          <small class="flex-fill text-center border-end py-2">
                                              <a href="{{ $gallery->url }}" class="text-decoration-none text-primary">
                                                  <i class="fa fa-random"></i> See
                                              </a>
                                          </small>
                                          <small class="flex-fill text-center border-end py-2">
                                              <a href="/pendaftaran" class="text-decoration-none text-primary">
                                                  <i class="fa fa-tty text-primary me-2"></i>Join
                                              </a>  
                                          </small>  
                                      </div>
                                  </div>
                              </div>
                          @endforeach
                      </div>
                  </div>
              @endforeach
          </div>
          <a class="carousel-control-prev" href="#galleryCarousel" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#galleryCarousel" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
          </a>
      </div>

      <!-- Navigasi Paginasi -->
      <div class="d-flex justify-content-center mt-4">
          {{ $galleries->links() }}
      </div>
  </div>
</div>
  <!-- Gallery End -->

@endsection

@push('scripts')
<script src="{{ asset('js/js.js') }}"></script>
<script src="{{ asset('js/search.js') }}"></script>
@endpush
