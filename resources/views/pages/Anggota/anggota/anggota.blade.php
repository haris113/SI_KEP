@extends('layout_dashboard.main')

@section('content')
    
 <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Begin Page Content -->
         <div class="container-fluid">

                    <!-- Page Heading -->
        <br>
            <h2 class="h3 mb-2 text-gray-800">DATA ANGGOTA KELEMBAGAAN</h2>
        <br>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                
                <thead>
                    <tr>
                        <th style="width: 5%" data-orderable="false">No</th>
                        <th data-orderable="false">Nama</th>
                        <th data-orderable="false">Alamat</th>
                        <th style="width: 10%" data-orderable="false">No HP</th>
                        <th style="width: 10%" data-orderable="false">Jabatan</th>
                        <th style="width: 10%">Tanggal Gabung</th>
                        <th style="width: 12%" data-orderable="false">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Joni</td>
                        <td>Desa Sungai Riam</td>
                        <td>082133442242</td>
                        <td>Ketua</td>
                        <td>2011/04/25</td>

                        <td>
                            <a href="" class="btn btn-sm btn-info" title="Detail">
                                <i class="fas fa-eye"></i>
                            </a>

                            <a href="" class="btn btn-sm btn-warning text-white" title="Edit">
                                <i class="fas fa-edit"></i>
                            </a>

                            <a href="" class="btn btn-sm btn-danger" title="Hapus"
                                onclick="return confirm('Yakin ingin menghapus?')">
                                <i class="fas fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>

            </table>
        </div>
    </div>
</div>

@endsection

       