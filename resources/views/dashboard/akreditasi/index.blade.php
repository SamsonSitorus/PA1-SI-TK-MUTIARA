@extends('dashboard.layouts.main')
@section('container')
<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3"><strong>Data Akreditasi</strong></h1>

        <div class="row">
            <div class="col-12">
                <div class="card flex-fill w-100 p-3">
                    <h5 class="card-title mb-3">Daftar Data</h5>
                    <div class="col-lg-offset-2 col-lg-10">
                        @if ($akreditasiCount === 0)
                            <a href="{{ route('akreditasi.create') }}" class="btn btn-primary"><i data-feather="plus-circle"></i> Tambah Akreditasi</a>
                        @endif
                        <div>
                            @if (session('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                            @elseif (session('error'))
                                <div class="alert alert-danger">{{ session('error') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover my-0" id="akreditasiTable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Grade</th>
                                    <th>Pihak</th>
                                    <th>Tanggal</th>
                                    <th>Nilai Isi</th>
                                    <th>Nilai Kelulusan</th>
                                    <th>Nilai Proses</th>
                                    <th>Nilai Pendidikan</th>
                                    <th>Nilai Prasarana</th>
                                    <th>Nilai Pengelola</th>
                                    <th>Nilai Pembiayaan</th>
                                    <th>Total</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($akreditasis as $key => $akreditasi)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $akreditasi->grade }}</td>
                                        <td>{{ $akreditasi->pihak }}</td>
                                        <td>{{ $akreditasi->date }}</td>
                                        <td>{{ $akreditasi->nilai_isi }}</td>
                                        <td>{{ $akreditasi->nilai_kelulusan }}</td>
                                        <td>{{ $akreditasi->nilai_proses }}</td>
                                        <td>{{ $akreditasi->nilai_pendidikan }}</td>
                                        <td>{{ $akreditasi->nilai_prasarana }}</td>
                                        <td>{{ $akreditasi->nilai_pengelola }}</td>
                                        <td>{{ $akreditasi->nilai_pembiayaan }}</td>
                                        <td>{{ $akreditasi->total }}</td>
                                        <td>
                                            <a href="{{ route('akreditasi.edit', $akreditasi->id) }}" class="btn btn-warning btn-sm">
                                                <i data-feather="edit-2"></i>
                                            </a>
                                            <form action="{{ route('akreditasi.destroy', $akreditasi->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                                    <i data-feather="trash-2"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Grade</th>
                                    <th>Pihak</th>
                                    <th>Tanggal</th>
                                    <th>Nilai Isi</th>
                                    <th>Nilai Kelulusan</th>
                                    <th>Nilai Proses</th>
                                    <th>Nilai Pendidikan</th>
                                    <th>Nilai Prasarana</th>
                                    <th>Nilai Pengelola</th>
                                    <th>Nilai Pembiayaan</th>
                                    <th>Total</th>
                                    <th>Aksi</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('#akreditasiTable').DataTable({
                scrollX: true
            });
        });
    </script>
@endsection
