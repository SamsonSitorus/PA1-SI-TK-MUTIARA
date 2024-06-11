@extends('dashboard.layouts.main')

@section('container')
<main class="content">
    <div class="container-fluid p-0">
        <h1 class="h3 mb-3"><strong>Tambah Gallery</strong></h1>

        <div class="row">
            <div class="col-12">
                <div class="card flex-fill w-100 p-3">
                    <h5 class="card-title mb-3">TAMBAH GALLERY</h5>
                    <form action="{{ route('gallery.store') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3 row">
                            <label for="title" class="col-sm-2 col-form-label text-end fw-semibold text-secondary">Judul</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Masukkan Judul" value="{{ old('title') }}" required>
                                @error('title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="content" class="col-sm-2 col-form-label text-end fw-semibold text-secondary">Konten</label>
                            <div class="col-sm-10">
                                <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content" placeholder="Masukkan Konten" rows="4" required>{{ old('content') }}</textarea>
                                @error('content')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="url" class="col-sm-2 col-form-label text-end fw-semibold text-secondary">URL</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control @error('url') is-invalid @enderror" id="url" name="url" placeholder="Masukkan URL" value="{{ old('url') }}">
                                @error('url')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="image" class="col-sm-2 col-form-label text-end fw-semibold text-secondary">Upload Foto</label>
                            <div class="col-sm-10">
                                <img class="img-preview img-fluid mb-3 col-sm-5">
                                <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
                                @error('image')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-sm-10 offset-sm-2">
                                <button type="submit" class="btn btn-primary">Tambah</button>
                                <a href="{{ route('gallery.index') }}" class="btn btn-danger">Batal</a>
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
