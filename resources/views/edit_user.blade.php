@extends('layouts.app')

@section('content')
<div class="col-lg-6 mx-auto">
    <div class="card shadow-lg border-0">
        <div class="card-header text-white text-center py-3" style="background-color:#102a63;">
            <h4 class="mb-0">Edit Data Mahasiswa</h4>
        </div>
        <div class="card-body p-4">
            <form action="{{ route('user.update', $user->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="nama" class="form-label fw-semibold text-dark">Nama</label>
                    <input type="text" name="nama" id="nama" value="{{ old('nama', $user->nama) }}" required class="form-control">
                </div>

                <div class="mb-3">
                    <label for="nim" class="form-label fw-semibold text-dark">NIM</label>
                    <input type="text" name="nim" id="nim" value="{{ old('nim', $user->nim) }}" required class="form-control">
                </div>

                <div class="mb-3">
                    <label for="kelas_id" class="form-label fw-semibold text-dark">Kelas</label>
                    <select name="kelas_id" id="kelas_id" class="form-select" required>
                        @foreach ($kelas as $kelasItem)
                            <option value="{{ $kelasItem->id }}" {{ old('kelas_id', $user->kelas_id) == $kelasItem->id ? 'selected' : '' }}>
                                {{ $kelasItem->nama_kelas }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="d-flex justify-content-center mt-4">
                    <button type="submit" class="btn btn-primary px-4 rounded-pill me-2 animate-btn">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection