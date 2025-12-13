@extends('layout_dashboard.main')

@section('content')
<div class="container-fluid">

    <h3 class="mb-3 text-gray-800">{{ $judul }}</h3>

    <div class="card shadow mb-4">
        <div class="card-body">

            <div class="d-flex justify-content-between mb-3">
                <a href="{{ url('admin/tambah_penyusutan') }}" class="btn btn-success">
                    Tambah Penyusutan
                </a>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Alsintan</th>
                            <th>Tahun</th>
                            <th>Nilai Perolehan</th>
                            <th>Nilai Penyusutan</th>
                            <th>Jangka Waktu</th>
                            <th>Tanggal Dibuat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($penyusutan as $index => $p)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $p->alsintan->nama_alat ?? '-' }}</td>
                            <td>{{ $p->tahun }}</td>
                            <td>Rp {{ number_format($p->nilai_perolehan,0,',','.') }}</td>
                            <td>Rp {{ number_format($p->nilai_penyusutan,0,',','.') }}</td>
                            <td>{{ $p->frekuensi }}x</td>
                            <td>{{ $p->tanggal_dibuat ?? '-' }}</td>
                            <td>
                                <a href="{{ route('admin.detail_penyusutan', $p->id_penyusutan) }}" class="btn btn-info btn-sm">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{ route('admin.edit_penyusutan', $p->id_penyusutan) }}" class="btn btn-warning btn-sm text-white">
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
