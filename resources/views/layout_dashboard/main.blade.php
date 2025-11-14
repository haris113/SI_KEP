<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>{{ $title }}</title>

    <!-- Fonts & Template -->
    <link href="/Admin_Template/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,900" rel="stylesheet">
    <link href="/Admin_Template/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- DataTables -->
    <link href="/Admin_Template/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <!-- SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body id="page-top">

    <div id="wrapper">

        <!-- SIDEBAR -->
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

        <!-- CONTENT WRAPPER -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- TOPBAR -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small"
                            placeholder="Search for..." aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>

                <!-- User Info -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown no-arrow">

                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                {{ \Illuminate\Support\Str::limit(ucwords(Auth::user()->nama ?? 'User'), 30, '') }}
                            </span>

                            <img class="img-profile rounded-circle"
                                src="/Admin_Template/img/undraw_profile.svg">
                        </a>

                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                            aria-labelledby="userDropdown">

                            <a class="dropdown-item" href="{{ route('profile') }}">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Profile
                            </a>

                            <a class="dropdown-item" href="#" id="logoutBtn">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>

                            <form id="logoutForm" action="{{ route('logout') }}" method="POST" style="display:none;">
                                @csrf
                            </form>

                        </div>

                    </li>
                </ul>

            </nav>

            <!-- MAIN CONTENT -->
            @yield('content')

            <!-- FOOTER -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright © <span id="year"></span> SI-KEP</span>
                    </div>
                </div>
            </footer>

        </div>
    </div>

    <!-- SCROLL TO TOP -->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- JS -->
    <script src="/Admin_Template/vendor/jquery/jquery.min.js"></script>
    <script src="/Admin_Template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/Admin_Template/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="/Admin_Template/js/sb-admin-2.min.js"></script>

    <!-- DataTables -->
    <script src="/Admin_Template/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="/Admin_Template/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- FIX DATATABLE (DISABLE SORT NO) -->
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable({
                columnDefs: [
                    { orderable: false, targets: 0 },   // Disable sort NO
                    { orderable: false, targets: -1 }   // Disable sort Aksi (last column)
                ]
            });
        });
    </script>

    <!-- YEAR -->
    <script>
        document.getElementById("year").textContent = new Date().getFullYear();
    </script>

    <!-- SWEETALERT LOGOUT -->
    <script>
        document.getElementById('logoutBtn').addEventListener('click', function(e) {
            e.preventDefault();

            Swal.fire({
                title: 'Yakin ingin logout?',
                text: "Kamu akan keluar dari akun ini.",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, logout!'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('logoutForm').submit();
                }
            });
        });

        @if (session('success'))
            Swal.fire({
                icon: 'success',
                title: '{{ session('success') }}',
                timer: 1500,
                showConfirmButton: false
            });
        @endif

        @if (session('error'))
            Swal.fire({
                icon: 'error',
                title: 'Akses Ditolak!',
                text: '{{ session('error') }}'
            });
        @endif
    </script>

</body>
</html>
