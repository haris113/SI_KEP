@php
    // Jika $page tidak dikirim dari controller, isi default dengan string kosong
    $page = $page ?? '';
@endphp

<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SI_KEP</div>
    </a>

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ $page === 'Beranda' ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('/admin/dashboard') }}">
            <i class="fa-solid fa-house"></i>
            <span>Beranda</span>
        </a>
    </li>

    <!-- Nav Item - Divisi Keuangan -->
    <li class="nav-item {{ in_array($page, ['Laporan Keuangan', 'Penyusutan', 'Pinjaman']) ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseKeuangan"
            aria-expanded="{{ in_array($page, ['Penyusutan']) ? 'true' : 'false' }}"
            aria-controls="collapseKeuangan">
            <i class="fa-solid fa-wallet fa-fw"></i>
            <span>Divisi Keuangan</span>
        </a>
        <div id="collapseKeuangan" class="collapse {{ in_array($page, ['Laporan Keuangan', 'Penyusutan', 'Pinjaman']) ? 'show' : '' }}" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item {{ $page === 'Penyusutan' ? 'active' : '' }}" href="#">Penyusutan</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Divisi UPJA -->
    <li class="nav-item {{ in_array($page, ['Data Alsintan', 'Perawatan Alsintan', 'Penggunaan Alsintan', 'Laporan UPJA', 'Operator']) ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUpja"
            aria-expanded="{{ in_array($page, ['Data Alsintan', 'Perawatan Alsintan', 'Penggunaan Alsintan', 'Laporan UPJA', 'Operator']) ? 'true' : 'false' }}"
            aria-controls="collapseUpja">
            <i class="fa-solid fa-tractor fa-fw"></i>
            <span>Divisi UPJA</span>
        </a>
        <div id="collapseUpja" class="collapse {{ in_array($page, ['Data Alsintan', 'Perawatan Alsintan', 'Penggunaan Alsintan', 'Laporan UPJA', 'Operator']) ? 'show' : '' }}" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item {{ $page === 'Data Alsintan' ? 'active' : '' }}" href="#">Data Alsintan</a>
                <a class="collapse-item {{ $page === 'Perawatan Alsintan' ? 'active' : '' }}" href="#">Perawatan Alsintan</a>
                <a class="collapse-item {{ $page === 'Penggunaan Alsintan' ? 'active' : '' }}" href="#">Penggunaan Alsintan</a>
                <a class="collapse-item {{ $page === 'Laporan UPJA' ? 'active' : '' }}" href="#">Laporan UPJA</a>
                <a class="collapse-item {{ $page === 'Operator' ? 'active' : '' }}" href="#">Operator</a>
            </div>
        </div>
    </li>

    <!-- Sidebar Toggler -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
