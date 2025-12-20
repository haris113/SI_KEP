@extends('layout_dashboard.main')

@section('content')
<div id="content">

    <!-- Page Content -->
    <div class="container-fluid">
        <div class="row text-center">

            <!-- Laporan Keuangan -->
            <div class="col-xl-3 col-md-6 mb-4">
                <a href="{{ url('admin/laporan_keuangan') }}" class="text-decoration-none text-dark">
                    <div class="card shadow-sm border-0 py-4 hover-shadow">
                        <div class="card-body">
                            <i class="fa-solid fa-money-bill-wave fa-2x mb-2 text-primary"></i>
                            <h6 class="font-weight-bold mb-0">Laporan Keuangan</h6>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Penyusutan -->
            <div class="col-xl-3 col-md-6 mb-4">
                <a href="{{ url('admin/penyusutan') }}" class="text-decoration-none text-dark">
                    <div class="card shadow-sm border-0 py-4 hover-shadow">
                        <div class="card-body">
                            <i class="fa-solid fa-chart-line fa-2x mb-2 text-success"></i>
                            <h6 class="font-weight-bold mb-0">Penyusutan</h6>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Pinjaman -->
            <div class="col-xl-3 col-md-6 mb-4">
                <a href="{{ url('admin/pinjaman') }}" class="text-decoration-none text-dark">
                    <div class="card shadow-sm border-0 py-4 hover-shadow">
                        <div class="card-body">
                            <i class="fa-solid fa-phone fa-2x mb-2 text-info"></i>
                            <h6 class="font-weight-bold mb-0">Pinjaman</h6>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Laporan UPJA -->
            <div class="col-xl-3 col-md-6 mb-4">
                <a href="{{ url('admin/laporan_upja') }}" class="text-decoration-none text-dark">
                    <div class="card shadow-sm border-0 py-4 hover-shadow">
                        <div class="card-body">
                            <i class="fa-solid fa-building fa-2x mb-2 text-warning"></i>
                            <h6 class="font-weight-bold mb-0">Laporan UPJA</h6>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Data Alsintan -->
            <div class="col-xl-3 col-md-6 mb-4">
                <a href="{{ url('admin/alsintan') }}" class="text-decoration-none text-dark">
                    <div class="card shadow-sm border-0 py-4 hover-shadow">
                        <div class="card-body">
                            <i class="fa-solid fa-tractor fa-2x mb-2 text-danger"></i>
                            <h6 class="font-weight-bold mb-0">Data Alsintan</h6>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Perawatan Alsintan -->
            <div class="col-xl-3 col-md-6 mb-4">
                <a href="{{ url('admin/perawatan') }}" class="text-decoration-none text-dark">
                    <div class="card shadow-sm border-0 py-4 hover-shadow">
                        <div class="card-body">
                            <i class="fa-solid fa-screwdriver-wrench fa-2x mb-2 text-secondary"></i>
                            <h6 class="font-weight-bold mb-0">Perawatan Alsintan</h6>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Penggunaan Alsintan -->
            <div class="col-xl-3 col-md-6 mb-4">
                <a href="{{ url('admin/penggunaan_alsintan') }}" class="text-decoration-none text-dark">
                    <div class="card shadow-sm border-0 py-4 hover-shadow">
                        <div class="card-body">
                            <i class="fa-solid fa-industry fa-2x mb-2 text-primary"></i>
                            <h6 class="font-weight-bold mb-0">Penggunaan Alsintan</h6>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Operator -->
            <div class="col-xl-3 col-md-6 mb-4">
                <a href="{{ url('admin/anggota') }}" class="text-decoration-none text-dark">
                    <div class="card shadow-sm border-0 py-4 hover-shadow">
                        <div class="card-body">
                            <i class="fa-solid fa-user-gear fa-2x mb-2 text-success"></i>
                            <h6 class="font-weight-bold mb-0">Anggota</h6>
                        </div>
                    </div>
                </a>
            </div>

        </div>
    </div>
</div>
@endsection
