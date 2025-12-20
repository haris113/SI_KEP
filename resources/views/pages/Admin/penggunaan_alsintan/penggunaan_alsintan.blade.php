@extends('layout_dashboard.main')

@section('content')

<div class="container-fluid">

    <br>
    <h2 class="h3 mb-2 text-gray-800">{{ $judul }}</h2>
    <br>

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                
           
  <a href="{{ route('admin.tambah_penggunaan_alsintan') }}" class="btn btn-primary mb-3">
    Tambah Penggunaan
</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Alsintan</th>
            <th>Pelanggan</th>
            <th>Tanggal</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($penggunaan as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->alsintan->nama_alat ?? '-' }}</td>
            <td>{{ $item->nama_pelanggan ?? ($item->anggota->nama ?? '-') }}</td>
            <td>{{ $item->tanggal_mulai }} s/d {{ $item->tanggal_selesai }}</td>
            <td>{{ $item->status }}</td>
            <td>
                <a href="{{ route('admin.detail_penggunaan_alsintan',$item->id_penggunaan) }}" class="btn btn-info btn-sm">Detail</a>
                <a href="{{ route('admin.edit_penggunaan_alsintan',$item->id_penggunaan) }}" class="btn btn-warning btn-sm">Edit</a>
                <a href="{{ route('admin.hapus_penggunaan_alsintan',$item->id_penggunaan) }}"
                   onclick="return confirm('Hapus data?')"
                   class="btn btn-danger btn-sm">Hapus</a>
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
