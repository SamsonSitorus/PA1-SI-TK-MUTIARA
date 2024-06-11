@extends('layouts.main')

@section('container')
<!-- Search Results -->
<div class="container mt-5">
    <h1 class="text-center mb-4" style="font-family: Bookman Old Style">Hasil Pencarian </h1>
    @if ($results->isEmpty())
        <div class="alert alert-info">Kata Kunci Tidak Ditemukan.</div>
    @else
        <div class="row">
            @foreach ($results as $result)
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title" >
                                <a href="/{{ $result->type }}/{{ $result->id }}">{{ $result->name }}</a>
                            </h5>
                            <p class="card-text"><small class="text-muted">({{ $result->type }})</small></p>
                     
                            <a href="/{{ $result->type }}/{{ $result->id }}" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection