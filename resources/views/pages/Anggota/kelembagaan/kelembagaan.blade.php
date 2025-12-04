@extends('layout_dashboard.main')

@section('content')

<div class="container-fluid">

    <br>
    <h2 class="h3 mb-2 text-gray-800">{{ $judul }}</h2>
    <br>

   <div class="card shadow mb-4">
    <div class="card-body">

        @foreach($kelembagaan as $item)
        <form action="#" method="POST">
            @csrf

            <div class="row">

                <div class="col-md-6 mb-3">
                    <label class="form-label">Nama Lembaga</label>
                    <input type="text" class="form-control" value="{{ $item->nama_lembaga }}" readonly>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Jenis Lembaga</label>
                    <input type="text" class="form-control" value="{{ $item->jenis_lembaga }}" readonly>
                </div>

                <div class="col-md-12 mb-3">
                    <label class="form-label">Alamat</label>
                    <textarea class="form-control" rows="2" readonly>{{ $item->alamat }}</textarea>
                </div>

                <div class="col-md-4 mb-3">
                    <label class="form-label">Tahun Berdiri</label>
                    <input type="number" class="form-control" value="{{ $item->tahun_berdiri }}" readonly>
                </div>

                <div class="col-md-4 mb-3">
                    <label class="form-label">Status Kelembagaan</label>
                    <input type="text" class="form-control" value="{{ $item->status_lembaga }}" readonly>
                </div>

                <div class="col-md-4 mb-3">
                    <label class="form-label">Nomor Registrasi</label>
                    <input type="text" class="form-control" value="{{ $item->nomer_registrasi }}" readonly>
                </div>

                <div class="col-md-4 mb-3">
                    <label class="form-label">Tanggal Terdaftar</label>
                    <input type="date" class="form-control" value="{{ $item->tanggal_terdaftar }}" readonly>
                </div>

                <div class="col-md-12 mb-3">
                    <label class="form-label">Keterangan</label>
                    <textarea class="form-control" rows="4" readonly>{{ $item->keterangan }}</textarea>
                </div>

            </div>

        </form>
        <hr>
        @endforeach

    </div>
</div>
@endsection
