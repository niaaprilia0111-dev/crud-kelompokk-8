<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Menu Kantin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
     <h1>Tambah Menu Kantin</h1>
                    <div>
                        <form action="{{ route('menu-kantins.store') }}" method="POST">
                            @csrf
                            <div>
                                <label>Kode Menu</label>
                                <input type="text" name="kode_menu">
                            </div>
                                <br>
                            <div>
                                <label>Nama Menu</label>
                                <input type="text" name="nama_menu">
                            </div>
                                <br>
                            <div>
                                <label>Kategori</label>
                                <input type="text" name="kategori">
                            </div>
                                <br>
                            <div>
                                <label >Harga (Rp)</label>
                                <input type="number" name="harga">
                            </div>
                                <br>
                            <div>
                                <label>Stok</label>
                                <input type="number" name="stok">
                            </div>
                                <br>
                            <div>
                                <label>Status</label>
                                <select name="status">
                                    <option value="Tersedia">Tersedia</option>
                                    <option value="Habis">Habis</option>
                                </select>
                            </div>
                            <br>
                            <div>
                                <label>Keterangan</label>
                                <textarea name="keterangan"></textarea>
                            <button type="submit">Simpan</button>
                            <a href="{{ route('menu-kantins.index') }}">
                                Kembali
                            </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
