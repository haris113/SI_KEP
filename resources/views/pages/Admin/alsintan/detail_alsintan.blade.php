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
                                <input type="text" class="form-control" value="{{ $alsintan->nama_alat }}" readonly>
                            </div>

                            {{-- JUMLAH PINJAMAN --}}
                            <div class="form-group form-group-default mt-3">
                                <label>Jenis Alat Mesin Pertanian</label>
                                <input type="text" class="form-control" value="{{ $alsintan->jenis_alat }}" readonly>
                            </div>

                            {{-- KETERANGAN --}}
                            <div class="form-group form-group-default mt-3">
                                <label>Tahun Perolehan</label>
                                <input type="text" class="form-control" value="{{ $alsintan->tahun_perolehan }}" readonly>
                            </div>

                            {{-- KONDISI --}}
                            <div class="form-group form-group-default mt-3">
                                <label>Kondisi Alat Mesin Pertanian</label>
                                <input type="text" class="form-control" value="{{ $alsintan->kondisi }}" readonly>
                            </div>


                            <div class="text-right mt-3">
                                <a href="{{ url('admin/alsintan') }}" class="btn btn-danger">Kembali</a>
                            </div>

                        </div>
                    </form>

                </div>
            </div>
        </div>

    </div>
</div>
@endsection
