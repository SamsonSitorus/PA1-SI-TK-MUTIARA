<!-- Footer Start -->
<div class="container-fluid bg-secondary text-white mt-2 py-2 px-sm-1 px-md-2">
  <div class="row pt-5">
    <div class="col-lg-4 col-md-6 mb-5">
      <a href="" class="navbar-brand font-weight-bold text-primary m-0 mb-4 p-0"
        style="font-size: 40px; line-height: 40px">
        <span class="text-white">{{ $title }}</span>
      </a>
      <p>
        Membantu anak didik mengembangkan berbagai potensi yang dimiliki untuk siap memasuki pendidikan dasar melalui
        kegiatan bermain sambil belajar
      </p>
    </div>
    <div class="col-lg-4 col-md-6 mb-5">
      <h3 class="text-primary mb-4" style="font-family: Berlin Sans FB Demi">Lebih Dekat Dengan Kami</h3>
      <div class="d-flex">
        <h4 class="fa fa-map-marker-alt text-primary"></h4>
        <div class="pl-3">
          <h5 class="text-white" style="font-family: Berlin Sans FB Demi">Alamat</h5>
          <p>Jl. Ompu Batu Tahan Siahaan, Balige III, Kec. Balige, Toba, Sumatera Utara 22315</p>
        </div>
      </div>
      <div class="d-flex">
        <h4 class="fa fa-envelope text-primary"></h4>
        <div class="pl-3">
          <h5 class="text-white" style="font-family: Berlin Sans FB Demi">Email</h5>
          <p><a class="text-white mb-2" href="mailto:tkmutiara.balige@gmail.com">tkmutiara.balige@gmail.com</a></p>
        </div>
      </div>
      <div class="d-flex">
        <h4 class="fa fa-phone-alt text-primary"></h4>
        <div class="pl-3">
          <h5 class="text-white"style="font-family: Berlin Sans FB Demi">Telepon</h5>
          <p><a class="text-white mb-2" href="https://wa.me/6281370761438">+62 81370761438</a></p>  
        </div>
      </div>
    </div>

    @if (Request::is('/'))
    <div class="col-lg-4 col-md-6 mb-5">
      <h3 class="text-primary mb-4" style="font-family: Berlin Sans FB Demi">Link Cepat</h3>
      <div class="d-flex flex-column justify-content-start">
        <a class="text-white mb-2" href="/"><i class="fa fa-angle-right mr-2"></i>Beranda</a>
        <a class="text-white mb-2" href="/profil"><i class="fa fa-angle-right mr-2"></i>Profil Sekolah</a>
        <a class="text-white mb-2" href="/fasilitaskelas"><i class="fa fa-angle-right mr-2"></i>fasilitas kelas</a>
        <a class="text-white mb-2" href="/fasilitastaman"><i class="fa fa-angle-right mr-2"></i>fasilitas Taman</a>
        <a class="text-white mb-2" href="/fasilitassekolah"><i class="fa fa-angle-right mr-2"></i>fasilitas Sekolah</a>
        <a class="text-white mb-2" href="/pencapaian"><i class="fa fa-angle-right mr-2"></i>Prestasi</a>
        <a class="text-white mb-2" href="/tentang"><i class="fa fa-angle-right mr-2"></i>Tentang Kami</a>
        <a class="text-white mb-2" href="/pendaftaran"><i class="fa fa-angle-right mr-2"></i>Pendaftaran</a>
      </div>
    </div>
    @else
    <div class="col-lg-4 col-md-6 mb-5">
      <h3 class="text-primary mb-4" style="font-family: Berlin Sans FB Demi">Link Cepat</h3>
      <div class="d-flex flex-column justify-content-start">
        <a class="text-white mb-2" href="/"><i class="fa fa-angle-right mr-2"></i>Beranda</a>
        <a class="text-white mb-2" href="/profil"><i class="fa fa-angle-right mr-2"></i>Profil Sekolah</a>
        <a class="text-white mb-2" href="/fasilitaskelas"><i class="fa fa-angle-right mr-2"></i>fasilitas kelas</a>
        <a class="text-white mb-2" href="/fasilitastaman"><i class="fa fa-angle-right mr-2"></i>fasilitas Taman</a>
        <a class="text-white mb-2" href="/fasilitassekolah"><i class="fa fa-angle-right mr-2"></i>fasilitas Sekolah</a>
        <a class="text-white mb-2" href="/pencapaian"><i class="fa fa-angle-right mr-2"></i>Prestasi</a>
        <a class="text-white mb-2" href="/tentang"><i class="fa fa-angle-right mr-2"></i>Tentang Kami</a>
        <a class="text-white mb-2" href="/pendaftaran"><i class="fa fa-angle-right mr-2"></i>Pendaftaran</a>
      </div>
    </div>
    @endif

  </div>
  <div class="container-fluid pt-5" style="border-top: 1px solid rgba(164, 167, 167) ;">
    <p class="m-0 text-center text-white">
      &copy;
      <a class="text-primary font-weight-bold" href="#">{{ $title }}</a>.
      All Rights Reserved.

      <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
      Designed by
      <a class="text-primary font-weight-bold" href="#">{{ $author }}</a>
    </p>
  </div>
</div>
<!-- Footer End -->
