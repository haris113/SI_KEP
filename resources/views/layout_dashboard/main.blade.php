<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>{{ $title }}</title>

    <!-- Fonts -->
    <link href="/Admin_Template/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,800,900" rel="stylesheet">

    <!-- SB Admin -->
    <link href="/Admin_Template/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- DataTables -->
    <link href="/Admin_Template/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <!-- SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body id="page-top">

<div id="wrapper">

    @php $role = Auth::user()->role->role ?? ''; @endphp

    @if ($role === 'admin')
        @include('sidebar_dashboard.sidebar_admin')
    @elseif ($role === 'ketua')
        @include('sidebar_dashboard.sidebar_ketua')
    @elseif ($role === 'divisi keuangan')
        @include('sidebar_dashboard.sidebar_keuangan')
    @elseif ($role === 'divisi upja')
        @include('sidebar_dashboard.sidebar_upja')
    @elseif ($role === 'anggota')
        @include('sidebar_dashboard.sidebar_anggota')
    @endif

    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>

            <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search...">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form>

            <ul class="navbar-nav ml-auto">

                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                       data-toggle="dropdown">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                            {{ \Str::of(ucwords(strtolower(Auth::user()->nama ?? 'User')))->limit(30, '') }}
                        </span>
                        <img class="img-profile rounded-circle" src="/Admin_Template/img/undraw_profile.svg">
                    </a>

                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                         aria-labelledby="userDropdown">

                        <a class="dropdown-item" href="{{ route('profile') }}">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i> Profile
                        </a>

                        <a href="#" id="logoutBtn" class="dropdown-item">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Logout
                        </a>

                        <form id="logoutForm" action="{{ route('logout') }}" method="POST" style="display:none;">
                            @csrf
                        </form>

                    </div>
                </li>

            </ul>
        </nav>

        @yield('content')

        <footer class="sticky-footer bg-white">
            <div class="container my-auto text-center">
                <span>Copyright © <span id="year"></span> SI-KEP</span>
            </div>
        </footer>

    </div>
</div>


<!-- JS CORE (Harus satu kali saja) -->
<script src="/Admin_Template/vendor/jquery/jquery.min.js"></script>
<script src="/Admin_Template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/Admin_Template/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- SB Admin -->
<script src="/Admin_Template/js/sb-admin-2.min.js"></script>

<!-- DataTables -->
<script src="/Admin_Template/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="/Admin_Template/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- DataTables Init -->
<script>
    $(document).ready(function () {
        $('#dataTable').DataTable();
    });
</script>

<!-- SweetAlert, Logout -->
<script>
    document.getElementById("year").textContent = new Date().getFullYear();

    document.getElementById('logoutBtn').addEventListener('click', function (e) {
        e.preventDefault();
        Swal.fire({
            title: 'Yakin ingin logout?',
            text: "Kamu akan keluar dari akun ini.",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Logout',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('logoutForm').submit();
            }
        });
    });
</script>

<script>
// Tombol Batal
document.getElementById('btnBatal').addEventListener('click', function() {
    Swal.fire({
        title: 'Yakin ingin membatalkan?',
        text: "Perubahan yang sudah kamu buat tidak akan disimpan!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Ya, batal!',
        cancelButtonText: 'Tidak'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = "{{ url('anggota/anggota') }}";
        }
    });
});

// Tombol Simpan
document.getElementById('btnSimpan').addEventListener('click', function() {
    Swal.fire({
        title: 'Simpan Data?',
        text: "Pastikan semua data sudah benar.",
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#28a745',
        cancelButtonColor: '#6c757d',
        confirmButtonText: 'Ya, simpan!',
        cancelButtonText: 'Tidak'
    }).then((result) => {
        if (result.isConfirmed) {
            // Submit form
            document.querySelector('form').submit();
        }
    });
});
</script>

{{-- SweetAlert2 --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    function saveConfirm() {
        Swal.fire({
            title: "Yakin ingin menyimpan?",
            icon: "question",
            showCancelButton: true,
            confirmButtonText: "Ya, Simpan",
            cancelButtonText: "Batal",
        }).then((result) => {
            if (result.isConfirmed) {
                document.querySelector("form").submit();
            }
        });
    }
</script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</body>
</html>
