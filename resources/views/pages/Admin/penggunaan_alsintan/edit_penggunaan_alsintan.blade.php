@extends('layout_dashboard.main')

@section('content')
<div class="container-fluid">

    <h4 class="page-title">{{ $judul }}</h4>

    <div class="card">
        <form action="{{ route('admin.update_penggunaan_alsintan', $penggunaan->id_penggunaan) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="card-body">

                {{-- ALSINTAN --}}
                <div class="form-group mt-3">
                    <label>Alsintan</label>
                    <select name="id_alsintan" class="form-control" required>
                        <option value="">-- Pilih Alsintan --</option>
                        @foreach ($alsintan as $a)
                            <option value="{{ $a->id_alsintan }}"
                                {{ $penggunaan->id_alsintan == $a->id_alsintan ? 'selected' : '' }}>
                                {{ $a->nama_alat }}
                            </option>
                        @endforeach
                    </select>
                </div>

                {{-- NAMA PELANGGAN --}}
                <div class="form-group mt-3">
                    <label>Nama Pelanggan</label>
                    <input type="text"
                           name="nama_pelanggan"
                           class="form-control"
                           value="{{ $penggunaan->nama_pelanggan }}">
                </div>

                {{-- TANGGAL MULAI --}}
                <div class="form-group mt-3">
                    <label>Tanggal Mulai</label>
                    <input type="date"
                           name="tanggal_mulai"
                           class="form-control"
                           value="{{ $penggunaan->tanggal_mulai }}">
                </div>

                {{-- TANGGAL SELESAI --}}
                <div class="form-group mt-3">
                    <label>Tanggal Selesai</label>
                    <input type="date"
                           name="tanggal_selesai"
                           class="form-control"
                           value="{{ $penggunaan->tanggal_selesai }}">
                </div>

                {{-- LOKASI LAHAN --}}
                <div class="form-group mt-3">
                    <label>Lokasi Lahan</label>
                    <input type="text"
                           name="lokasi_lahan"
                           class="form-control"
                           value="{{ $penggunaan->lokasi_lahan }}">
                </div>

                {{-- LUAS LAHAN --}}
                <div class="form-group mt-3">
                    <label>Luas Lahan (Hektar)</label>
                    <input type="text"
                           name="luas_lahan"
                           class="form-control"
                           value="{{ $penggunaan->luas_lahan }}">
                </div>

                {{-- HASIL PANEN --}}
                <div class="form-group mt-3">
                    <label>Hasil Panen (Sak/Karung)</label>
                    <input type="text"
                           name="hasil_panen"
                           class="form-control"
                           value="{{ $penggunaan->hasil_panen }}">
                </div>

                {{-- STATUS --}}
                <div class="form-group mt-3">
                    <label>Status</label>
                    <select name="status" class="form-control">
                        <option value="Proses" {{ $penggunaan->status == 'Proses' ? 'selected' : '' }}>Proses</option>
                        <option value="Selesai" {{ $penggunaan->status == 'Selesai' ? 'selected' : '' }}>Selesai</option>
                    </select>
                </div>

                {{-- BUTTON --}}
                <div class="mt-4">
                    <button type="submit" class="btn btn-success">
                        Simpan
                    </button>
                    <!-- Tombol Batal -->
                            <div class="text-right mt-2">
                            <button type="button" class="btn btn-danger" id="btnBatal">Batal</button>
                </div>

            </div>
        </form>
    </div>

</div>
@endsection
