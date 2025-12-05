@extends('layout_dashboard.main')

@section('content')

<div class="container-fluid">

    <br>
    <h2 class="h3 mb-2 text-gray-800">{{ $judul }}</h2>
    <br>

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                    <thead>
                        <tr>
                            <th style="width: 5%" data-orderable="false">No</th>
                            <th data-orderable="false">Nama Kegiatan</th>
                            <th data-orderable="false">Keterangan</th>
                            <th style="width: 12%" data-orderable="false">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($anggota as $index => $a)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $a->nama_kegiatan }}</td>
                            <td>{{ $a->keterangan }}</td>


                            <td>
                                <a href="#" class="btn btn-sm btn-info" title="Detail">
                                    <i class="fas fa-eye"></i>
                                </a>

                                <a href="#" class="btn btn-sm btn-warning text-white" title="Edit">
                                    <i class="fas fa-edit"></i>
                                </a>

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
