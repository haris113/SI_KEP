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
                                <label>Nama Lengkap</label>
                                <input type="text" class="form-control" value="#">
                            </div>

                            {{-- ALAMAT --}}
                            <div class="form-group form-group-default mt-3">
                                <label>Alamat</label>
                                <input type="text" class="form-control" value="#" >
                            </div>

                            {{-- NO HP --}}
                            <div class="form-group form-group-default mt-3">
                                <label>No Handphone</label>
                                <input type="text" class="form-control" value="#" >
                            </div>

                            {{-- TANGGAL BERGABUNG --}}
                            <div class="form-group form-group-default mt-3">
                                <label>Tanggal Bergabung</label>
                                <input type="text" class="form-control" value="#" >
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
