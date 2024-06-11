@extends('dashboard.layouts.main')
@section('container')
<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3"><strong>Data Jumlah Siswa</strong></h1>

        <div class="row">
            <div class="col-12">
                <div class="card flex-fill w-100 p-3">
                    <h5 class="card-title mb-3">Daftar Data</h5>
                    <div class="col-lg-offset-2 col-lg-10">
                        @if ($jumlahSiswaCount === 0)
                            <a href="{{ route('jumlah.create') }}" class="btn btn-primary"><i data-feather="plus-circle"></i>Tambah jumlah_siswa</a>
                        @endif
                        <div>
                            @if (session('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                            @elseif (session('error'))
                                <div class="alert alert-danger">{{ session('error') }}</div>
                            @endif
                        </div>
                    </div>
                    <table class="table table-hover my-0" id="myTable"><br>
                        <thead>
                    <tr>
                        <th>No</th>
                        <th>Kelas A</th>
                        <th>Kelas Melati</th>
                        <th>Kelas Tulip</th>
                        <th>Kelas Anggrek</th>
                        <th>Kelas Ros</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($jumlahSiswas as $key => $jumlahSiswa)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $jumlahSiswa->kelasA }}</td>
                                    <td>{{ $jumlahSiswa->kelasB }}</td>
                                    <td>{{ $jumlahSiswa->kelasC }}</td>
                                    <td>{{ $jumlahSiswa->kelasD }}</td>
                                    <td>{{ $jumlahSiswa->kelasE }}</td>
                                    <td>
                                        <a href="{{ route('jumlah.edit', $jumlahSiswa->id) }}" class="btn btn-warning btn-sm">
                                            <i data-feather="edit-2"></i>
                                        </a>
                                        <livewire:delete-jumlah-siswa :id="$jumlahSiswa->id" />
                                    </td>
                                </tr>
                            @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Kelas A</th>
                        <th>Kelas Melati</th>
                        <th>Kelas Tulip</th>
                        <th>Kelas Anggrek</th>
                        <th>Kelas Ros</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</main>

<!-- Tambahkan JavaScript untuk DataTables -->
@section('scripts')
    <script>
        $(document).ready(function() {
            $('#jumlah_siswaTable').DataTable();  <!-- Inisialisasi DataTables -->
        });
    </script>
@endsection
@endsection
