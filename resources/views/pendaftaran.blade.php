@extends('layouts.main')

@section('container')
    <div class="container-fluid bg-primary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 200px">
            <h3 class="display-3 font-weight-bold text-white"style="font-family: Bookman Old Style">Pendaftaran</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0"><a class="text-white" href="/">Beranda</a></p>
                <p class="m-0 px-2">/</p>
                <p class="m-0">Pendaftaran</p>
            </div>
        </div>
    </div>
    <div class="container-fluid pt-5 pb-3">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5">
                    <span class="px-2">Pendaftaran </span>
                </p>
            </div>
        </div>
        <div style="text-align: center;">
            <p id="typing-text" style="font-size: 1.1em;"></p>
        </div>
        <div class="text-center pb-2">
            {{-- <h2 class="mb-3">Pengumuman</h2> --}}
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Deskripsi</th>
                        <th>File</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pengumumans as $pengumuman)
                        <tr class="announcement drop-in" style="transition-delay: {{ 0.5 + $loop->index * 0.1 }}s;">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $pengumuman->title }}</td>
                            <td>{{ Str::limit($pengumuman->content, 650) }}</td>
                            <td>
                                @if ($pengumuman->file)
                                    <a href="{{ asset('pengumuman_files/' . $pengumuman->file) }}" target="_blank">Lihat File</a>
                                @else
                                    -
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- Registration Requirements Section -->
        <div class="pb-4 mt-5">
            <h2 class="mb-3 text-center animate_animated animate_fadeInDown" style="font-family: Berlin Sans FB Demi;">
                Syarat-Syarat Pendaftaran
            </h2>
            <div class="flex-container">
                <div class="requirement flex-item animate_animated animate_fadeInLeft" style="animation-delay: 0.1s;">
                    <h4 class="mb-3 center-text" style="font-family: Berlin Sans FB Demi;">
                        ~ Mengisi formulir pendaftaran yang telah disediakan ~
                    </h4>
                    <p class="mb-3 center-text">Pihak Sekolah menyediakan Formulir Pendaftaran, berikut contoh:</p>
                    <a href="{{ asset('img/formulir.jpg') }}" data-lightbox="requirement" data-title="Formulir Pendaftaran">
                        <i class="fa fa-file-image" aria-hidden="true"></i> Formulir Pendaftaran
                    </a>
                </div>
                <div class="requirement flex-item animate_animated animate_fadeInRight" style="animation-delay: 0.2s;">
                    <h4 class="mb-3 center-text" style="font-family: Berlin Sans FB Demi;">
                        ~ Menyerahkan fotokopi akta kelahiran ~
                    </h4>
                    <p class="mb-3 center-text">Fotokopi Akta Kelahiran sebanyak 2 (dua) Lembar, berikut Contoh:</p>
                    <a href="{{ asset('img/akta.jpg') }}" data-lightbox="requirement" data-title="Akta Lahir">
                        <i class="fa fa-file-image" aria-hidden="true"></i> Akta Lahir
                    </a>
                </div>
                <div class="requirement flex-item animate_animated animate_fadeInLeft" style="animation-delay: 0.3s;">
                    <h4 class="mb-3 center-text" style="font-family: Berlin Sans FB Demi;">
                        ~ Menyerahkan fotokopi Kartu Keluarga (KK) ~
                    </h4>
                    <p class="mb-3 center-text">Contoh:</p>
                    <a href="{{ asset('img/kk.jpg') }}" data-lightbox="requirement" data-title="Kartu Keluarga">
                        <i class="fa fa-file-image" aria-hidden="true"></i> Kartu Keluarga
                    </a>
                </div>
                <div class="requirement flex-item animate_animated animate_fadeInRight" style="animation-delay: 0.4s;">
                    <h4 class="mb-3 center-text" style="font-family: Berlin Sans FB Demi;">
                        ~ Pas foto ~
                    </h4>
                    <p class="mb-3 center-text">Pas Foto yang diminta berukuran 3x4 sebanyak 2 lembar, Contoh:</p>
                    <a href="{{ asset('img/paspoto.jpg') }}" data-lightbox="requirement" data-title="Pas Foto">
                        <i class="fa fa-file-image" aria-hidden="true"></i> Pas Foto
                    </a>
                </div>
            </div>
        </div>


        <!-- Include JavaScript for Lightbox -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        </body>

        </html>


        <!-- Registration Process Flow Section -->
        <div class="text-center pb-2 mt-4">
            <h2 class="mb-3"style="font-family: Berlin Sans FB Demi">Alur Pendaftaran</h2>
        </div>
        <div class="container-fluid pt-5 pb-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div style="text-align: center;">
                            <div class="requirement drop-in left">
                                <h4 class="mb-3"style="font-family: Berlin Sans FB Demi">1. Persiapkan Dokumen</h4>
                                <p>Persiapkan semua dokumen yang diperlukan sesuai dengan syarat-syarat pendaftaran.</p>
                                <p><i class="fas fa-arrow-right"></i></p>
                            </div>
                            <div class="requirement drop-in left">
                                <h4 class="mb-3"style="font-family: Berlin Sans FB Demi">3. Isi Formulir</h4>
                                <p>Isi formulir pendaftaran dengan lengkap dan benar.</p>
                                <p><i class="fas fa-arrow-right"></i></p>
                            </div>
                            <div class="requirement drop-in left">
                                <h4 class="mb-3"style="font-family: Berlin Sans FB Demi">5. Proses Verifikasi</h4>
                                <p>Tunggu proses verifikasi dan konfirmasi dari pihak sekolah.</p>
                                <p><i class="fas fa-arrow-right"></i></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-5">
                        <div style="text-align: center;">
                            <div class="requirement drop-in right">
                                <h4 class="mb-3"style="font-family: Berlin Sans FB Demi">2. Ambil Formulir</h4>
                                <p>Kunjungi sekolah kami untuk mengambil formulir pendaftaran.</p>
                                <p><i class="fas fa-arrow-left"></i></p>
                            </div>
                            <div class="requirement drop-in right">
                                <h4 class="mb-3"style="font-family: Berlin Sans FB Demi">4. Serahkan Dokumen</h4>
                                <p>Serahkan formulir pendaftaran beserta dokumen pendukung ke kantor pendaftaran sekolah.
                                </p>
                                <p><i class="fas fa-arrow-left"></i></p>
                            </div>
                            <div class="requirement drop-in right">
                                <h4 class="mb-3"style="font-family: Berlin Sans FB Demi">6. Konfirmasi Penerimaan</h4>
                                <p>Jika diterima, ikuti petunjuk selanjutnya untuk proses selanjutnya.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                        observer.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.1
            });

            document.querySelectorAll('.flex-item').forEach(item => {
                observer.observe(item);
            });
        });
    </script>
    <!-- Include Bootstrap JavaScript for Modal functionality -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"></script>
@endsection
