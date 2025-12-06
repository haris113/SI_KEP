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

                            {{-- NAMA DOKUMEN --}}
                            <div class="form-group form-group-default mt-3">
                                <label>Nama Kegiatan</label>
                                <input type="text" class="form-control" value="{{ $kegiatan->nama_kegiatan }}" readonly>
                            </div>

                            {{-- NO HP --}}
                            <div class="form-group form-group-default mt-3">
                                <label>Foto</label>
                                <input type="text" class="form-control" value="#" readonly>
                            </div>

                             {{-- KETERANGAN --}}
                            <div class="form-group form-group-default mt-3">
                                <label>Keterangan</label>
                                <input type="text" class="form-control" value="{{ $kegiatan->keterangan }}" readonly>
                            </div>

                            <div class="text-right mt-3">
                                <a href="{{ url('admin/kegiatan') }}" class="btn btn-danger">Kembali</a>
                            </div>

                        </div>
                    </form>

                </div>
            </div>
        </div>

    </div>
</div>
@endsection
