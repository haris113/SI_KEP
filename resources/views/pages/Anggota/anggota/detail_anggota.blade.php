@extends('layout_dashboard.main')

@section('content')
<div id="content">
    <div class="container-fluid">
        <h4 class="page-title">User Profile</h4>

        <div class="row">
            <div class="col-md-12">
                <div class="card card-with-nav">
                    <form action="{{ route('update.profile') }}" method="POST">
                        @csrf
                        <div class="card-body">

                            {{-- USERNAME --}}
                            <div class="form-group form-group-default mt-3">
                                <label>Username</label>
                                <input type="text" class="form-control" name="username" value="{{ $user->username }}">
                            </div>

                            {{-- NAMA --}}
                            <div class="form-group form-group-default mt-3">
                                <label>Nama Lengkap</label>
                                <input type="text" class="form-control" name="nama" value="{{ $user->nama }}">
                            </div>

                            <div class="text-right mt-3">
                                <button type="submit" class="btn btn-success">Simpan</button>

                                {{-- Tombol Batal sesuai role --}}
                                @php
                                    $role = $user->role->role ?? '';

                                    $dashboard = match ($role) {
                                        'admin' => route('admin.dashboard'),
                                        'ketua' => route('ketua.dashboard'),
                                        'divisi keuangan' => route('keuangan.dashboard'),
                                        'divisi upja' => route('upja.dashboard'),
                                        'anggota' => route('anggota.dashboard'),
                                        default => url('/'),
                                    };
                                @endphp

                                <a href="{{ $dashboard }}" class="btn btn-danger">Batal</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
