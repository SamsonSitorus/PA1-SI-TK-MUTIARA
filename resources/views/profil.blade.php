@extends('layouts.main')

@section('container')

<div class="container-fluid bg-primary mb-5">
    <div
      class="d-flex flex-column align-items-center justify-content-center"
      style="min-height: 200px" >
      <h3 class="display-3 font-weight-bold text-white" style="font-family: Bookman Old Style">Profil</h3>
      <div class="d-inline-flex text-white">
        <p class="m-0"><a class="text-white" href="/">Beranda</a></p>
        <p class="m-0 px-2">/</p>
        <p class="m-0">Profil</p>
      </div>
    </div>
  </div>
  <div class="container-fluid pt-5 pb-3">
    <div class="container">
      <div class="text-center pb-2">
        <p class="section-title px-5">
          <span class="px-2">Profil Kami</span>
        </p>
      </div>
    </div>
  

  <!-- Sambutan start -->
<div class="container-xxl py-5">
  <div class="container">
      <div class="row g-5 align-items-center">
          <div class="col-lg-auto" data-aos="fade-up" data-aos-delay="100">
              <div class="position-relative">
                  <figure>
                      <img class=" rounded" src="{{ asset('img/picture1.jpg') }}" alt="School Picture" style="object-fit: cover;">
                      <figcaption class="position-absolute bottom-0 start-0 p-2 bg-primary text-white">Risma Siahaan,S.pd </figcaption>
                  </figure>
              </div>
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
              <h1 class="mb-4" style="font-family: Berlin Sans FB Demi">Sambutan Ketua Yayasan</h1>
              <p class="mb-4">Puji syukur kita panjatkan kepada Tuhan yang Maha Kuasa, atas berkat dan rahmat-Nya, akhirnya website TK Swasta Mutiara Balige telah diperbarui. Selamat datang kami ucapkan di website TK Swasta Mutiara Balige yang ditujukan kepada seluruh masyarakat untuk mengakses informasi, fasilitas, dan profil mengenai sekolah kami.</p>
              <p class="mb-4">Saya harap, melalui website ini, menjadi wahana interaksi positif antar civitas akademik dan pihak masyarakat, untuk mendidik anak dari segi ilmu dan karakter untuk kemajuan bangsa.</p>
              <div class="row gy-2 gx-4 mb-4">
                  <div class="col-sm-6 d-flex align-items-center">
                      <small class="fa fa-star text-primary me-1"></small>
                      <small class="fa fa-star text-primary me-1"></small>
                      <small class="fa fa-star text-primary me-1"></small>
                      <small class="fa fa-star text-primary me-1"></small>
                      <small class="fa fa-star text-primary"></small>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

  
<!-- sambutan end --> 

