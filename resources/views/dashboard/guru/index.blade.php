@extends('dashboard.layouts.main')
@section('container')
    <main class="content">
        <div class="container-fluid p-0">

            <h1 class="h3 mb-3"><strong>Data Guru</strong></h1>

            <div class="row">
                <div class="col-12">
                    <div class="card flex-fill w-100 p-3">
                        <h5 class="card-title mb-3">Daftar Data</h5>
                        <div class="col-lg-offset-2 col-lg-10">
                            <a href="{{ route('guru.create') }}" class="btn btn-primary"><i
                                    data-feather="plus-circle"></i>Tambah Guru</a>
                            <div>
                                @if (session('success'))
                                    <div class="alert alert-success">{{ session('success') }}</div>
                                @endif
                                @if (session('error'))
                                    <div class="alert alert-danger">{{ session('error') }}</div>
                                @endif
                            </div>
                        </div>
                        <table class="table table-hover my-0" id="myTable"><br>
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>No. Telp</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Foto</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($gurus as $key => $guru)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $guru->name }}</td>
                                        <td>{{ $guru->alamat }}</td>
                                        <td>{{ $guru->no_telp }}</td>
                                        <td>{{ ucfirst($guru->jeniskelamin) }}</td>
                                        <td>
                                            @if ($guru->image)
                                                <img src="{{ asset('guruu/' . $guru->image) }}" style="width: 200px; height: auto;" alt="{{ $guru->name }}">
                                            @else
                                                <span class="text-muted">Tidak ada foto</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('guru.edit', $guru->id) }}" class="btn btn-warning btn-sm">
                                                <i data-feather="edit-2"></i>
                                            </a>
                                            <livewire:delete-guru :id="$guru->id" />
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>No. Telp</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Foto</th>
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
            $('#guruTable').DataTable(); < !--Inisialisasi DataTables-- >
        });
    </script>
@endsection
@endsection
