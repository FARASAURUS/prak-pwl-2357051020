@extends('layouts.app')

@section('content')
<div class="text-center mb-5">
    <h1 class="fw-bold text-white mb-2">Daftar Mahasiswa</h1>
    <p class="text-light opacity-75">Kelola data mahasiswa dengan mudah dan cepat</p>
</div>

<div class="bg-white rounded-3 shadow-lg p-4">
    <div class="d-flex justify-content-between mb-3">
        <a href="{{ route('user.create') }}" class="btn btn-primary rounded-pill">Tambah Mahasiswa</a>
    </div>

    <div class="card shadow-sm">
        <div class="card-header bg-white">
            <h5 class="mb-0">{{ $title ?? 'Daftar User' }}</h5>
        </div>
        <div class="card-body">
            <table class="table table-hover align-middle">
                <thead class="table-primary">
                    <tr>
                        <th>No</th>
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
                            <td>{{ $user->kelas->nama_kelas ?? '-' }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center text-muted">Belum ada data pengguna</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
