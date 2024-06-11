@extends('dashboard.layouts.main') 

@section('container')
<main class="content">
    <div class="container-fluid p-0">
        <h1 class="h3 mb-3"><strong>Edit Kategori: {{ $kategori->name }}</strong></h1> <!-- Consistent heading -->

        <div class="card flex-fill w-100 p-3">
            <form action="{{ route('kategoris.update', $kategori) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- Name Field with Error Handling -->
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Kategori</label>
                    <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $kategori->name) }}" required>
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <!-- Submit and Back Buttons -->
                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-primary">Perbarui</button>
                    <a href="{{ route('kategoris.index') }}" class="btn btn-secondary">Kembali</a>
                </div>

            </form>
        </div>
    </div>
</main>

<script>
function previewImage() {
    const fileInput = document.querySelector('#file');
    const imgPreview = document.querySelector('.img-preview');

    if (fileInput.files && fileInput.files[0]) {
        const reader = new FileReader();

        reader.onload = function(e) {
            imgPreview.style.display = 'block';
            imgPreview.src = e.target.result;
        };

        reader.readAsDataURL(fileInput.files[0]);
    }
}
</script>
@endsection
