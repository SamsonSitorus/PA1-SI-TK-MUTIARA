@extends('dashboard.layouts.main') <!-- Menggunakan layout dashboard -->

@section('container')
<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3"><strong>Data Pengumuman</strong></h1>

        <div class="row">
            <div class="col-12 ">
                <div class="card flex-fill w-100 p-3">
                    <h5 class="card-title mb-3">Daftar Pengumuman</h5>
                    <div class="col-lg-offset-2 col-lg-10">
                        <a href="{{ route('pengumuman.create') }}" class="btn btn-primary mb-3">
                            <i data-feather="plus-circle"></i> Tambah Pengumuman Baru
                        </a>
                        <div>
                            @if(session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif
                        </div>
                    </div>
                    <table class="table table-hover my-0" id="myTable"><br>
                        <thead>
                    <tr>
                        <th>No</th> <!-- Menambahkan nomor urut -->
                        <th>Judul</th>
                        <th>Konten</th>
                        <th>Aksi</th> <!-- Tetap mempertahankan aksi CRUD -->
                    </tr>
                </thead>
                <tbody>
                    <!-- Looping melalui pengumuman dengan nomor urut -->
                        @foreach($pengumumans as $pengumuman)
                            <tr>
                                <td>{{ $loop->iteration }}</td> <!-- Menampilkan nomor urut -->
                                <td>{{ $pengumuman->title }}</td>
                                <td>{{ Str::limit($pengumuman->content, 650) }}</td> <!-- Memotong konten untuk menghindari tampilan yang terlalu panjang -->
                                <td>
                                    <!-- Menggunakan ikon feather untuk aksi -->
                                    <a href="{{ route('pengumuman.edit', $pengumuman->id) }}" class="btn btn-warning btn-sm">
                                        <i data-feather="edit-2"></i>
                                    </a>
                                    <livewire:deletepengumuman :id="$pengumuman->id" />
                                    @if($pengumuman->file)
                                    <p>File saat ini: <a href="{{ asset('pengumuman_files/' . $pengumuman->file) }}" target="_blank">Lihat File</a></p>
                                @endif
                                </td>
                            </tr>
                        @endforeach
                </tbody>
                <tfoot>
                    <!-- Menambahkan tfoot untuk tabel -->
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Konten</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</main>
@endsection
