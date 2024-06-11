@extends('dashboard.layouts.main')

@section('container')
<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3"><strong>Data Prestasi</strong></h1>

        <div class="row">
            <div class="col-12">
                <div class="card flex-fill w-100 p-3">
                    <h5 class="card-title mb-3">Daftar Prestasi</h5>
                    <div class="col-lg-offset-2 col-lg-10">
                        <a href="{{ route('prestasi.create') }}" class="btn btn-primary"><i data-feather="plus-circle"></i>Tambah Prestasi Baru</a>
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
                        <th>Judul</th>
                        <th>Konten</th>
                        <th>URL</th>
                        <th>Gambar</th>
                        <th>Tanggal</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($prestasis as $key => $prestasi)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $prestasi->title }}</td>
                        <td>{{ Str::limit($prestasi->content, 50) }}</td>
                        <td>
                            @if($prestasi->url)
                                <a href="{{ $prestasi->url }}" target="_blank">{{ Str::limit($prestasi->url, 30) }}</a>
                            @else
                                <span class="text-muted">Tidak ada URL</span>
                            @endif
                        </td>
                        <td>
                            @if ($prestasi->image)
                                <img src="{{ asset('prestasii/' . $prestasi->image) }}" style="width: 200px; height: auto;" alt="Gambar prestasi">
                            @else
                                <span class="text-muted">Tidak ada gambar</span>
                            @endif
                        </td>
                        <td>
                            {{ Carbon\Carbon::parse($prestasi->date)->format('d M Y') }}  
                        </td>
                        <td>
                            <a href="{{ route('prestasi.edit', $prestasi->id) }}" class="btn btn-warning btn-sm">
                                <i data-feather="edit-2"></i>
                            </a>
                            <livewire:delete-prestasi :id="$prestasi->id" />
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Konten</th>
                        <th>URL</th>
                        <th>Gambar</th>
                        <th>Tanggal</th>
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
            $('#prestasiTable').DataTable();  <!-- Inisialisasi DataTables -->
        });
    </script>
@endsection
@endsection
