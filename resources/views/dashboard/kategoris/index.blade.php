@extends('dashboard.layouts.main')

@section('container')
<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3"><strong>Daftar Kategori</strong></h1>

        <div class="row">
            <div class="col-12">
                <div class="card flex-fill w-100 p-3">
                    <h5 class="card-title mb-3">Pilih Kategori Terlebih dahulu</h5>
                    
                    <div class="mb-3">
                        {{-- Tampilkan tombol "Tambah Kategori" hanya jika jumlah kategori kurang dari 3 --}}
                        @if($kategoriCount < 3)
                            <a href="{{ route('kategoris.create') }}" class="btn btn-primary"><i data-feather="plus-circle"></i>Tambah Kategori</a>
                        @endif
                    </div>

                    <table class="table table-hover my-0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Kategori</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kategoris as $index => $kategori)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $kategori->name }}</td>
                                <td>
                                    <a href="{{ route('fasilitas.index', $kategori->id) }}" class="btn btn-primary">Lihat Fasilitas</a>
                                    <a href="{{ route('kategoris.edit', $kategori->id) }}" class="btn btn-warning btn-sm">
                                        <i data-feather="edit-2"></i>
                                    </a>
                                    {{--  <form action="{{ route('kategoris.destroy', $kategori->id) }}" method="post" style="display: inline;">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="text-danger border-0 bg-transparent" onclick="return confirm('Yakin ingin menghapus kategori ini?')">
                                            <i data-feather="trash-2"></i> Hapus
                                        </button>
                                    </form>
                                    --}}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Nama Kategori</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>

    </div>
</main>
@endsection
