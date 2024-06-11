@extends('dashboard.layouts.main')

@section('container')
<main class="content">
    <div class="container-fluid p-0">
        <h1 class="h3 mb-3"><strong>Edit Galeri</strong></h1>

        <div class="card flex-fill w-100 p-3">
            <form action="{{ route('gallery.updatee', $gallery->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- Title Field -->
                <div class="mb-3">
                    <label for="title" class="form-label">Judul</label>
                    <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title', $gallery->title) }}" required>
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Content Field -->
                <div class="mb-3">
                    <label for="content" class="form-label">Konten</label>
                    <textarea name="content" id="content" class="form-control @error('content') is-invalid @enderror" rows="4" required>{{ old('content', $gallery->content) }}</textarea>
                    @error('content')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Image Upload with Preview -->
                <div class="mb-3">
                    <label for="image" class="form-label">Gambar</label>
                    <input type="file" name="image" id="image" class="form-control @error('image') is-invalid @enderror" onchange="previewImage()">
                    
                    <div class="mt-2">
                        @if ($gallery->image)
                            <img class="img-preview img-fluid" src="{{ asset('galleryy/' . $gallery->image) }}" alt="{{ $gallery->title }}" style="max-width: 200px;">
                        @else
                            <img class="img-preview img-fluid" style="display:none; max-width: 200px;">
                        @endif
                    </div>

                    @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- URL Field -->
                <div class="mb-3">
                    <label for="url" class="form-label">URL</label>
                    <input type="text" name="url" id="url" class="form-control @error('url') is-invalid @enderror" value="{{ old('url', $gallery->url) }}">
                    @error('url')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Buttons for Submit and Back -->
                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-primary">Perbarui</button>
                    <a href="{{ route('gallery.index') }}" class="btn btn-secondary">Kembali</a>
                </div>

            </form>
        </div>
    </div>
</main>

<script>
function previewImage() {
    const image = document.querySelector('#image');
    const imgPreview = document.querySelector('.img-preview');

    if (image.files && image.files[0]) {
        const reader = new FileReader();

        reader.onload = function(e) {
            imgPreview.style.display = 'block';
            imgPreview.src = e.target.result;
        };

        reader.readAsDataURL(image.files[0]);
    }
}
</script>
@endsection
