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
                                <input type="text" class="form-control" value="{{ $user->nama }}" readonly>
                            </div>

                            {{-- username --}}
                            <div class="form-group form-group-default mt-3">
                                <label>Username</label>
                                <input type="text" class="form-control" value="{{ $user->username }}" readonly>
                            </div>

                            {{-- password --}}
                            <div class="form-group form-group-default mt-3">
                                <label>Password</label>
                                <input type="text" class="form-control" value="{{ $user->id_role }}" readonly>
                            </div>

                            {{-- role --}}
                            <div class="form-group form-group-default mt-3">
                                <label>Role</label>
                                <input type="text" class="form-control" value="{{ $user->id_role }}" readonly>
                            </div>

                            {{-- TANGGAL dibuat --}}
                            <div class="form-group form-group-default mt-3">
                                <label>Tanggal Dibuat</label>
                                <input type="text" class="form-control" value="{{ $user->created_at }}" readonly>
                            </div>
                              {{-- TANGGAL diubah --}}
                            <div class="form-group form-group-default mt-3">
                                <label>Terakhir Diubah</label>
                                <input type="text" class="form-control" value="{{ $user->created_at }}" readonly>
                            </div>

                            <div class="text-right mt-3">
                                <a href="{{ url('admin/user') }}" class="btn btn-danger">Kembali</a>
                            </div>

                        </div>
                    </form>

                </div>
            </div>
        </div>

    </div>
</div>
@endsection
