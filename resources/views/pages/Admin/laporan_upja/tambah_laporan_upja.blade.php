@extends('layout_dashboard.main')

@section('content')
<div id="content">
    <div class="container-fluid">

        <h4 class="page-title">{{ $judul }}</h4>

        <div class="row">
            <div class="col-md-12">
                <div class="card card-with-nav">

                    <form action="{{ route('admin.tambah_laporan_upja') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Periode</label>
                        <input type="text" name="periode" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Tanggal Laporan</label>
                        <input type="date" name="tanggal_laporan" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Total Pendapatan</label>
                        <input type="number" name="total_pendapatan" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Total Pengeluaran</label>
                        <input type="number" name="total_pengeluaran" class="form-control" required>
                    </div>

                    <button class="btn btn-success">Simpan</button>
                    <a href="{{ route('admin.laporan_upja') }}" class="btn btn-secondary">Kembali</a>
                    </form>


                </div>
            </div>
        </div>

    </div>
</div>
@endsection
