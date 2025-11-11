<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/Admin_Template/index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SI_KEP</div>
    </a>

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ $page == 'Beranda' ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('Admin') }}">
            <i class="fa-solid fa-house"></i>
            <span>Beranda</span>
        </a>
    </li>

    <!-- Nav Item - Kelola Akun -->
    <li class="nav-item">
        <a class="nav-link" href="{{ url('Admin/KelolaAkun') }}">
            <i class="fa-solid fa-user-gear fa-fw"></i>
            <span>Kelola Akun</span>
        </a>
    </li>

    <!-- Nav Item - Anggota -->
    <li class="nav-item">
        <a class="nav-link" href="{{ url('Admin/Anggota') }}">
            <i class="fa-solid fa-users fa-fw"></i>
            <span>Anggota</span>
        </a>
    </li>

    <!-- Nav Item - Kegiatan -->
    <li class="nav-item">
        <a class="nav-link" href="{{ url('Admin/Kegiatan') }}">
            <i class="fa-solid fa-chart-line fa-fw"></i>
            <span>Kegiatan</span>
        </a>
    </li>

    <!-- Nav Item - Kelembagaan -->
    <li class="nav-item">
        <a class="nav-link" href="{{ url('Admin/Kelembagaan') }}">
            <i class="fa-solid fa-building-columns fa-fw"></i>
            <span>Kelembagaan</span>
        </a>
    </li>

    <!-- Nav Item - Arsip Dokumen -->
    <li class="nav-item">
        <a class="nav-link" href="{{ url('Admin/Arsip') }}">
            <i class="fa-solid fa-file-lines fa-fw"></i>
            <span>Arsip Dokumen</span>
        </a>
    </li>

    <!-- Nav Item - Divisi Keuangan -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseKeuangan"
            aria-expanded="true" aria-controls="collapseKeuangan">
            <i class="fa-solid fa-wallet fa-fw"></i>
            <span>Divisi Keuangan</span>
        </a>
        <div id="collapseKeuangan" class="collapse" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="#">Laporan Keuangan</a>
                <a class="collapse-item" href="#">Penyusutan</a>
                <a class="collapse-item" href="#">Pinjaman</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Divisi UPJA -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUpja"
            aria-expanded="true" aria-controls="collapseUpja">
            <i class="fa-solid fa-tractor fa-fw"></i>
            <span>Divisi UPJA</span>
        </a>
        <div id="collapseUpja" class="collapse" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="#">Data Alsintan</a>
                <a class="collapse-item" href="#">Perawatan Alsintan</a>
                <a class="collapse-item" href="#">Penggunaan Alsintan</a>
                <a class="collapse-item" href="#">Laporan UPJA</a>
                <a class="collapse-item" href="#">Operator</a>
            </div>
        </div>
    </li>

    <!-- Sidebar Toggler -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
