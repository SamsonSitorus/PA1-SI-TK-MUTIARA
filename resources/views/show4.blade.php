@extends('layouts.main')

@section('container')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                @if ($prestasi->image)
                    <img src="{{ asset('prestasii/' . $prestasi->image) }}" class="card-img-top" alt="Gambar prestasi">
                @else
                    <div class="card-img-top bg-light d-flex align-items-center justify-content-center" style="height: 300px;">
                        <p class="text-muted mb-0">Tidak ada gambar</p>
                    </div>
                @endif
                <div class="card-body">
                    <h2 class="card-title">{{ $prestasi->title }}</h2>
                    <p class="card-text">{{ $prestasi->content }}</p>
                    @if ($prestasi->url)
                        <a href="{{ $prestasi->url }}" target="_blank" class="btn btn-primary">Selengkapnya</a>
                    @else
                        <p class="text-muted">Tidak ada URL</p>
                    @endif
                </div>
                <div class="card-footer text-muted">
                    <small>{{ $prestasi->name }}</small>
                    <small>{{ Carbon\Carbon::parse($prestasi->date)->format('d M Y') }}</small>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection