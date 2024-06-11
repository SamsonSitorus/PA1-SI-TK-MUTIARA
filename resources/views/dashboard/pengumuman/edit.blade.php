@extends('dashboard.layouts.main') <!-- Menggunakan layout dashboard -->

@section('container')
<main class="content">
    <div class="container-fluid p-0"> <!-- Menggunakan container-fluid untuk tampilan penuh -->

        <h1 class="h3 mb-3"><strong>Edit Pengumuman</strong></h1> <!-- Menggunakan judul yang lebih konsisten -->

        <div class="row"> <!-- Menyusun form dalam struktur grid -->
            <div class="col-12">
                <div class="card flex-fill w-100 p-3"> <!-- Menggunakan card untuk form -->
                    <h5 class="card-title mb-3">Formulir Edit Pengumuman</h5>

                    <!-- Menampilkan error jika ada -->
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <!-- Form untuk mengedit pengumuman -->
                    <form action="{{ route('pengumuman.update', $pengumuman->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT') <!-- Menggunakan metode PUT untuk update -->

                        <!-- Input Judul -->
                        <div class="mb-3 row">
                            <label for="title" class="col-sm-2 col-form-label text-end fw-semibold text-secondary">Judul</label>
                            <div class="col-sm-10">
                                <input
                                    type="text"
                                    class="form-control @error('title') is-invalid @enderror"
                                    id="title"
                                    name="title"
                                    value="{{ $pengumuman->title }}"
                                    required
                                >
                                @error('title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- Input Konten -->
                        <div class="mb-3 row">
                            <label for="content" class="col-sm-2 col-form-label text-end fw-semibold text-secondary">Konten</label>
                            <div class="col-sm-10">
                                <textarea
                                    class="form-control @error('content') is-invalid @enderror"
                                    id="content"
                                    name="content"
                                    rows="4"
                                    required
                                >{{ $pengumuman->content }}</textarea>
                                @error('content')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- Input File -->
                        <div class="mb-3 row">
                            <label for="file" class="col-sm-2 col-form-label text-end fw-semibold text-secondary">File (opsional)</label>
                            <div class="col-sm-10">
                                <input
                                    type="file"
                                    class="form-control @error('file') is-invalid @enderror"
                                    id="file"
                                    name="file"
                                >
                                @error('file')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror

                                <!-- Menampilkan file saat ini jika ada -->
                                @if($pengumuman->file)
                                    <p>File saat ini: <a href="{{ asset('pengumuman_files/' . $pengumuman->file) }}" target="_blank">Lihat File</a></p>
                                @endif
                            </div>
                        </div>

                        <!-- Tombol Aksi -->
                        <div class="row mt-3">
                            <div class="col-sm-10 offset-sm-2">
                                <button type="submit" class="btn btn-primary">Simpan</button> <!-- Tombol simpan -->
                                <a href="{{ route('pengumuman.index') }}" class="btn btn-secondary">Batal</a> <!-- Tombol batal -->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</main>
@endsection
