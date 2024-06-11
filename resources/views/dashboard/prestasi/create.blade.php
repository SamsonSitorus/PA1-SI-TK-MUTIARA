@extends('dashboard.layouts.main')

@section('container')
<main class="content">
    <div class="container-fluid p-0">
        <h1 class="h3 mb-3"><strong>Tambah Prestasi</strong></h1>

        <div class="row">
            <div class="col-12">
                <div class="card flex-fill w-100 p-3">
                    <h5 class="card-title mb-3">Tambah Prestasi</h5>

                    <!-- Form untuk Menambah Prestasi -->
                    <form action="{{ route('prestasi.store') }}" method="post" enctype="multipart/form-data">
                        @csrf  <!-- CSRF token untuk keamanan -->

                        <!-- Input Judul -->
                        <div class="mb-3 row">
                            <label for="title" class="col-sm-2 col-form-label text-end fw-semibold text-secondary">Judul</label>
                            <div class="col-sm-10">
                                <input
                                    type="text"
                                    class="form-control @error('title') is-invalid @enderror"
                                    id="title"
                                    name="title"
                                    placeholder="Masukkan Judul"
                                    value="{{ old('title') }}"
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
                                    placeholder="Masukkan Konten"
                                    rows="4"
                                    required
                                >{{ old('content') }}</textarea>
                                @error('content')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- Input URL -->
                        <div class="mb-3 row">
                            <label for="url" class="col-sm-2 col-form-label text-end fw-semibold text-secondary">URL</label>
                            <div class="col-sm-10">
                                <input
                                    type="text"
                                    class="form-control @error('url') is-invalid @enderror"
                                    id="url"
                                    name="url"
                                    placeholder="Masukkan URL (opsional)"
                                    value="{{ old('url') }}"
                                >
                                @error('url')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- Input Gambar -->
                        <div class="mb-3 row">
                            <label for="image" class="col-sm-2 col-form-label text-end fw-semibold text-secondary">Upload Foto</label>
                            <div class="col-sm-10">
                                <img class="img-preview img-fluid mb-3 col-sm-5" style="display: none;">
                                <input
                                    class="form-control @error('image') is-invalid @enderror"
                                    type="file"
                                    id="image"
                                    name="image"
                                    onchange="previewImage()"
                                >
                                @error('image')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- Input Tanggal Acara -->
                        <div class="mb-3 row">
                            <label for="date" class="col-sm-2 col-form-label text-end fw-semibold text-secondary">Tanggal Acara</label>
                            <div class="col-sm-10">
                                <input
                                    type="date"
                                    class="form-control @error('date') is-invalid @enderror"
                                    id="date"
                                    name="date"
                                    value="{{ old('date') }}"
                                    required
                                >
                                @error('date')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- Tombol Aksi -->
                        <div class="row mt-3">
                            <div class="col-sm-10 offset-sm-2">
                                <button type="submit" class="btn btn-primary">Tambah</button>
                                <a href="{{ route('prestasi.index') }}" class="btn btn-secondary">Batal</a>  <!-- Tombol untuk membatalkan -->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- Script untuk preview gambar -->
<script>
function previewImage() {
    const imageInput = document.querySelector('#image');
    const imgPreview = document.querySelector('.img-preview');

    if (imageInput.files && imageInput.files[0]) {
        imgPreview.style.display = 'block';  // Menampilkan preview
        const oFReader = new FileReader();
        oFReader.readAsDataURL(imageInput.files[0]);

        oFReader.onload = function(oFEvent) {
            imgPreview.src = oFEvent.target.result;  // Menampilkan gambar yang diunggah
        };
    } else {
        imgPreview.style.display = 'none';  // Sembunyikan preview jika tidak ada gambar
    }
}
</script>

@endsection
