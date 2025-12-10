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
                                <label>Nama Peminjam</label>
                                <input type="text" class="form-control" value="{{ $pinjaman->id_anggota }}">
                            </div>

                            {{-- JUMLAH PINJAMAN --}}
                            <div class="form-group form-group-default mt-3">
                                <label>Jumlah Pinjaman</label>
                                <input type="text" class="form-control" value="{{ $pinjaman->jumlah }}">
                            </div>

                            {{-- KETERANGAN --}}
                            <div class="form-group form-group-default mt-3">
                                <label>Keterangan</label>
                                <input type="text" class="form-control" value="{{ $pinjaman->keterangan }}">
                            </div>

                            {{-- STATUS --}}
                            <div class="form-group form-group-default mt-3">
                                <label>Status</label>
                                <select name="status" class="form-control">
                                    <option value="Lunas" {{ $pinjaman->status == 'Lunas' ? 'selected' : '' }}>Lunas</option>
                                    <option value="Belum Lunas" {{ $pinjaman->status == 'Belum Lunas' ? 'selected' : '' }}>Belum Lunas</option>
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
