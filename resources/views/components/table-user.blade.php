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