<!-- visi misi start-->
<div class="container-fluid pt-5 pb-3">
  <div class="container">
  </div>
  <div class="container">
    <div class="content-wrapper">
      <div class="right-side">
        <div class="right-side-content">
          <h1 style="font-family: Berlin Sans FB Demi">Visi</h1>
          <ul>
            <li>Menjadi pusat pendidikan dan pengajaran yang mengembangkan siswa menjadi pribadi yang mandiri, berbudi pekerti, mempunyai keterampilan hidup (life skills), dan rasa cinta terhadap tanah air.</li>
          </ul>
        </div>
        <div class="right-side-content">
        <h1 style="font-family: Berlin Sans FB Demi">Tujuan</h1>
        <ul>
          <li>Memajukan pendidikan, pengajaran, dan kebudayaan.</li>
          <li>Membantu Pemerintah dan Masyarakat dalam usaha memajukan dan mengembangkan pendidikan, pengajaran, dan kebudayaan.</li>
        </ul>
        </div>
      </div>
      <div class="left-side">
        <div class="left-side-content">
          <h1 style="font-family: Berlin Sans FB Demi">Misi</h1>
          <ul>
            <li>Memberikan pendidikan kepada siswa berlandaskan kurikulum nasional yang lebih disempurnakan sesuai dengan tahap perkembangan dan gaya belajar siswa.</li>
            <li>Mendasarkan diri pada cinta kasih dalam nilai-nilai kebangsaan.</li>
            <li>Memberikan suasana positif bagi siswa, agar mereka berkembang menjadi siswa yang cinta Tuhan, cinta Negara, cinta pengetahuan, cinta sesama, mandiri dan ceria.</li>
            <li>Menjalin kerjasama dengan orang tua/wali sebagai mitra utama dalam upaya memaksimalkan proses tumbuh kembang siswa.</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- visi misi end -->
{{-- start sejarah --}}
<section id="sejarah" >
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-10">
        <h2 class="text-center mb-4" style="font-family: Berlin Sans FB Demi">Sejarah Lembaga Pendidikan Mutiara Balige</h2>
        <div class="timeline">
          <div class="timeline-item">
            <div class="timeline-icon">
              <i class="fas fa-building"></i>
            </div>
            <div class="timeline-content">
              <h4 style="font-family: Berlin Sans FB Demi">Berdiri Tahun 2007</h4>
              <p>Lembaga Pendidikan Mutiara Balige didirikan pada tahun 2007 dengan dasar hukum berupa Akta Notaris HERMIN SIANIPAR, S.H., yang tercatat dalam Nomor 19 pada tanggal 7 Agustus 2007. Lembaga ini terletak di Jalan Ompu Batu Tahan Siahaan, yang sebelumnya dikenal dengan nama Jalan Dr. I.L. Nommensen, Nomor 25, Kelurahan Balige III, Kecamatan Balige, Kabupaten Toba Samosir, Provinsi Sumatera Utara.</p>
            </div>
          </div>
          <div class="timeline-item">
          <div class="timeline-item">
            <div class="timeline-icon">
              <i class="fas fa-chart-line"></i>
            </div>
            <div class="timeline-content">
              <h4 style="font-family: Berlin Sans FB Demi">Perkembangan dan Adaptasi</h4>
              <p>Dengan berjalannya waktu, Lembaga Pendidikan Mutiara Balige terus berkembang dan beradaptasi sesuai dengan perkembangan zaman, tetap berpegang teguh pada nilai-nilai dan visi yang telah ditetapkan sejak awal pendiriannya. Komitmen terhadap pendidikan berkualitas diwujudkan melalui peningkatan kurikulum yang selaras dengan standar internasional dan metode pengajaran yang inovatif. Integrasi teknologi dalam pembelajaran, seperti penggunaan smartboard dan pembelajaran jarak jauh, memastikan siswa tetap mendapatkan pendidikan terbaik.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
{{-- end sejarah --}}


  {{-- akreditasi start --}}
  <section id="akreditasi">
    @foreach ($akreditasis as $key => $akreditasi)
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h2 class="mb-4" style="font-family: Berlin Sans FB Demi">Akreditasi TK Mutiara Balige</h2>
          <p class="text-muted text-justify">
            TK Mutiara Balige dengan bangga mengumumkan bahwa Sekolah ini telah meraih akreditasi dengan predikat <span class="badge badge-success">{{ $akreditasi->grade }}</span>,
            yang diberikan oleh {{ $akreditasi->pihak }}. 
            Pencapaian ini diperoleh dengan nilai <span class="badge badge-primary">{{ $akreditasi->total }}</span> Pada
            ({{ $akreditasi->date }}).
            yang merupakan hasil dari kerja keras dan dedikasi seluruh tim pengajar
            dan staf sekolah dalam menjaga standar pendidikan yang tinggi. 
            Akreditasi ini tidak hanya mencerminkan kualitas pendidikan yang diberikan oleh TK Mutiara Balige, 
            tetapi juga komitmen sekolah untuk terus meningkatkan mutu pengajaran, 
            fasilitas, dan program pembelajaran sesuai dengan kebutuhan dan perkembangan zaman. 
            Dengan akreditasi ini, TK Mutiara Balige bertekad untuk terus berinovasi dan memberikan pendidikan 
            terbaik bagi anak-anak didiknya, membekali mereka dengan fondasi yang kuat untuk masa depan yang cerah.
          </p>
        </div>
        <div class="col-md-6">
          <div class="progress-section">
            <span>Nilai Standar Isi</span>
            <div class="progress mb-3">
              <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" style="width: {{ $akreditasi->nilai_isi }}%;" aria-valuenow="{{ $akreditasi->nilai_isi }}" aria-valuemin="0" aria-valuemax="100">{{ $akreditasi->nilai_isi }}/100</div>
            </div>
            <span>Nilai Standar Kelulusan</span>
            <div class="progress mb-3">
              <div class="progress-bar bg-danger progress-bar-striped progress-bar-animated" role="progressbar" style="width: {{ $akreditasi->nilai_kelulusan }}%;" aria-valuenow="{{ $akreditasi->nilai_kelulusan }}" aria-valuemin="0" aria-valuemax="100">{{ $akreditasi->nilai_kelulusan }}/100</div>
            </div>
            <span>Nilai Standar Proses</span>
            <div class="progress mb-3">
              <div class="progress-bar bg-warning progress-bar-striped progress-bar-animated" role="progressbar" style="width: {{ $akreditasi->nilai_proses }}%;" aria-valuenow="{{ $akreditasi->nilai_proses }}" aria-valuemin="0" aria-valuemax="100">{{ $akreditasi->nilai_proses }}/100</div>
            </div>
            <span>Nilai Standar Pendidikan</span>
            <div class="progress mb-3">
              <div class="progress-bar bg-info progress-bar-striped progress-bar-animated" role="progressbar" style="width: {{ $akreditasi->nilai_pendidikan }}%;" aria-valuenow="{{ $akreditasi->nilai_pendidikan }}" aria-valuemin="0" aria-valuemax="100">{{ $akreditasi->nilai_pendidikan }}/100</div>
            </div>
            <span>Nilai Standar Sarana Prasarana</span>
            <div class="progress mb-3">
              <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" style="width: {{ $akreditasi->nilai_prasarana }}%;" aria-valuenow="{{ $akreditasi->nilai_prasarana }}" aria-valuemin="0" aria-valuemax="100">{{ $akreditasi->nilai_prasarana }}/100</div>
            </div>
            <span>Nilai Standar Pengelolaan</span>
            <div class="progress mb-3">
              <div class="progress-bar bg-danger progress-bar-striped progress-bar-animated" role="progressbar" style="width: {{ $akreditasi->nilai_pengelola }}%;" aria-valuenow="{{ $akreditasi->nilai_pengelola }}" aria-valuemin="0" aria-valuemax="1000">{{ $akreditasi->nilai_pengelola }}/100</div>
            </div>
            <span>Nilai Standar Sarana Pembiayaan</span>
            <div class="progress mb-3">
              <div class="progress-bar bg-warning progress-bar-striped progress-bar-animated" role="progressbar" style="width: {{ $akreditasi->nilai_pembiayaan }}%;" aria-valuenow="{{ $akreditasi->nilai_pembiayaan }}" aria-valuemin="0" aria-valuemax="100">{{ $akreditasi->nilai_pembiayaan }}/100</div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </section>  
{{-- akreditasi end --}}
@endsection
