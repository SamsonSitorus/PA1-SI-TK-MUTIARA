@extends('dashboard.layouts.main')

@section('container')
<main class="content">
  <div class="container-fluid p-0">
      <h1 class="h3 mb-3"><strong>Edit Data Jumlah Siswa</strong></h1>

      <div class="card flex-fill w-100 p-3">
        <form action="{{ route('jumlah.update', $jumlahSiswa->id) }}" method="POST">
            @csrf
            @method('PUT')
        
          
            <div class="mb-3 row">
                <label for="pihak" class="col-sm-2 col-form-label text-end fw-semibold text-secondary">Kelas B</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control @error('pihak') is-invalid @enderror" id="pihak" name="pihak" placeholder="Masukkan Jumlah Siswa Kelas B" value="{{ old('pihak') }}" required>
                    @error('pihak')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="mb-3 row">
                <label for="date" class="col-sm-2 col-form-label text-end fw-semibold text-secondary">Kelas C</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control @error('date') is-invalid @enderror" id="date" name="date" placeholder="Masukkan Jumlah Siswa Kelas C" value="{{ old('date') }}" required>
                    @error('date')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nilai_isi" class="col-sm-2 col-form-label text-end fw-semibold text-secondary">Kelas C</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control @error('nilai_isi') is-invalid @enderror" id="nilai_isi" name="nilai_isi" placeholder="Masukkan Jumlah Siswa Kelas C" value="{{ old('nilai_isi') }}" required>
                    @error('nilai_isi')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nilai_kelulusan" class="col-sm-2 col-form-label text-end fw-semibold text-secondary">Kelas C</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control @error('nilai_kelulusan') is-invalid @enderror" id="nilai_kelulusan" name="nilai_kelulusan" placeholder="Masukkan Jumlah Siswa Kelas C" value="{{ old('nilai_kelulusan') }}" required>
                    @error('nilai_kelulusan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nilai_proses" class="col-sm-2 col-form-label text-end fw-semibold text-secondary">Kelas C</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control @error('nilai_proses') is-invalid @enderror" id="nilai_proses" name="nilai_proses" placeholder="Masukkan Jumlah Siswa Kelas C" value="{{ old('nilai_proses') }}" required>
                    @error('nilai_proses')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nilai_pendidikan" class="col-sm-2 col-form-label text-end fw-semibold text-secondary">Kelas C</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control @error('nilai_pendidikan') is-invalid @enderror" id="nilai_pendidikan" name="nilai_pendidikan" placeholder="Masukkan Jumlah Siswa Kelas C" value="{{ old('nilai_pendidikan') }}" required>
                    @error('nilai_pendidikan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nilai_prasarana" class="col-sm-2 col-form-label text-end fw-semibold text-secondary">Kelas C</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control @error('nilai_prasarana') is-invalid @enderror" id="nilai_prasarana" name="nilai_prasarana" placeholder="Masukkan Jumlah Siswa Kelas C" value="{{ old('nilai_prasarana') }}" required>
                    @error('nilai_prasarana')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nilai_pengelola" class="col-sm-2 col-form-label text-end fw-semibold text-secondary">Kelas C</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control @error('nilai_pengelola') is-invalid @enderror" id="nilai_pengelola" name="nilai_pengelola" placeholder="Masukkan Jumlah Siswa Kelas C" value="{{ old('nilai_pengelola') }}" required>
                    @error('nilai_pengelola')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nilai_pembiayaan" class="col-sm-2 col-form-label text-end fw-semibold text-secondary">Kelas C</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control @error('nilai_pembiayaan') is-invalid @enderror" id="nilai_pembiayaan" name="nilai_pembiayaan" placeholder="Masukkan Jumlah Siswa Kelas C" value="{{ old('nilai_pembiayaan') }}" required>
                    @error('nilai_pembiayaan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="mb-3 row">
                <label for="kelasD" class="col-sm-2 col-form-label text-end fw-semibold text-secondary">Kelas D</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control @error('kelasD') is-invalid @enderror" id="kelasD" name="kelasD" placeholder="Masukkan Jumlah Siswa Kelas D" value="{{ old('kelasD') }}" required>
                    @error('kelasD')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="mb-3 row">
                <label for="kelasE" class="col-sm-2 col-form-label text-end fw-semibold text-secondary">Kelas E</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control @error('kelasE') is-invalid @enderror" id="kelasE" name="kelasE" placeholder="Masukkan Jumlah Siswa Kelas E" value="{{ old('kelasE') }}" required>
                    @error('kelasE')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
        
            <!-- Buttons for Submit and Back -->
            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-primary">Perbarui</button>
                <a href="{{ route('jumlah.index') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </form>     
      </div>
  </div>
</main>
@endsection
