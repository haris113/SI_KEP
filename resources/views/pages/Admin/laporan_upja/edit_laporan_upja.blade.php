@extends('layout_dashboard.main')

@section('content')
<div id="content">
    <div class="container-fluid">

        <h4 class="page-title">{{ $judul }}</h4>

        <div class="row">
            <div class="col-md-12">
                <div class="card card-with-nav">

                   <form action="{{ route('admin.update_laporan_upja', $laporan->id_laporan) }}" method="POST">
                   @csrf
                        <div class="card-body">

                            {{-- NAMA --}}
                            <div class="form-group form-group-default mt-3">
                            <label>Periode</label>
                            <input type="text" value="{{ $laporan->periode }}" class="form-control" required>
                         </div>

                         <div class="form-group form-group-default">
                            <label>Tanggal Laporan</label>
                            <input type="date" name="tanggal_laporan" value="{{ $laporan->tanggal_laporan }}"class="form-control" required>
                         </div>

                         <div class="form-group form-group-default">
                            <label>Total Pendapatan</label>
                            <input type="number" name="total_pendapatan" value="{{ $laporan->total_pendapatan }}"class="form-control" required>
                        </div>

                         <div class="form-group form-group-default">
                            <label>Total Pengeluaran</label>
                            <input type="number" name="total_pengeluaran" value="{{ $laporan->total_pengeluaran }}"class="form-control" required>
                         </div>

                            
                            <div class="text-right mt-3 d-flex justify-content-end gap-2">

                            <!-- Tombol Batal -->
                            <div class="text-right mt-2">
                            <button type="button" class="btn btn-danger" id="btnBatal">Batal</button>

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
