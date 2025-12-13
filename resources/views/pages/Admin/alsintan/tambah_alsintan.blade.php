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
                                <label>Nama Alat Mesin Pertanian</label>
                                <input type="text" name="nama_alat" class="form-control" placeholder="Masukkan nama alat" required>
                            </div>

                            {{-- JENIS ALAT --}}
                            <div class="form-group form-group-default mt-3">
                                <label>Jenis Alat Mesin Pertanian</label>
                                <input type="text" name="jenis_alat" class="form-control" placeholder="Masukkan jenis alat" required>
                            </div>

                            {{-- TAHUN PEROLEHAN --}}
                            <div class="form-group form-group-default mt-3">
                                <label>Tahun Perolehan</label>
                                <input type="number" name="tahun_perolehan" class="form-control" placeholder="Contoh: 2023" required>
                            </div>

                            {{-- KONDISI --}}
                            <div class="form-group form-group-default mt-3">
                                <label>Kondisi Alat Mesin Pertanian</label>
                                <select name="kondisi" class="form-control" required>
                                    <option value="">-- Pilih Kondisi --</option>
                                    <option value="Baik">Baik</option>
                                    <option value="Rusak">Rusak</option>
                                </select>
                            </div>

                            {{-- BUTTON --}}
                            <div class="text-right mt-2">
                            <button type="submit" class="btn btn-success">Simpan</button>
                                
                            <button type="button" class="btn btn-danger" id="btnBatal">
                                Batal
                            </button>
                            </div>

                        </div>
                    </form>


                </div>
            </div>
        </div>

    </div>
</div>
@endsection
