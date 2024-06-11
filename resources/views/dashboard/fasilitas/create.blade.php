@extends('dashboard.layouts.main')

@section('container')
<main class="content">
    <div class="container-fluid p-0">
        <h1 class="h3 mb-3"><strong>Tambah Fasilitas Baru untuk Kategori: {{ $kategori->name }}</strong></h1>

        <div class="row">
            <div class="col-12">
                <div class="card flex-fill w-100 p-3">
                    <h5 class="card-title mb-3">Form Fasilitas Baru</h5>
                    <form action="{{ route('fasilitas.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- Name Field with Error Handling -->
                        <div class="mb-3 row">
                            <label for="name" class="col-sm-2 col-form-label text-end fw-semibold text-secondary">Nama Fasilitas</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Masukkan Nama Fasilitas" value="{{ old('name') }}" required>
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- Description Field -->
                        <div class="mb-3 row">
                            <label for="description" class="col-sm-2 col-form-label text-end fw-semibold text-secondary">Deskripsi</label>
                            <div class="col-sm-10">
                                <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" placeholder="Masukkan Deskripsi Fasilitas" rows="4">{{ old('description') }}</textarea>
                                @error('description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- Image Upload with Preview -->
                        <div class="mb-3 row">
                            <label for="image" class="col-sm-2 col-form-label text-end fw-semibold text-secondary">Gambar (Opsional)</label>
                            <div class="col-sm-10">
                                <img class="img-preview img-fluid mb-3 col-sm-5" style="display: none;">
                                <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image" onchange="previewImage()">
                                @error('image')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- Hidden Field for Kategori ID -->
                        <input type="hidden" name="kategori_id" value="{{ $kategori->id }}">

                        <!-- Buttons for Submit and Cancel -->
                        <div class="row mt-3">
                            <div class="col-sm-10 offset-sm-2">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <a href="{{ route('fasilitas.index', ['kategoriId' => $kategori->id]) }}" class="btn btn-danger">Batal</a>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<script>
function previewImage() {
    const image = document.querySelector('#image');
    const imgPreview = document.querySelector('.img-preview');

    imgPreview.style.display = 'block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function(oFEvent) {
        imgPreview.src = oFEvent.target.result;
    };
}
</script>
@endsection
