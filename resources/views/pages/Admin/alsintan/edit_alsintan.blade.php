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
                                <input type="text" class="form-control" value="{{ $alsintan->nama_alat }}">
                            </div>

                            {{-- JUMLAH PINJAMAN --}}
                            <div class="form-group form-group-default mt-3">
                                <label>Jenis Alat Mesin Pertanian</label>
                                <input type="text" class="form-control" value="{{ $alsintan->jenis_alat }}">
                            </div>

                            {{-- KETERANGAN --}}
                            <div class="form-group form-group-default mt-3">
                                <label>Tahun Perolehan</label>
                                <input type="text" class="form-control" value="{{ $alsintan->tahun_perolehan }}">
                            </div>

                            {{-- Kondisi --}}
                            <div class="form-group form-group-default mt-3">
                                <label>Kondisi Alat Mesin Pertanian</label>
                                <select name="kondisi" class="form-control">
                                    <option value="Baik" {{ $alsintan->kondisi == 'Baik' ? 'selected' : '' }}>Baik</option>
                                    <option value="Rusak" {{ $alsintan->kondisi == 'Rusak' ? 'selected' : '' }}>Rusak</option>
                                </select>
                            </div>


                            <div class="text-right mt-3 d-flex justify-content-end gap-2">

                            <!-- Tombol Batal -->
                            <div class="text-right mt-2">
                            <button type="button" class="btn btn-danger" id="btnBatal">
                                Batal
                            </button>

                            <button type="submit" class="btn btn-success">Simpan</button>

</div>

                        </div>
                    </form>

                </div>
            </div>
        </div>

    </div>
</div>
@endsection
