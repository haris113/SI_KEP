@extends('layout_dashboard.main')

@section('content')
<div id="content">
    <div class="container-fluid">

        <h4 class="page-title">{{ $judul }}</h4>

        <div class="row">
            <div class="col-md-12">
                <div class="card card-with-nav">

                   <form action="{{ route('admin.tambah_user') }}" method="POST">
                            @csrf

                            {{-- Nama --}}
                            <div class="form-group form-group-default mt-3">
                                <label>Nama Lengkap</label>
                                <input type="text" name="nama" class="form-control" placeholder="Masukkan nama lengkap" value="{{ old('nama') }}" required>
                            </div>

                            {{-- Username --}}
                            <div class="form-group form-group-default mt-3">
                                <label>Username</label>
                                <input type="text" name="username" class="form-control" placeholder="Masukkan username" value="{{ old('username') }}" required>
                            </div>

                             {{-- Password --}}
                            <div class="form-group form-group-default mt-3">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Masukkan password" required>
                            </div>


                            {{-- Role --}}
                            <div class="form-group form-group-default mt-3">
                                <label>Role</label>
                                <select name="id_role" class="form-control" required>
                                    <option value="">-- Pilih Role --</option>
                                    <option value="1" {{ old('id_role') == 1 ? 'selected' : '' }}>Admin</option>
                                    <option value="2" {{ old('id_role') == 2 ? 'selected' : '' }}>Ketua</option>
                                    <option value="3" {{ old('id_role') == 3 ? 'selected' : '' }}>Divisi Keuangan</option>
                                    <option value="4" {{ old('id_role') == 4 ? 'selected' : '' }}>Divisi Alsintan</option>
                                    <option value="5" {{ old('id_role') == 5 ? 'selected' : '' }}>Anggota</option>
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
