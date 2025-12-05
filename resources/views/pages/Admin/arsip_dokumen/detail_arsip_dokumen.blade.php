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
                                <label>Nama Dokumen</label>
                                <input type="text" class="form-control" value="{{ $arsip_dokumen->nama_dokumen }}" readonly>
                            </div>

                            {{-- NO HP --}}
                            <div class="form-group form-group-default mt-3">
                                <label>Dokumen</label>
                                <input type="text" class="form-control" value="{{ $arsip_dokumen->file_path }}" readonly>
                            </div>

                             {{-- KETERANGAN --}}
                            <div class="form-group form-group-default mt-3">
                                <label>Keterangan</label>
                                <input type="text" class="form-control" value="{{ $arsip_dokumen->keterangan }}" readonly>
                            </div>

                            <div class="text-right mt-3">
                                <a href="{{ url('admin/arsip_dokumen') }}" class="btn btn-danger">Kembali</a>
                            </div>

                        </div>
                    </form>

                </div>
            </div>
        </div>

    </div>
</div>
@endsection
