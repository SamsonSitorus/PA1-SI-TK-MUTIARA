@extends('dashboard.layouts.main')

@section('container')
<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3"><strong>Data Gallery</strong></h1>

        <div class="row">
            <div class="col-12 ">
                <div class="card flex-fill w-100 p-3">
                    <h5 class="card-title mb-3">Daftar Data</h5>
                    <div class="col-lg-offset-2 col-lg-10">
                        <a href="{{ route('gallery.create') }}" class="btn btn-primary"><i data-feather="plus-circle"></i>Tambah Galeri Baru</a>
                        <div>
                            @if (session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
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
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($galleries as $key => $gallery)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $gallery->title }}</td>
                            <td>{{ Str::limit($gallery->content, 50) }}</td>
                            <td>{{ $gallery->url }}</td>
                            <td>
                                @if ($gallery->image)
                                    <img src="{{ asset('galleryy/' . $gallery->image) }}" style="width: 200px; height: auto;" alt="{{ $gallery->title }}">
                                @else
                                    <span class="text-muted">Tidak ada gambar</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('gallery.edit', $gallery->id) }}" class="btn btn-warning btn-sm">
                                    <i data-feather="edit-2"></i>
                                </a>
                                <livewire:delete-gallery :id="$gallery->id" />
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
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection
