@extends('layout_dashboard.main')

@section('content')
<div class="container-fluid">

    <h4 class="page-title">{{ $judul }}</h4>

    <div class="card">
        <div class="card-body">

            <div class="form-group mt-3">
                <label>Nama Alsintan</label>
                <input type="text" class="form-control" value="{{ $perawatan->alsintan->nama_alat }}" readonly>
            </div>

            <div class="form-group mt-3">
                <label>Tanggal Perawatan</label>
                <input type="text" class="form-control" value="{{ $perawatan->tanggal_perawatan }}" readonly>
            </div>

            <div class="form-group mt-3">
                <label>Jenis Perawatan</label>
                <input type="text" class="form-control" value="{{ $perawatan->jenis_perawatan }}" readonly>
            </div>

            <div class="form-group mt-3">
                <label>Biaya</label>
                <input type="text" class="form-control"
                       value="Rp {{ number_format($perawatan->biaya,0,',','.') }}" readonly>
            </div>

            <div class="form-group mt-3">
                <label>Keterangan</label>
                <textarea class="form-control" rows="3" readonly>{{ $perawatan->keterangan }}</textarea>
            </div>

            <div class="text-right mt-3">
                <a href="{{ url('admin/perawatan') }}" class="btn btn-danger">
                    Kembali
                </a>
            </div>

        </div>
    </div>

</div>
@endsection
