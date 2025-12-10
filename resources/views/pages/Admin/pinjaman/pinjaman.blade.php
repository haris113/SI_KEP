@extends('layout_dashboard.main')

@section('content')

<div class="container-fluid">

    <br>
    <h2 class="h3 mb-2 text-gray-800">{{ $judul }}</h2>
    <br>

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                
           
    <div class="d-flex justify-content-between align-items-center mb-3">
        <a href="{{ url('admin/tambah_pinjaman') }}" class="btn btn-success">Tambah Pinjaman</a>

        
    </div>

    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                    <thead>
                     
                        <tr>
                            <th style="width: 5%" data-orderable="false">No</th>
                            <th style="width: 15%" data-orderable="false">Jenis Dana</th>
                            <th data-orderable="false">Jumlah</th>
                            <th data-orderable="false">Keterangan</th>
                            <th style="width: 15%">Tanggal Transaksi</th>
                            <th style="width: 15%">Status</th>
                            <th style="width: 12%" data-orderable="false">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($pinjaman as $index => $a)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $a->id_anggota }}</td>
                            <td>{{ $a->jumlah }}</td>
                            <td>{{ $a->keterangan }}</td>
                            <td>{{ $a->tanggal ?? '-' }}</td>
                            <?php $status = $a->status;
                                if ($status == "Lunas") {
                                $buttonClass = "btn-success";
                                $buttonText = "Lunas";
                                } else {
                                $buttonClass = "btn-danger";
                                $buttonText = "Belum Lunas";
                                }
                                ?>
                            <td><button class="btn <?= $buttonClass; ?>"><?= $buttonText; ?></button>
                            </td>
                           

                            <td>
                                {{-- Tombol Detail --}}
                                <a href="
                                {{ route('admin.detail_pinjaman', $a->id_pinjaman) }}
                                 " 
                                   class="btn btn-sm btn-info" title="Detail">
                                    <i class="fas fa-eye"></i>
                                </a>

                                {{-- Tombol Edit --}}
                                <a href="
                                {{ route('admin.edit_pinjaman', $a->id_pinjaman) }}
                                 " class="btn btn-sm btn-warning text-white" title="Edit">
                                    <i class="fas fa-edit"></i>
                                </a>

                                {{-- Tombol Hapus --}}
                                <a href="#" 
                                   class="btn btn-sm btn-danger" 
                                   title="Hapus"
                                   onclick="return confirm('Yakin ingin menghapus?')">
                                    <i class="fas fa-trash-alt"></i>
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
