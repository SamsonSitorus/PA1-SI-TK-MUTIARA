  @extends('dashboard.layouts.main')

  @section('container')
  <main class="content">
      <div class="container-fluid p-0">

          <h1 class="h3 mb-3"><strong>Tambah Guru</strong></h1>

          <div class="row">
              <div class="col-12 ">
                  <div class="card flex-fill w-100 p-3">
                      <h5 class="card-title mb-3">Form Tambah Guru</h5>

                      <form action="{{ route('guru.store') }}" method="POST" enctype="multipart/form-data">
                          @csrf
                          <div class="mb-3 row">
                              <label for="name" class="col-sm-2 col-form-label text-end fw-semibold text-secondary">Nama</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Masukkan Nama" value="{{ old('name') }}" required>
                                  @error('name')
                                      <div class="invalid-feedback">
                                          {{ $message }}
                                      </div>
                                  @enderror
                              </div>
                          </div>

                          <div class="mb-3 row">
                              <label for="alamat" class="col-sm-2 col-form-label text-end fw-semibold text-secondary">Alamat</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" placeholder="Masukkan Alamat" value="{{ old('alamat') }}" required>
                                  @error('alamat')
                                      <div class="invalid-feedback">
                                          {{ $message }}
                                      </div>
                                  @enderror
                              </div>
                          </div>

                          <div class="mb-3 row">
                              <label for="no_Telepon" class="col-sm-2 col-form-label text-end fw-semibold text-secondary">No. Telp</label>
                              <div class="col-sm-10">
                                <input type="tel" class="form-control @error('no_telp') is-invalid @enderror" id="no_telp" name="no_telp" placeholder="Masukkan No. Telp" value="{{ old('no_telp') }}" required>
                                  @error('noTelepon')
                                      <div class="invalid-feedback">
                                          {{ $message }}
                                      </div>
                                  @enderror
                              </div>
                          </div>

                          <div class="mb-3 row">
                              <label class="col-sm-2 col-form-label text-end fw-semibold text-secondary">Jenis Kelamin</label>
                              <div class="col-sm-10">
                                  <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="radio" id="laki-laki" name="jeniskelamin" value="laki-laki" required @if (old('jeniskelamin') == 'laki-laki') checked @endif>
                                      <label class="form-check-label" for="laki-laki">Laki-laki</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="radio" id="perempuan" name="jeniskelamin" value="perempuan" required @if (old('jeniskelamin') == 'perempuan') checked @endif>
                                      <label class="form-check-label" for="perempuan">Perempuan</label>
                                  </div>
                                  @error('jeniskelamin')
                                      <div class="text-danger">{{ $message }}</div>
                                  @enderror
                              </div>
                          </div>

                          <div class="mb-3 row">
                              <label for="image" class="col-sm-2 col-form-label text-end fw-semibold text-secondary">Foto</label>
                              <div class="col-sm-10">
                                  <img class="img-preview img-fluid mb-3 col-sm-5" style="display: none;" alt="Preview">
                                  <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image" onchange="previewImage()">
                                  @error('image')
                                      <div class="invalid-feedback">
                                          {{ $message }}
                                      </div>
                                  @enderror
                              </div>
                          </div>

                          <div class="mb-3 text-center">
                              <button type="submit" class="btn btn-primary">Tambah</button>
                              <a href="{{ route('guru.index') }}" class="btn btn-secondary">Batal</a>
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

      oFReader.onload = function(OFREvent) {
          imgPreview.src = OFREvent.target.result;
      };
  }
  </script>
  @endsection
