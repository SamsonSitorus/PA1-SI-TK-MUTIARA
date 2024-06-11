@extends('dashboard.layouts.main')

@section('container')
<main class="content">
  <div class="container-fluid p-0">
      <h1 class="h3 mb-3"><strong>Edit Data Guru</strong></h1>

      <div class="card flex-fill w-100 p-3">
          <form action="{{ route('guru.updatee', $guru->id) }}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT')

            <!-- Nama Field -->
            <div class="mb-3">
              <label for="name" class="form-label">Nama</label>
              <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $guru->name) }}" required>
              @error('name')
                  <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>

            <!-- Alamat Field -->
            <div class="mb-3">
              <label for="alamat" class="form-label">Alamat</label>
              <input type="text" name="alamat" id="alamat" class="form-control @error('alamat') is-invalid @enderror" value="{{ old('alamat', $guru->alamat) }}" required>
              @error('alamat')
                  <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>

            <!-- No. Telp Field -->
            <div class="mb-3">
              <label for="no_telp" class="form-label">No. Telp</label>
              <input type="tel" name="no_telp" id="no_telp" class="form-control @error('no_telp') is-invalid @enderror" placeholder="Masukkan No. Telp" value="{{ old('no_telp', $guru->no_telp) }}" required>
              @error('no_telp')
                  <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>

              <!-- Jenis Kelamin Field -->
              <div class="mb-3">
                <label for="jeniskelamin" class="form-label">Jenis Kelamin</label>
                <div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="laki-laki" name="jeniskelamin" value="laki-laki" @if (old('jeniskelamin', $guru->jeniskelamin) == 'laki-laki') checked @endif>
                        <label class="form-check-label" for="laki-laki">Laki-laki</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="perempuan" name="jeniskelamin" value="perempuan" @if (old('jeniskelamin', $guru->jeniskelamin) == 'perempuan') checked @endif>
                        <label class="form-check-label" for="perempuan">Perempuan</label>
                    </div>
                </div>
                @error('jeniskelamin')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
                <!-- Image Field with Preview -->
              <div class="mb-3">
                <label for="image" class="form-label">Upload Foto</label>
                <input type="file" name="image" id="image" class="form-control @error('image') is-invalid @enderror" onchange="previewImage()">
                
                <div class="mt-2">
                    @if ($guru->image)
                        <img class="img-preview img-fluid" src="{{ asset('storage/' . $guru->image) }}" alt="{{ $guru->nama }}" style="max-width: 200px;">
                    @else
                        <img class="img-preview img-fluid" style="display:none; max-width: 200px;">
                    @endif
                </div>

                @error('image')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>

              <!-- Buttons for Submit and Back -->
              <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-primary">Perbarui</button>
                <a href="{{ route('guru.index') }}" class="btn btn-secondary">Kembali</a>
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
