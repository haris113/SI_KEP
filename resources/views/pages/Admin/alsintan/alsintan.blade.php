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
        <a href="{{ url('admin/tambah_alsintan') }}" class="btn btn-success">Tambah Alsintan</a>

        
    </div>

    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                    <thead>
                     
                        <tr>
                            <th style="width: 5%" data-orderable="false">No</th>
                            <th style="width: 15%" data-orderable="false">Nama Alat</th>
                            <th data-orderable="false">Jenis Alat</th>
                            <th data-orderable="false">Sumber Perolehan</th>
                            <th style="width: 15%">Tanggal Perolehan</th>
                            <th style="width: 15%">Status</th>
                            <th style="width: 12%" data-orderable="false">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($alsintan as $index => $a)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $a->nama_alat }}</td>
                            <td>{{ $a->jenis_alat }}</td>
                            <td>{{ $a->sumber_perolehan }}</td>
                            <td>{{ $a->tanggal_perolehan ?? '-' }}</td>
                            <?php $kondisi = $a->kondisi;
                                if ($kondisi == "Baik") {
                                $buttonClass = "btn-success";
                                $buttonText = "Baik";
                                } else {
                                $buttonClass = "btn-danger";
                                $buttonText = "Rusak";
                                }
                                ?>
                            <td><button class="btn <?= $buttonClass; ?>"><?= $buttonText; ?></button>
                            </td>
                           

                            <td>
                                {{-- Tombol Detail --}}
                                <a href="
                                {{ route('admin.detail_alsintan', $a->id_alsintan) }}
                                 " 
                                   class="btn btn-sm btn-info" title="Detail">
                                    <i class="fas fa-eye"></i>
                                </a>

                                {{-- Tombol Edit --}}
                                <a href="
                                {{ route('admin.edit_alsintan', $a->id_alsintan) }}
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
