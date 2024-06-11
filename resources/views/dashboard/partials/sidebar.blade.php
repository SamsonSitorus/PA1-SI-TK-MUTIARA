<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="/dashboard">
            <img src="{{ asset('img/logo.png ') }}" alt="" class="brand-image img-circle elevation-3" height="40px" width="40px"
            style="opacity: .8">   
             <span class="align-middle">TK Mutiara Balige</span>
        </a>
        <ul class="sidebar-nav">
            <li class="sidebar-item {{ Request::is('dashboard') ? 'active' : '' }}">
                <a class="sidebar-link" href="/dashboard">
                    <i class="align-middle" data-feather="grid"></i> <span class="align-middle">Dashboard</span>
                </a>
            </li>

            <li class="sidebar-header">
                Data Halaman
            </li>
            <li class="sidebar-item {{ Request::is('prestasi*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('prestasi.index') }}">
                    <i class="align-middle" data-feather="file-text"></i> 
                    <span class="align-middle">prestasi</span>
                </a>
            </li>
            <li class="sidebar-item {{ Request::is('kategoris*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('kategoris.index') }}">
                    <i class="align-middle" data-feather="trello"></i> 
                    <span class="align-middle">fasilitas</span>
                </a>
            </li>
            <li class="sidebar-item {{ Request::is('guru*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('guru.index') }}">
                    <i class="align-middle" data-feather="users"></i> <span class="align-middle">Guru</span>
                </a>
            </li>
            <li class="sidebar-item {{ Request::is('galerry*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('gallery.index') }}">
                    <i class="align-middle" data-feather="image"></i> <span class="align-middle">Gallery</span>
                </a>
            </li>
            <li class="sidebar-item {{ Request::is('pengumuman*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('pengumuman.index') }}">
                    <i class="align-middle" data-feather="clipboard"></i> <span class="align-middle">Pengumuman</span>
                </a>
            </li>
            <li class="sidebar-item {{ Request::is('jumlah*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('jumlah.index') }}">
                    <i class="align-middle" data-feather="plus"></i> <span class="align-middle">Jumlah Siswa</span>
                </a>
            </li>
            <li class="sidebar-item {{ Request::is('akreditasi*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('akreditasi.index') }}">
                    <i class="align-middle" data-feather="plus"></i> <span class="align-middle">Akreditasi</span>
                </a>
            </li>
        
            <li class="sidebar-header">
                Data Administrator
            </li>

            <li class="sidebar-item {{ Request::is('dashboard/admin*') ? 'active' : '' }}">
                <a class="sidebar-link" href="/dashboard/admin">
                    <i class="align-middle" data-feather="user-check"></i> <span class="align-middle">Admin</span>
                </a>
            </li>

        </ul>

    </div>
</nav>
