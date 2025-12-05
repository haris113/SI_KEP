@extends('layout_dashboard.main')

@section('content')
<div id="content">
    <div class="container-fluid">

        <h4 class="page-title">{{ $judul }}</h4>

        <div class="row">
            <div class="col-md-12">
                <div class="card card-with-nav">

                   <form action="#" method="POST" enctype="multipart/form-data">

                        @csrf
                        <div class="card-body">

                            {{-- NAMA DOKUMEN --}}
                            <div class="form-group form-group-default mt-3">
                                <label>Nama Dokumen</label>
                                <input type="text" class="form-control" value="#">
                            </div>

                            {{-- Dokumen --}}
                            <div class="form-group form-group-default mt-3">
                            <label>Dokumen</label>
                            <input type="file" name="file_path" class="form-control"
                             accept=".pdf, .jpg, .jpeg, .png, .xlsx, .xls, .docx">
           
                            @if (!empty($arsip_dokumen->file_path))
                                <small class="text-muted">
                                    File saat ini: {{ $arsip_dokumen->file_path }}
                                </small>
                            @endif
                        </div>



                             {{-- KETERANGAN --}}
                            <div class="form-group form-group-default mt-3">
                                <label>Keterangan</label>
                                <input type="text" class="form-control" value="#">
                            </div>

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
