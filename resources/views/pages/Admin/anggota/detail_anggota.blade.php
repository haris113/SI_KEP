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
                                <input type="text" class="form-control" value="{{ $anggota->nama }}" readonly>
                            </div>

                            {{-- ALAMAT --}}
                            <div class="form-group form-group-default mt-3">
                                <label>Alamat</label>
                                <input type="text" class="form-control" value="{{ $anggota->alamat }}" readonly>
                            </div>

                            {{-- NO HP --}}
                            <div class="form-group form-group-default mt-3">
                                <label>No Handphone</label>
                                <input type="text" class="form-control" value="{{ $anggota->no_hp }}" readonly>
                            </div>

                            {{-- TANGGAL BERGABUNG --}}
                            <div class="form-group form-group-default mt-3">
                                <label>Tanggal Bergabung</label>
                                <input type="text" class="form-control" value="{{ $anggota->tanggal_bergabung }}" readonly>
                            </div>

                            <div class="text-right mt-3">
                                <a href="{{ url('anggota/anggota') }}" class="btn btn-danger">Kembali</a>
                            </div>

                        </div>
                    </form>

                </div>
            </div>
        </div>

    </div>
</div>
@endsection
