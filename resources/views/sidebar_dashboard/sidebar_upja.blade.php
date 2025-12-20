@php
    // Jika $page tidak dikirim dari controller, isi default dengan string kosong
    $page = $page ?? '';
@endphp

<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
       <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/admin/dashboard') }}">
    <img src="{{ asset('Admin_Template/img/logoSi_KEP.png') }}" alt="Logo" style="width: 48px;">
</a>

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ $page === 'Beranda' ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('/admin/dashboard') }}">
            <i class="fa-solid fa-house"></i>
            <span>Beranda</span>
        </a>
    </li>

    <!-- Nav Item - Alsintan -->
    <li class="nav-item {{ $page === 'alsintan' ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('Divisi_Upja/alsintan') }}">
            <i class="fa-solid fa-tractor fa-fw"></i>
            <span>Data Alsintan</span>
        </a>
    </li>

    <!-- Nav Item - Perawatan Alsintan -->
    <li class="nav-item {{ $page === 'perawatan' ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('Divisi_Upja/perawatan') }}">
            <i class="fa-solid fa-screwdriver-wrench"></i>
            <span>Perawatan Alsintan</span>
        </a>
    </li>

    <!-- Nav Item - Penggunaan Alsintan -->
    <li class="nav-item {{ $page === 'penggunaan_alsintan' ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('Divisi_Upja/penggunaan_alsintan') }}">
            <i class="fa-solid fa-calendar-days"></i>
            <span>Penggunaan Alsintan</span>
        </a>
    </li>

    <!-- Nav Item - Penyusutan -->
    <li class="nav-item {{ $page === 'penyusutan' ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('Divisi_Upja/penyusutan') }}">
            <i class="fa-solid fa-chart-line"></i>
            <span>Penyusutan Alsintan</span>
        </a>
    </li>

    <!-- Nav Item - Laporan UPJA -->
    <li class="nav-item {{ $page === 'laporan_upja' ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('Divisi_Upja/laporan_upja') }}">
            <i class="fa-solid fa-file fa-fw"></i>
            <span>Laporan UPJA</span>
        </a>
    </li>
   

    <!-- Sidebar Toggler -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
