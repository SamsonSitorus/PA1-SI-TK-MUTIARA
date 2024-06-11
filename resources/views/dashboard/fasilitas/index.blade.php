    @extends('dashboard.layouts.main')

    @section('container')
    <main class="content">
        <div class="container-fluid p-0">

            <h1 class="h3 mb-3"><strong>Data Fasilitas</strong></h1>

            <div class="row">
                <div class="col-12">
                    <main class="content">
                        <div class="container-fluid p-0">
                            <h1 class="h3 mb-3"><strong>Fasilitas di Kategori: {{ $kategori->name }}</strong></h1>



                    <div class="card flex-fill w-100 p-3">
                        <h5 class="card-title mb-3">Daftar fasilitas</h5>
                        <div class="col-lg-offset-2 col-lg-10">
                            <a href="{{ route('fasilitas.create', $kategori->id) }}" class="btn btn-primary"><i data-feather="plus-circle"></i>Tambah Fasilitas Baru</a>
                            <div>
                                @if (session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
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
                                <th>Nama</th>
                                <th>Deskripsi</th>
                                <th>Gambar</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($fasilitas as $key => $fasilitas)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $fasilitas->name }}</td>
                                <td>{{ Str::limit($fasilitas->description, 50) }}</td> <!-- Limit the description length -->
                                <td>
                                    @if ($fasilitas->image)
                                        <img src="{{ asset('fasilitass/' . $fasilitas->image) }}" style="width: 200px; height: auto;" alt="{{ $fasilitas->name }}">
                                    @else
                                        <span class="text-muted">Tidak ada gambar</span>
                                    @endif
                                </td>
                                <td><a href="{{ route('fasilitas.edit', ['fasilitas' => $fasilitas->id]) }}" class="btn btn-warning btn-sm">
                                    <i data-feather="edit-2"></i>
                                </a>
                                <livewire:delete-fasilitas :id="$fasilitas->id" />
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                       
                    </table>
                </div>
            </div>
        </div>
    </main>
    @endsection
