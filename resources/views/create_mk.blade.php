@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;">
    <div class="card shadow-lg border-0 rounded-4" style="width: 600px;">
        <div class="card-header bg-primary text-white text-center rounded-top-4">
            <h4 class="mb-0">Buat Mata Kuliah Baru</h4>
        </div>

        <div class="card-body p-4">
            {{-- Pesan sukses --}}
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            {{-- Form Input --}}
            <form action="{{ route('matakuliah.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="nama_mk" class="form-label fw-semibold">Nama Mata Kuliah</label>
                    <input type="text" id="nama_mk" name="nama_mk"
                        class="form-control @error('nama_mk') is-invalid @enderror"
                        placeholder="Masukkan nama mata kuliah" required>

                    @error('nama_mk')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="sks" class="form-label fw-semibold">SKS</label>
                    <input type="number" id="sks" name="sks"
                        class="form-control @error('sks') is-invalid @enderror"
                        placeholder="Masukkan jumlah SKS" min="1" max="6" required>

                    @error('sks')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="d-flex justify-content-between mt-4">
                    <a href="{{ route('matakuliah.index') }}" class="btn btn-outline-secondary px-4">
                        <i class="bi bi-arrow-left"></i> Kembali
                    </a>

                    <button type="submit" class="btn btn-success px-4">
                        <i class="bi bi-check-circle"></i> Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
