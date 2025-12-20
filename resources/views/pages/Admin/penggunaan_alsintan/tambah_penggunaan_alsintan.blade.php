@extends('layout_dashboard.main')

@section('content')
<div class="container-fluid">

    <h4 class="page-title">{{ $judul }}</h4>

    <div class="card">
        <form action="{{ route('admin.create_penggunaan_alsintan') }}" method="POST">
            @csrf

            <div class="card-body">

                {{-- ALSINTAN --}}
                <div class="form-group mt-3">
                    <label>Alsintan</label>
                    <select name="id_alsintan" class="form-control" required>
                        <option value="">-- Pilih Alsintan --</option>
                        @foreach ($alsintan as $a)
                            <option value="{{ $a->id_alsintan }}">{{ $a->nama_alat }}</option>
                        @endforeach
                    </select>
                </div>

                {{-- NAMA PELANGGAN --}}
                <div class="form-group mt-3">
                    <label>Nama Pelanggan</label>
                    <input type="text"
                           name="nama_pelanggan"
                           class="form-control"
                           placeholder="Nama Pelanggan">
                </div>

                {{-- TANGGAL MULAI --}}
                <div class="form-group mt-3">
                    <label>Tanggal Mulai</label>
                    <input type="date"
                           name="tanggal_mulai"
                           class="form-control">
                </div>

                {{-- TANGGAL SELESAI --}}
                <div class="form-group mt-3">
                    <label>Tanggal Selesai</label>
                    <input type="date"
                           name="tanggal_selesai"
                           class="form-control">
                </div>

                {{-- LOKASI LAHAN --}}
                <div class="form-group mt-3">
                    <label>Lokasi Lahan</label>
                    <input type="text"
                           name="lokasi_lahan"
                           class="form-control"
                           placeholder="Lokasi Lahan">
                </div>

                {{-- LUAS LAHAN --}}
                <div class="form-group mt-3">
                    <label>Luas Lahan (Hektar)</label>
                    <input type="text"
                           name="luas_lahan"
                           class="form-control"
                           placeholder="Contoh: 2 Ha">
                </div>

                {{-- HASIL PANEN --}}
                <div class="form-group mt-3">
                    <label>Hasil Panen (Sak/Karung)</label>
                    <input type="text"
                           name="hasil_panen"
                           class="form-control"
                           placeholder="Contoh: 30 Karung">
                </div>

                {{-- STATUS --}}
                <div class="form-group mt-3">
                    <label>Status</label>
                    <select name="status" class="form-control">
                        <option value="">-- Pilih Status --</option>
                        <option value="Proses">Proses</option>
                        <option value="Selesai">Selesai</option>
                    </select>
                </div>

                {{-- BUTTON --}}
                <div class="mt-4">
                    <button type="submit" class="btn btn-success">
                        Simpan
                    </button>
                    <a href="{{ route('admin.penggunaan_alsintan') }}" class="btn btn-secondary">
                        Kembali
                    </a>
                </div>

            </div>
        </form>
    </div>

</div>
@endsection
