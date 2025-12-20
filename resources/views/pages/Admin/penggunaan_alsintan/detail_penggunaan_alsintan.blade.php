@extends('layout_dashboard.main')

@section('content')
<div class="container-fluid">

    <h4 class="page-title">{{ $judul }}</h4>

    <div class="card">
        <div class="card-body">

            {{-- ALSINTAN --}}
            <div class="form-group mt-3">
                <label>Alsintan</label>
                <input type="text"
                       class="form-control"
                       value="{{ $penggunaan->alsintan->nama_alat ?? '-' }}"
                       readonly>
            </div>

            {{-- NAMA PELANGGAN --}}
            <div class="form-group mt-3">
                <label>Nama Pelanggan</label>
                <input type="text"
                       class="form-control"
                       value="{{ $penggunaan->nama_pelanggan ?? '-' }}"
                       readonly>
            </div>

            {{-- ANGGOTA (JIKA ADA) --}}
            <div class="form-group mt-3">
                <label>Anggota</label>
                <input type="text"
                       class="form-control"
                       value="{{ $penggunaan->anggota->nama ?? '-' }}"
                       readonly>
            </div>

            {{-- TANGGAL MULAI --}}
            <div class="form-group mt-3">
                <label>Tanggal Mulai</label>
                <input type="text"
                       class="form-control"
                       value="{{ $penggunaan->tanggal_mulai ?? '-' }}"
                       readonly>
            </div>

            {{-- TANGGAL SELESAI --}}
            <div class="form-group mt-3">
                <label>Tanggal Selesai</label>
                <input type="text"
                       class="form-control"
                       value="{{ $penggunaan->tanggal_selesai ?? '-' }}"
                       readonly>
            </div>

            {{-- LOKASI LAHAN --}}
            <div class="form-group mt-3">
                <label>Lokasi Lahan</label>
                <input type="text"
                       class="form-control"
                       value="{{ $penggunaan->lokasi_lahan ?? '-' }}"
                       readonly>
            </div>

            {{-- LUAS LAHAN --}}
            <div class="form-group mt-3">
                <label>Luas Lahan</label>
                <input type="text"
                       class="form-control"
                       value="{{ $penggunaan->luas_lahan ?? '-' }}"
                       readonly>
            </div>

            {{-- HASIL PANEN --}}
            <div class="form-group mt-3">
                <label>Hasil Panen</label>
                <input type="text"
                       class="form-control"
                       value="{{ $penggunaan->hasil_panen ?? '-' }}"
                       readonly>
            </div>

            {{-- STATUS --}}
            <div class="form-group mt-3">
                <label>Status</label>
                <input type="text"
                       class="form-control"
                       value="{{ $penggunaan->status ?? '-' }}"
                       readonly>
            </div>

            {{-- BUTTON --}}
            <div class="mt-4">
                <a href="{{ route('admin.penggunaan_alsintan') }}" class="btn btn-danger">
                    Kembali
                </a>
            </div>

        </div>
    </div>

</div>
@endsection
