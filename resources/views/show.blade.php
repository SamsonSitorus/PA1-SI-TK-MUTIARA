@extends('layouts.main')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h3>{{ $fasilitas->nama }}</h3>
                </div>
                <div class="card-body">
                    <div class="portfolio-info">
                        <h4>{{ $fasilitas->name }}</h4>
                    </div>
                    <img src="{{ asset('fasilitass/' . $fasilitas->image) }}" class="img-fluid" alt="{{ $fasilitas->name }}">
                    <div class="portfolio-links">
                    </div>
                    <p>{{ $fasilitas->deskripsi }}</p>
                    <p>{{ Str::limit($fasilitas->description, 100) }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection