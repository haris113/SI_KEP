@extends('layout_dashboard.main')

@section('content')
<div class="container-fluid">

    <h3 class="mb-3 text-gray-800">{{ $judul }}</h3>

    <div class="card shadow mb-4">
        <div class="card-body">

            <div class="d-flex justify-content-between mb-3">
                <a href="{{ url('admin/tambah_perawatan') }}" class="btn btn-success">
                    Tambah Perawatan
                </a>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Alsintan</th>
                            <th>Tanggal Perawatan</th>
                            <th>Jenis Perawatan</th>
                            <th>Biaya</th>
                            <th>Keterangan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($perawatan as $index => $p)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $p->alsintan->nama_alat ?? '-' }}</td>
                            <td>{{ $p->tanggal_perawatan }}</td>
                            <td>{{ $p->jenis_perawatan }}</td>
                            <td>Rp {{ number_format($p->biaya, 0, ',', '.') }}</td>
                            <td>{{ $p->keterangan }}</td>
                            <td>
                                <a href="{{ route('admin.detail_perawatan', $p->id_perawatan) }}" class="btn btn-info btn-sm">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{ route('admin.edit_perawatan', $p->id_perawatan) }}" class="btn btn-warning btn-sm text-white">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="#" class="btn btn-danger btn-sm"
                                   onclick="return confirm('Yakin hapus data?')">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>

</div>
@endsection
