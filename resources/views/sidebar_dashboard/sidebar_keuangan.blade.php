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

    <!-- Nav Item - Divisi Keuangan -->
    <li class="nav-item {{ in_array($page, ['Laporan Keuangan', 'Pinjaman']) ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseKeuangan"
            aria-expanded="{{ in_array($page, ['Laporan Keuangan', 'Pinjaman']) ? 'true' : 'false' }}"
            aria-controls="collapseKeuangan">
            <i class="fa-solid fa-wallet fa-fw"></i>
            <span>Divisi Keuangan</span>
        </a>
        <div id="collapseKeuangan" class="collapse {{ in_array($page, ['Laporan Keuangan', 'Penyusutan', 'Pinjaman']) ? 'show' : '' }}" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item {{ $page === 'Laporan Keuangan' ? 'active' : '' }}" href="#">Laporan Keuangan</a>
                <a class="collapse-item {{ $page === 'Pinjaman' ? 'active' : '' }}" href="#">Pinjaman</a>
            </div>
        </div>
    </li>

    <!-- Sidebar Toggler -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
