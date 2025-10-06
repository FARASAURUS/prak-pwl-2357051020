@extends('layouts.main')

@section('content')
<div class="container py-4">

    {{-- Judul Halaman --}}
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold text-primary">Daftar Pengguna</h2>
        <a href="{{ route('user.create') }}" class="btn btn-success shadow-sm">
            <i class="bi bi-person-plus"></i> Tambah User
        </a>
    </div>

    {{-- Tabel Daftar User --}}
    <div class="card shadow-sm">
        <div class="card-header bg-white">
            <h5 class="mb-0">Data User</h5>
        </div>
        <div class="card-body">
            <table class="table table-hover align-middle">
                <thead class="table-primary">
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>NIM</th>
                        <th>Kelas</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($users as $index => $user)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $user->nama }}</td>
                            <td>{{ $user->nim }}</td>
                            <td>{{ $user->nama_kelas ?? '-' }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center text-muted">
                                Belum ada data pengguna.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection
<!-- test commit -->
