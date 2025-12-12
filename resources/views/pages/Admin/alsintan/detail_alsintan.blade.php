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
                                <label>Nama Peminjam</label>
                                <input type="text" class="form-control" value="{{ $pinjaman->id_anggota }}" readonly>
                            </div>

                            {{-- JUMLAH PINJAMAN --}}
                            <div class="form-group form-group-default mt-3">
                                <label>Jumlah Pinjaman</label>
                                <input type="text" class="form-control" value="{{ $pinjaman->jumlah }}" readonly>
                            </div>

                            {{-- KETERANGAN --}}
                            <div class="form-group form-group-default mt-3">
                                <label>Keterangan</label>
                                <input type="text" class="form-control" value="{{ $pinjaman->keterangan }}" readonly>
                            </div>

                            {{-- STATUS --}}
                            <div class="form-group form-group-default mt-3">
                                <label>Status</label>
                                <input type="text" class="form-control" value="{{ $pinjaman->status }}" readonly>
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
