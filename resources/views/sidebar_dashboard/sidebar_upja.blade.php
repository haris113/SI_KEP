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
                <a class="collapse-item {{ $page === 'Data Alsintan' ? 'active' : '' }}" href="{{ url('admin/alsintan') }}">Data Alsintan</a>
                <a class="collapse-item {{ $page === 'Operator' ? 'active' : '' }}" href="{{ url('admin/operator') }}">Operator</a>
                <a class="collapse-item {{ $page === 'Perawatan Alsintan' ? 'active' : '' }}" href="{{ url('admin/perawatan_alsintan') }}">Perawatan Alsintan</a>
                <a class="collapse-item {{ $page === 'Penggunaan Alsintan' ? 'active' : '' }}" href="{{ url('admin/penggunaan_alsintan') }}">Penggunaan Alsintan</a>
                <a class="collapse-item {{ $page === 'Penyusutan' ? 'active' : '' }}" href="{{ url('admin/penyusutan') }}">Penyusutan Alsintan</a>
                <a class="collapse-item {{ $page === 'Laporan UPJA' ? 'active' : '' }}" href="{{ url('admin/laporan_upja') }}">Laporan UPJA</a>
                
            </div>
        </div>
    </li>

    <!-- Sidebar Toggler -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
