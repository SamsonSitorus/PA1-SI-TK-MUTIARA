@extends('dashboard.layouts.main')

@section('container')
<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3"><strong>Tambah Jumlah Siswa</strong></h1>

        <div class="row">
            <div class="col-12">
                <div class="card flex-fill w-100 p-3">
                    <h5 class="card-title mb-3">Form Tambah Jumlah Siswa</h5>

                    <form action="{{ route('jumlah.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3 row">
                            <label for="kelasA" class="col-sm-2 col-form-label text-end fw-semibold text-secondary">Kelas A</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control @error('kelasA') is-invalid @enderror" id="kelasA" name="kelasA" placeholder="Masukkan Jumlah Siswa Kelas A" value="{{ old('kelasA') }}" required>
                                @error('kelasA')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="kelasB" class="col-sm-2 col-form-label text-end fw-semibold text-secondary">Kelas B</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control @error('kelasB') is-invalid @enderror" id="kelasB" name="kelasB" placeholder="Masukkan Jumlah Siswa Kelas B" value="{{ old('kelasB') }}" required>
                                @error('kelasB')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="kelasC" class="col-sm-2 col-form-label text-end fw-semibold text-secondary">Kelas C</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control @error('kelasC') is-invalid @enderror" id="kelasC" name="kelasC" placeholder="Masukkan Jumlah Siswa Kelas C" value="{{ old('kelasC') }}" required>
                                @error('kelasC')
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

                        <div class="mb-3 text-center">
                            <button type="submit" class="btn btn-primary">Tambah</button>
                            <a href="{{ route('jumlah.index') }}" class="btn btn-secondary">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</main>
@endsection
