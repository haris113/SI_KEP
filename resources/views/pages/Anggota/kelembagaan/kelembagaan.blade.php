@extends('layout_dashboard.main')

@section('content')

<div class="container-fluid">

    <br>
    <h2 class="h3 mb-2 text-gray-800">{{ $judul }}</h2>
    <br>

   <div class="card shadow mb-4">
    <div class="card-body">

        <form action="#" method="POST">
            @csrf

            <div class="row">

                <div class="col-md-6 mb-3">
                    <label class="form-label">Nama Lembaga</label>
                    <input type="text" class="form-control" value="#" readonly>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Jenis Lembaga</label>
                    <input type="text" class="form-control" value="#" readonly>
                </div>

                <div class="col-md-12 mb-3">
                    <label class="form-label">Alamat</label>
                    <textarea class="form-control" rows="2" readonly></textarea>
                </div>

                <div class="col-md-4 mb-3">
                    <label class="form-label">Tahun Berdiri</label>
                    <input type="number" class="form-control" value="#" readonly>
                </div>

                <div class="col-md-4 mb-3">
                    <label class="form-label">Status Kelembagaan</label>
                    <select name="status_lembaga" class="form-control">
                        <option selected></option>
                        <option>Aktif</option>
                        <option>Tidak Aktif</option>
                    </select>
                </div>

                <div class="col-md-4 mb-3">
                    <label class="form-label">Nomor Registrasi</label>
                    <input type="text" name="nomer_registrasi" class="form-control" value="#">
                </div>

                <div class="col-md-4 mb-3">
                    <label class="form-label">Tanggal Terdaftar</label>
                    <input type="date" name="tanggal_terdaftar" class="form-control" value="#">
                </div>

                <div class="col-md-12 mb-3">
                    <label class="form-label">Keterangan</label>
                    <textarea class="form-control" rows="4" readonly></textarea>
                </div>

            </div>

        </form>

    </div>
</div>
@endsection