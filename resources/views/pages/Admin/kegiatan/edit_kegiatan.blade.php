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
                                <label>Nama Kegiatan</label>
                                <input type="text" class="form-control" value="{{ $kegiatan->nama_kegiatan }}">
                            </div>

                            {{-- NO HP --}}
                            <div class="form-group form-group-default mt-3">
                                    <label>Foto</label>
                                    <input type="file" name="#" class="form-control">
                                    
                                    {{-- <!-- Opsional: tampilkan nama file lama -->
                                    @if (!empty($kegiatan->id_foto))
                                        <small class="text-muted">
                                            File saat ini: {{ $kegiatan->id_foto }}
                                        </small>
                                    @endif --}}
                                </div>


                             {{-- KETERANGAN --}}
                            <div class="form-group form-group-default mt-3">
                                <label>Keterangan</label>
                                <input type="text" class="form-control" value="{{ $kegiatan->keterangan }}">
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
