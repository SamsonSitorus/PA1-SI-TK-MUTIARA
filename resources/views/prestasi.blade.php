@extends('layouts.main')

@section('container')
<div class="container-fluid bg-primary mb-5">
    <div
      class="d-flex flex-column align-items-center justify-content-center"
      style="min-height: 240px"
    >
      <h3 class="display-3 font-weight-bold text-white"style="font-family: Bookman Old Style">Prestasi</h3>
      <div class="d-inline-flex text-white">
        <p class="m-0"><a class="text-white" href="/">Beranda</a></p>
        <p class="m-0 px-2">/</p>
        <p class="m-0">Prestasi</p>
    </div>
      </div>
    </div>
  </div>
  <div class="container-fluid pt-5 pb-3">
    <div class="container">
      <div class="text-center pb-2">
        <p class="section-title px-5">
          <span class="px-2">Prestasi Kami</span>
        </p>
        <p>Prestasi merupakan suatu hasil yang telah dicapai sebagai bukti usaha yang telah dilakukan.
           Walalupun sekolah ini masih muda dan berkembang tetapi Dalam hal prastasi TK Mutiara
             tidak kalah dengan sekolah – sekolah maju yang lainnya dan lebih dahulu berdirinya,
             beberapa prestasi yang membanggakan di sekolah kami sudah tercatat di tingkat Kecamatan Prestasi – prestasi tersebut 
             adalah hasil kerja keras seluruh komponen sekolah sehingga hasilnya yang memuaskan. 
             Tapi bukan berarti kita hanya sampai sini dan berpuas diri dan berbangga hati, 
             kami akan terus mengukir prestasi lain yang membanggakan sehingga kami semakin 
             berpacu demi terwujudnya visi misi sekolah kami.</p>
      </div>
    </div>
    {{-- prestasi start --}}
    <div class="container my-5">      
      <div class="row justify-content-center">
          @foreach ($prestasis as $prestasi)
          <div class="col-md-6 col-lg-4 mb-4">
              <div class="card shadow-sm h-100">
                  @if ($prestasi->image)
                  <img src="{{ asset('prestasii/' . $prestasi->image) }}" class="card-img-top" alt="Gambar prestasi" style="height: 380px; object-fit: cover;">
                  @else
                  <div class="card-img-top bg-light d-flex align-items-center justify-content-center" style="height: 200px;">
                      <p class="text-muted mb-0">Tidak ada gambar</p>
                  </div>
                  @endif
                  <div class="card-body d-flex flex-column">
                      <h4 class="card-title" style="font-family: Berlin Sans FB Demi">{{ $prestasi->title }}</h4>
                      <a href="{{ route('prestasi.show', $prestasi->id) }}" target="_blank" class="mt-auto btn btn-primary">Lihat Detail</a>
                  </div>
                  <div class="card-footer text-muted">
                      <small>{{ $prestasi->name }}</small>
                    <small>
                        {{ Carbon\Carbon::parse($prestasi->date)->format('d M Y') }}  
                      </small>
                  </div>
              </div>
          </div>
          @endforeach
      </div>
  </div>
  {{-- prestasi end --}}
@endsection