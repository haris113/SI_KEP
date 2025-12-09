@extends('layout_dashboard.main')

@section('content')
<div id="content">
    <div class="container-fluid">

        <h4 class="page-title">{{ $judul }}</h4>

        <div class="row">
            <div class="col-md-12">
                <div class="card card-with-nav">

                    <form action="#" method="POST">
                        @csrf
                        <div class="card-body">

                            {{-- NAMA --}}
                            <div class="form-group form-group-default mt-3">
                                <label>Jenis Dana</label>
                                <input type="text" class="form-control" value="{{ $laporan_keuangan->jenis }}" readonly>
                            </div>

                            {{-- ALAMAT --}}
                            <div class="form-group form-group-default mt-3">
                                <label>Jumlah Dana</label>
                                <input type="text" class="form-control" value="{{ $laporan_keuangan->jumlah }}" readonly>
                            </div>

                            {{-- NO HP --}}
                            <div class="form-group form-group-default mt-3">
                                <label>Keterangan</label>
                                <input type="text" class="form-control" value="{{ $laporan_keuangan->keterangan }}" readonly>
                            </div>

                            {{-- TANGGAL TRANSAKSI --}}
                            <div class="form-group form-group-default mt-3">
                                <label>Tanggal Transaksi</label>
                                <input type="text" class="form-control" value="{{ $laporan_keuangan->tanggal }}" readonly>
                            </div>

                            <div class="text-right mt-3">
                                <a href="{{ url('admin/laporan_keuangan') }}" class="btn btn-danger">Kembali</a>
                            </div>

                        </div>
                    </form>

                </div>
            </div>
        </div>

    </div>
</div>
@endsection
