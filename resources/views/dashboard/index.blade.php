@extends('dashboard.layouts.main')

@section('container')
    <main class="content">
        <div class="container-fluid p-0">
            <h1 class="h3 mb-1"><strong>Dashboard</strong></h1>
            <div class="row">

                <div class="col-12 col-md-6 col-xxl-3 d-flex order-1 order-xxl-1">
                    <div class="card flex-fill">
                        <div class="card-header">

                            <h5 class="card-title mb-0">Calendar</h5>
                        </div>
                        <div class="card-body d-flex">
                            <div class="align-self-center w-100">
                                <div class="chart">
                                    <div id="datetimepicker-dashboard"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid px-2">
                    <div class="row mt-4">
                        <div class="col-xl-4 col-md-6">
                            <div class="card shadow mb-4">
                                <div class="card-body">
                                    <h1></h1>Prestasi
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small link-dark stretched-link" href="{{ route('prestasi.index') }}">Kelola Prestasi</a>
                                    <div class="small"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="card shadow mb-4">
                                <div class="card-body">
                                    <h1></h1>fasilitas
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small link-dark stretched-link" href="{{ route('kategoris.index') }}">Kelola fasilitas</a>
                                    <div class="small"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="card shadow mb-4">
                                <div class="card-body">
                                    <h1></h1>Guru
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small link-dark stretched-link" href="{{ route('guru.index') }}">Kelola Guru</a>
                                    <div class="small"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="card shadow mb-4">
                                <div class="card-body">
                                    <h1></h1> Gallery
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small link-dark stretched-link" href="{{ route('gallery.index') }}">Kelola Gallery</a>
                                    <div class="small"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>       
                        <div class="col-xl-4 col-md-6">
                            <div class="card shadow mb-4">
                                <div class="card-body">
                                    <h1></h1> Jumlah Siswa
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small link-dark stretched-link" href="{{ route('jumlah.index') }}">Kelola Jumlah Siswa</a>
                                    <div class="small"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>  
                        <div class="col-xl-4 col-md-6">
                            <div class="card shadow mb-4">
                                <div class="card-body">
                                    <h1></h1> Akreditasi
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small link-dark stretched-link" href="{{ route('akreditasi.index') }}">Kelola AKreditasi</a>
                                    <div class="small"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>     
                        <div class="col-xl-4 col-md-6">
                            <div class="card shadow mb-4">
                                <div class="card-body">
                                    <h1></h1> Admin
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small link-dark stretched-link" href="/dashboard/admin">Kelola Admin</a>
                                    <div class="small"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>          
                        <div class="col-xl-4 col-md-6">
                            <div class="card shadow mb-4">
                                <div class="card-body">
                                    <h1></h1>Pengumuman
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small link-dark stretched-link" href="{{ route('pengumuman.index') }}">Kelola Pengumuman</a>
                                    <div class="small"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>  
            </div>
        </div>
    </main>
   
@endsection

@push('calendar')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var date = new Date(Date.now());
        var defaultDate = date.getUTCFullYear() + "-" + (date.getUTCMonth() + 1) + "-" + date.getUTCDate();
        document.getElementById("datetimepicker-dashboard").flatpickr({
            inline: true,
            prevArrow: "<span title=\"Previous month\">&laquo;</span>",
            nextArrow: "<span title=\"Next month\">&raquo;</span>",
            defaultDate: defaultDate
        });
    });
</script>
@endpush