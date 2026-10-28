<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Menu Kantin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <h2 class="mb-4">Daftar Menu Kantin (Kelompok 8)</h2>

                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <a href="{{ route('menu-kantins.create') }}" class="btn btn-primary mb-3">
                    Tambah Menu Baru
                </a>

                <div class="card shadow-sm">
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode Menu</th>
                                    <th>Nama Menu</th>
                                    <th>Kategori</th>
                                    <th>Harga</th>
                                    <th>Stok</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($menus as $index => $menu)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $menu->kode_menu }}</td>
                                        <td>{{ $menu->nama_menu }}</td>
                                        <td>{{ $menu->kategori }}</td>
                                        <td>Rp {{ number_format($menu->harga, 0, ',', '.') }}</td>
                                        <td>{{ $menu->stok }}</td>
                                        <td>
                                            <span class="badge {{ $menu->status == 'Tersedia' ? 'bg-success' : 'bg-danger' }}">
                                                {{ $menu->status }}
                                            </span>
                                        </td>
                                        <td>
                                            <a href="{{ route('menu-kantins.edit', $menu->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                            <form action="{{ route('menu-kantins.destroy', $menu->id) }}" method="POST" class="d-inline"
                                                 onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="text-center">Belum ada data menu kantin.</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
