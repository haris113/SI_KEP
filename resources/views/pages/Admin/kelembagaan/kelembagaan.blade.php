@extends('layout_dashboard.main')

@section('content')

<div class="container-fluid">

    <br>
    <h2 class="h3 mb-2 text-gray-800">{{ $judul }}</h2>
    <br>

   <div class="card shadow mb-4">
    <div class="card-body">

        @foreach($kelembagaan as $item)
        <form action="#" method="POST">
            @csrf

            <div class="row">

                <div class="col-md-6 mb-3">
                    <label class="form-label">Nama Lembaga</label>
                    <input type="text" class="form-control" value="{{ $item->nama_lembaga }}" >
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Jenis Lembaga</label>
                    <input type="text" class="form-control" value="{{ $item->jenis_lembaga }}" >
                </div>

                <div class="col-md-12 mb-3">
                    <label class="form-label">Alamat</label>
                    <textarea class="form-control" rows="2">{{ $item->alamat }}</textarea>
                </div>

                <div class="col-md-3 mb-3">
                    <label class="form-label">Tahun Berdiri</label>
                    <input type="number" class="form-control" value="{{ $item->tahun_berdiri }}" >
                </div>

                <div class="col-md-3 mb-3">
                    <label class="form-label">Status Kelembagaan</label>
                    <input type="text" class="form-control" value="{{ $item->status_lembaga }}" >
                </div>

                <div class="col-md-3 mb-3">
                    <label class="form-label">Nomor Registrasi</label>
                    <input type="text" class="form-control" value="{{ $item->nomer_registrasi }}" >
                </div>

                <div class="col-md-3 mb-3">
                    <label class="form-label">Tanggal Terdaftar</label>
                    <input type="date" class="form-control" value="{{ $item->tanggal_terdaftar }}" >
                </div>

               <div class="col-md-12 mb-3">
    <label class="form-label">Keterangan</label>
    <textarea class="form-control" 
              style="resize: none; overflow:hidden; height:auto; padding-top: .375rem;"
              oninput="this.style.height = 'auto'; this.style.height = (this.scrollHeight)+'px';">
{{ $item->keterangan }}
    </textarea>
<br>
    <button type="submit" class="btn btn-success">Simpan</button>
</div>

        </form>
        
        <hr>
        @endforeach

    </div>
</div>
@endsection
