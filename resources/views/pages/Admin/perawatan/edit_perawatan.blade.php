@extends('layout_dashboard.main')

@section('content')
<div class="container-fluid">

    <h4 class="page-title">{{ $judul }}</h4>

    <div class="card">
        <form action="#" method="POST">
            @csrf
            @method('PUT')

            <div class="card-body">

                <div class="form-group mt-3">
                    <label>Alsintan</label>
                    <select name="id_alsintan" class="form-control" required>
                        @foreach ($alsintan as $a)
                            <option value="{{ $a->id_alsintan }}"
                                {{ $perawatan->id_alsintan == $a->id_alsintan ? 'selected' : '' }}>
                                {{ $a->nama_alat }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group mt-3">
                    <label>Tanggal Perawatan</label>
                    <input type="date" name="tanggal_perawatan" class="form-control"
                           value="{{ $perawatan->tanggal_perawatan }}" required>
                </div>

                <div class="form-group mt-3">
                    <label>Jenis Perawatan</label>
                    <input type="text" name="jenis_perawatan" class="form-control"
                           value="{{ $perawatan->jenis_perawatan }}" required>
                </div>

                <div class="form-group mt-3">
                    <label>Biaya</label>
                    <input type="number" name="biaya" class="form-control"
                           value="{{ $perawatan->biaya }}" required>
                </div>

                <div class="form-group mt-3">
                    <label>Keterangan</label>
                    <textarea name="keterangan" class="form-control" rows="3">{{ $perawatan->keterangan }}</textarea>
                </div>

                <div class="text-right mt-3">
                    <button type="submit" class="btn btn-success">Simpan</button>
                    <a href="{{ url('admin/perawatan') }}" class="btn btn-danger">Batal</a>
                </div>

            </div>
        </form>
    </div>

</div>
@endsection
