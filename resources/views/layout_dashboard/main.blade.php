<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{ $title }}</title>

    <!-- Custom fonts for this template-->
    <link href="/Admin_Template/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/Admin_Template/css/sb-admin-2.min.css" rel="stylesheet">

        <!-- Custom styles for this page -->
    <link href="/Admin_Template/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <!-- SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body id="page-top">
    <div id="wrapper">

        <!-- Sidebar -->
        @php
            $role = Auth::user()->role->role ?? '';
        @endphp

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
        <!-- End Sidebar -->

        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Search -->
                <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                            aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>

                <!-- Navbar -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                {{ \Illuminate\Support\Str::of(ucwords(strtolower(Auth::user()->nama ?? 'User')))
                                    ->limit(30, '') }}
                            </span>

                            <img class="img-profile rounded-circle" src="/Admin_Template/img/undraw_profile.svg">
                        </a>

                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                            aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="{{ route('profile') }}">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i> Profile
                            {{-- </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i> Settings
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i> Activity Log
                            </a> --}}
                            {{-- <div class="dropdown-divider"></div> --}}

                            <!-- ✅ Tombol Logout SweetAlert -->
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
            <!-- End Topbar -->

            <!-- Main Content -->
            @yield('content')

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; <span id="year"></span> SI-KEPT</span>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <!-- Scroll to Top Button -->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- JS -->
    <script src="/Admin_Template/vendor/jquery/jquery.min.js"></script>
    <script src="/Admin_Template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/Admin_Template/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="/Admin_Template/js/sb-admin-2.min.js"></script>
    <script src="/Admin_Template/vendor/chart.js/Chart.min.js"></script>
    <script src="/Admin_Template/js/demo/chart-area-demo.js"></script>
    <script src="/Admin_Template/js/demo/chart-pie-demo.js"></script>
    <script src="/Admin_Template/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="/Admin_Template/vendor/datatables/dataTables.bootstrap4.min.js"></script>
     <script src="/Admin_Template/js/demo/datatables-demo.js"></script>
     <!-- Bootstrap core JavaScript-->
    <script src="/Admin_Template/vendor/jquery/jquery.min.js"></script>
    <script src="/Admin_Template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/Admin_Template/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="/Admin_Template/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="/Admin_Template/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="/Admin_Template/js/demo/datatables-demo.js"></script>



    <script>
    document.getElementById("year").textContent = new Date().getFullYear();

    // ✅ Logout pakai SweetAlert
    document.getElementById('logoutBtn').addEventListener('click', function (e) {
        e.preventDefault();
        Swal.fire({
            title: 'Yakin ingin logout?',
            text: "Kamu akan keluar dari akun ini.",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, logout!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('logoutForm').submit();
            }
        });
    });

    // ✅ Pesan Logout / Aksi Berhasil (dari controller)
    @if(session('success'))
    Swal.fire({
        icon: 'success',
        title: '{{ session('success') }}',
        showConfirmButton: false,
        timer: 1500
    });
    @endif

    // ✅ Pesan Error (dari middleware VerifikasiRole atau controller)
    @if(session('error'))
        Swal.fire({
            icon: 'error',
            title: 'Akses Ditolak!',
            text: '{{ session('error') }}',
            confirmButtonColor: '#d33',
            confirmButtonText: 'OK'
        });
    @endif

</script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</body>
</html>
