@extends('layout_dashboard.main')

@section('content')
<div class="container-fluid">

    <h4 class="page-title">{{ $judul }}</h4>

    <div class="card">
        <form action="{{ route('admin.edit_penyusutan', $penyusutan->id_penyusutan) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="card-body">

                <div class="form-group mt-3">
                    <label>Alsintan</label>
                    <select name="id_alsintan" class="form-control" required>
                        @foreach ($alsintan as $a)
                        <option value="{{ $a->id_alsintan }}"
                            {{ $penyusutan->id_alsintan == $a->id_alsintan ? 'selected' : '' }}>
                            {{ $a->nama_alat }}
                        </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group mt-3">
                    <label>Tahun</label>
                    <input type="text" name="tahun" class="form-control"
                           value="{{ $penyusutan->tahun }}" required>
                </div>

                <div class="form-group mt-3">
                    <label>Nilai Perolehan</label>
                    <input type="number" name="nilai_perolehan" class="form-control"
                           value="{{ $penyusutan->nilai_perolehan }}" required>
                </div>

                <div class="form-group mt-3">
                    <label>Nilai Penyusutan</label>
                    <input type="number" name="nilai_penyusutan" class="form-control"
                           value="{{ $penyusutan->nilai_penyusutan }}" required>
                </div>

                <div class="form-group mt-3">
                    <label>Frekuensi</label>
                    <input type="number" name="frekuensi" class="form-control"
                           value="{{ $penyusutan->frekuensi }}" required>
                </div>

                <div class="form-group mt-3">
                    <label>Tanggal Dibuat</label>
                    <input type="date" name="tanggal_dibuat" class="form-control"
                           value="{{ $penyusutan->tanggal_dibuat }}">
                </div>

                <div class="text-right mt-3">
                    <button type="submit" class="btn btn-success">Simpan</button>
                    <a href="{{ url('admin/penyusutan') }}" class="btn btn-danger">Batal</a>
                </div>

            </div>
        </form>
    </div>

</div>
@endsection
