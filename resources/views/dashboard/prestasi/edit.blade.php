@extends('dashboard.layouts.main')

@section('container')
<main class="content">
    <div class="container-fluid p-0">
        <h1 class="h3 mb-3"><strong>Edit Prestasi</strong></h1>

        <div class="card flex-fill w-100 p-3">
            <form action="{{ route('prestasi.updatee', $prestasi->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- Field Judul -->
                <div class="mb-3">
                    <label for="title" class="form-label">Judul</label>
                    <input 
                        type="text" 
                        name="title" 
                        id="title" 
                        class="form-control @error('title') is-invalid @enderror" 
                        value="{{ old('title', $prestasi->title) }}" 
                        required
                    >
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Field Konten -->
                <div class="mb-3">
                    <label for="content" class="form-label">Konten</label>
                    <textarea 
                        name="content" 
                        id="content" 
                        class="form-control @error('content') is-invalid @enderror" 
                        rows="4" 
                        required
                    >{{ old('content', $prestasi->content) }}</textarea>
                    @error('content')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Field URL -->
                <div class="mb-3">
                    <label untuk="url" class="form-label">URL</label>
                    <input 
                        type="text" 
                        name="url" 
                        id="url" 
                        class="form-control @error('url') is-invalid @enderror" 
                        value="{{ old('url', $prestasi->url) }}"
                    >
                    @error('url')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Upload Gambar dengan Preview -->
                <div class="mb-3">
                    <label untuk="image" class="form-label">Gambar</label>
                    <input 
                        type="file" 
                        name="image" 
                        id="image" 
                        class="form-control @error('image') is-invalid @enderror" 
                        onchange="previewImage()"
                    >
                    
                    <!-- Preview gambar -->
                    <div class="mt-2">
                        @if ($prestasi->image)
                            <img 
                                class="img-preview img-fluid" 
                                src="{{ asset('prestasii/' . $prestasi->image) }}" 
                                alt="{{ $prestasi->title }}" 
                                style="max-width: 200px;"
                            >
                        @else
                            <img 
                                class="img-preview img-fluid" 
                                style="display: none; max-width: 200px;"
                                alt="Preview gambar"
                            >
                        @endif
                    </div>

                    @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Field Tanggal -->
                <div class="mb-3">
                    <label for="date" class="form-label">Tanggal</label>
                    <input 
                        type="date"  
                        name="date"  
                        id="date"  
                        class="form-control @error('date') is-invalid @enderror"
                        value="{{ old('date', isset($prestasi->date) ? \Carbon\Carbon::parse($prestasi->date)->format('Y-m-d') : '') }}"  
                        required
                    >
                    @error('date')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                

                <!-- Tombol untuk Menyimpan dan Kembali -->
                <div class="d-flex justify-content-between mt-3">
                    <button type="submit" class="btn btn-primary">Perbarui</button>
                    <a href="{{ route('prestasi.index') }}" class="btn btn-secondary">Kembali</a>
                </div>

            </form>
        </div>
    </div>
</main>

@section('scripts')
<script>
function previewImage() {
    const imageInput = document.querySelector('#image');
    const imgPreview = document.querySelector('.img-preview');

    if (imageInput.files && imageInput.files[0]) {
        const reader = new FileReader();
        reader.onload = function(e) {
            imgPreview.style.display = 'block';
            imgPreview.src = e.target.result;
        };
        reader.readAsDataURL(imageInput.files[0]);
    } else {
        imgPreview.style.display = 'none';
    }
}
</script>
@endsection

@endsection
