@extends('dashboard.layouts.main')

@section('container')
<main class="content">
  <div class="container-fluid p-0">
      <h1 class="h3 mb-3"><strong>Edit Data Jumlah Siswa</strong></h1>

      <div class="card flex-fill w-100 p-3">
        <form action="{{ route('jumlah.update', $jumlahSiswa->id) }}" method="POST">
            @csrf
            @method('PUT')
        
            <!-- Kelas A Field -->
            <div class="mb-3 row">
                <label for="kelasA" class="col-sm-2 col-form-label text-end fw-semibold text-secondary">Kelas A</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control @error('kelasA') is-invalid @enderror" id="kelasA" name="kelasA" placeholder="Masukkan Jumlah Siswa Kelas A" value="{{ old('kelasA', $jumlahSiswa->kelasA) }}" required>
                    @error('kelasA')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        
            <!-- Kelas B Field -->
            <div class="mb-3 row">
                <label for="kelasB" class="col-sm-2 col-form-label text-end fw-semibold text-secondary">Kelas B</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control @error('kelasB') is-invalid @enderror" id="kelasB" name="kelasB" placeholder="Masukkan Jumlah Siswa Kelas B" value="{{ old('kelasB', $jumlahSiswa->kelasB) }}" required>
                    @error('kelasB')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        
            <!-- Kelas C Field -->
            <div class="mb-3 row">
                <label for="kelasC" class="col-sm-2 col-form-label text-end fw-semibold text-secondary">Kelas C</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control @error('kelasC') is-invalid @enderror" id="kelasC" name="kelasC" placeholder="Masukkan Jumlah Siswa Kelas C" value="{{ old('kelasC', $jumlahSiswa->kelasC) }}" required>
                    @error('kelasC')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        
            <!-- Kelas D Field -->
            <div class="mb-3 row">
                <label for="kelasD" class="col-sm-2 col-form-label text-end fw-semibold text-secondary">Kelas D</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control @error('kelasD') is-invalid @enderror" id="kelasD" name="kelasD" placeholder="Masukkan Jumlah Siswa Kelas D" value="{{ old('kelasD', $jumlahSiswa->kelasD) }}" required>
                    @error('kelasD')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        
            <!-- Kelas E Field -->
            <div class="mb-3 row">
                <label for="kelasE" class="col-sm-2 col-form-label text-end fw-semibold text-secondary">Kelas E</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control @error('kelasE') is-invalid @enderror" id="kelasE" name="kelasE" placeholder="Masukkan Jumlah Siswa Kelas E" value="{{ old('kelasE', $jumlahSiswa->kelasE) }}" required>
                    @error('kelasE')
                        <div class="invalid-feedback">{{ $message }}</div>
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
