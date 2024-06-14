@extends('layouts.main')

@section('container')

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    @if($pengumuman->file)
                    <a href="{{ Storage::url($pengumuman->file) }}" target="_blank">Lihat File</a>
                    @else
                    Tidak ada File
                    @endif
                    <div class="card-body">
                        <h2 class="card-title">{{ $pengumuman->title }}</h2>
                        <p class="card-text">{{ Str::limit($pengumuman->content, 1000) }}</p>
                    </div>
                    <div class="card-footer text-muted">
                        <small>{{ $pengumuman->title }}</small>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection