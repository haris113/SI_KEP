@extends('layout_dashboard.main')

@section('content')
<div class="container-fluid">

    <h4 class="page-title">{{ $judul }}</h4>

    <div class="card">
        <div class="card-body">

            <div class="form-group mt-3">
                <label>Nama Alsintan</label>
                <input type="text" class="form-control"
                       value="{{ $penyusutan->alsintan->nama_alat }}" readonly>
            </div>

            <div class="form-group mt-3">
                <label>Tahun</label>
                <input type="text" class="form-control" value="{{ $penyusutan->tahun }}" readonly>
            </div>

            <div class="form-group mt-3">
                <label>Nilai Perolehan</label>
                <input type="text" class="form-control"
                       value="Rp {{ number_format($penyusutan->nilai_perolehan,0,',','.') }}" readonly>
            </div>

            <div class="form-group mt-3">
                <label>Nilai Penyusutan</label>
                <input type="text" class="form-control"
                       value="Rp {{ number_format($penyusutan->nilai_penyusutan,0,',','.') }}" readonly>
            </div>

            <div class="form-group mt-3">
                <label>Frekuensi</label>
                <input type="text" class="form-control"
                       value="{{ $penyusutan->frekuensi }}x" readonly>
            </div>

            <div class="form-group mt-3">
                <label>Tanggal Dibuat</label>
                <input type="text" class="form-control"
                       value="{{ $penyusutan->tanggal_dibuat }}" readonly>
            </div>

            <div class="text-right mt-3">
                <a href="{{ url('admin/penyusutan') }}" class="btn btn-danger">
                    Kembali
                </a>
            </div>

        </div>
    </div>

</div>
@endsection
