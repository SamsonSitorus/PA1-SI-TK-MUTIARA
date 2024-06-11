<!-- Navbar Start -->
<div class="container-fluid bg-light position-relative shadow">
  <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0 px-lg-5">
    <a href="" class="navbar-brand font-weight-bold text-secondary" style="font-size: 35px">
      <img class="img-fluid" src="/img/logo.png" alt="TK Mutiara balige" style="width: 60px; height: 60px" />
      <span class="text-primary">{{ $title }}</span>
    </a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
      <div class="navbar-nav font-weight-bold mx-auto py-0">
        <a href="/" class="nav-item nav-link {{ Request::is('/') ? 'active' : '' }}">Beranda</a>
        <a href="/profil" class="nav-item nav-link {{ Request::is('profil') ? 'active' : '' }}">Profil Sekolah</a>
        <div class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Fasilitas</a>
          <div class="dropdown-menu">
            <a href="/fasilitaskelas" class="dropdown-item {{ Request::is('fasilitaskelas') ? 'active' : '' }}">Kelas</a>
            <a href="/fasilitastaman" class="dropdown-item {{ Request::is('fasilitastaman') ? 'active' : '' }}" class="dropdown-item">Taman Bermain</a>
          </div>
        </div>
        <a href="/pencapaian" class="nav-item nav-link {{ Request::is('prestasi') ? 'active' : '' }}">Prestasi</a>
        <a href="/tentang" class="nav-item nav-link {{ Request::is('tentang') ? 'active' : '' }}">Tentang Kami</a>
        <a href="/pendaftaran" class="nav-item nav-link {{ Request::is('pengumuman') ? 'active' : '' }}">Pendaftaran</a>
      </div>
      @auth
      <a target="_blank" href="/dashboard" class="btn btn-primary px-4 mr-2">{{ auth()->user()->username }}</a>
      @else
      <a target="_blank" href="/login" class="btn btn-primary px-4 mr-2">Login</a>
      @endauth
    </div>
  </nav>
</div>
<!-- Navbar End -->
