@extends('dashboard.layouts.main')

@section('container')
<main class="content">
    <div class="container-fluid p-0">
        <h1 class="h3 mb-3"><strong>Edit Fasilitas: {{ $fasilitas->name }}</strong></h1>

        <div class="card flex-fill w-100 p-3">
            <form action="{{ route('fasilitas.update', $fasilitas) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- Name Field with Error Handling -->
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Fasilitas</label>
                    <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $fasilitas->name) }}" required>
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Description Field with Error Handling -->
                <div class="mb-3">
                    <label for="description" class="form-label">Deskripsi</label>
                    <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror" rows="4">{{ old('description', $fasilitas->description) }}</textarea>
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Image Upload with Preview and Error Handling -->
                <div class="mb-3">
                    <label for="image" class="form-label">Gambar</label>
                    <input type="file" name="image" id="image" class="form-control @error('image') is-invalid @enderror" onchange="previewImage()">

                    <div class="mt-2">
                        @if ($fasilitas->image)
                            <img class="img-preview img-fluid" src="{{ asset('fasilitass/' . $fasilitas->image) }}" alt="{{ $fasilitas->name }}" style="max-width: 100px;">
                        @else
                            <img class="img-preview img-fluid" style="display:none; max-width: 100px;">
                        @endif
                    </div>

                    @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Submit and Back Buttons -->
                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-primary">Perbarui</button>
                    <a href="{{ route('fasilitas.index', ['kategoriId' => $fasilitas->kategori_id]) }}" class="btn btn-secondary">Kembali</a>
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
