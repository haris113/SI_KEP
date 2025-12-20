@extends('layout_dashboard.main')

@section('content')

<div class="container-fluid">

    <br>
    <h2 class="h3 mb-2 text-gray-800">{{ $judul }}</h2>
    <br>

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                
           
   <a href="{{ route('admin.tambah_laporan_upja') }}" class="btn btn-primary mb-3">
    <i class="fa fa-plus"></i> Tambah Laporan
</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Periode</th>
            <th>Tanggal</th>
            <th>Pendapatan</th>
            <th>Pengeluaran</th>
            <th>Dibuat Oleh</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($laporan as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->periode }}</td>
            <td>{{ $item->tanggal_laporan }}</td>
            <td>Rp {{ number_format($item->total_pendapatan,0,',','.') }}</td>
            <td>Rp {{ number_format($item->total_pengeluaran,0,',','.') }}</td>
            <td>{{ $item->user->nama ?? '-' }}</td>
            <td>
                <a href="{{ route('admin.detail_laporan_upja', $item->id_laporan) }}" class="btn btn-info btn-sm">Detail</a>
                <a href="{{ route('admin.edit_laporan_upja', $item->id_laporan) }}" class="btn btn-warning btn-sm">Edit</a>
                <a href="{{ route('admin.hapus_laporan_upja', $item->id_laporan) }}"
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
