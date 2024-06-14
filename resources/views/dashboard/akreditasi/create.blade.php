@extends('dashboard.layouts.main')

@section('container')
<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3"><strong>Tambah Akreditasi</strong></h1>

        <div class="row">
            <div class="col-12">
                <div class="card flex-fill w-100 p-3">
                    <h5 class="card-title mb-3">Form Tambah Akreditasi </h5>

                    <form action="{{ route('akreditasi.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3 row">
                            <label for="grade" class="col-sm-2 col-form-label text-end fw-semibold text-secondary">Grade</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control @error('grade') is-invalid @enderror" id="grade" name="grade" placeholder="Masukkan Grade" value="{{ old('grade') }}" required>
                                @error('grade')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="pihak" class="col-sm-2 col-form-label text-end fw-semibold text-secondary">Pihak</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control @error('pihak') is-invalid @enderror" id="pihak" name="pihak" placeholder="Masukkan Pihak" value="{{ old('pihak') }}" required>
                                @error('pihak')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="date" class="col-sm-2 col-form-label text-end fw-semibold text-secondary">Tanggal</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control @error('date') is-invalid @enderror" id="date" name="date" placeholder="Masukkan Tanggal" value="{{ old('date') }}" required>
                                @error('date')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="nilai_isi" class="col-sm-2 col-form-label text-end fw-semibold text-secondary">Nilai Isi</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control @error('nilai_isi') is-invalid @enderror" id="nilai_isi" name="nilai_isi" placeholder="Masukkan Nilai Isi" value="{{ old('nilai_isi') }}" required>
                                @error('nilai_isi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="nilai_kelulusan" class="col-sm-2 col-form-label text-end fw-semibold text-secondary">Nilai Kelulusan</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control @error('nilai_kelulusan') is-invalid @enderror" id="nilai_kelulusan" name="nilai_kelulusan" placeholder="Masukkan Nilai Kelulusan" value="{{ old('nilai_kelulusan') }}" required>
                                @error('nilai_kelulusan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="nilai_proses" class="col-sm-2 col-form-label text-end fw-semibold text-secondary">Nilai Proses</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control @error('nilai_proses') is-invalid @enderror" id="nilai_proses" name="nilai_proses" placeholder="Masukkan Nilai Proses" value="{{ old('nilai_proses') }}" required>
                                @error('nilai_proses')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="nilai_pendidikan" class="col-sm-2 col-form-label text-end fw-semibold text-secondary">Nilai Pendidikan</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control @error('nilai_pendidikan') is-invalid @enderror" id="nilai_pendidikan" name="nilai_pendidikan" placeholder="Masukkan Nilai Pendidikan" value="{{ old('nilai_pendidikan') }}" required>
                                @error('nilai_pendidikan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="nilai_prasarana" class="col-sm-2 col-form-label text-end fw-semibold text-secondary">Nilai Prasarana</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control @error('nilai_prasarana') is-invalid @enderror" id="nilai_prasarana" name="nilai_prasarana" placeholder="Masukkan Nilai Prasarana" value="{{ old('nilai_prasarana') }}" required>
                                @error('nilai_prasarana')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="nilai_pengelola" class="col-sm-2 col-form-label text-end fw-semibold text-secondary">Nilai Pengelola</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control @error('nilai_pengelola') is-invalid @enderror" id="nilai_pengelola" name="nilai_pengelola" placeholder="Masukkan Nilai Pengelola" value="{{ old('nilai_pengelola') }}" required>
                                @error('nilai_pengelola')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="nilai_pembiayaan" class="col-sm-2 col-form-label text-end fw-semibold text-secondary">Nilai Pembiayaan</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control @error('nilai_pembiayaan') is-invalid @enderror" id="nilai_pembiayaan" name="nilai_pembiayaan" placeholder="Masukkan Nilai Pembiayaan" value="{{ old('nilai_pembiayaan') }}" required>
                                @error('nilai_pembiayaan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 text-center">
                            <button type="submit" class="btn btn-primary">Tambah</button>
                            <a href="{{ route('akreditasi.index') }}" class="btn btn-secondary">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</main>
@endsection
