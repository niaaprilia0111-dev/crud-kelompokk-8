<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Menu Kantin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
         <h4>Tambah Menu Kantin</h4>
                    <div>
                        <form action="{{ route('menu-kantins.update') }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div>
                                <label>Kode Menu</label>
                                <input type="text" name="kode_menu">
                            </div>

                            <div>
                                <label>Nama Menu</label>
                                <input type="text" name="nama_menu">
                            </div>

                            <div>
                                <label>Kategori</label>
                                <input type="text" name="kategori">
                            </div>

                            <div>
                                <label >Harga (Rp)</label>
                                <input type="number" name="harga">
                            </div>

                            <div>
                                <label>Stok</label>
                                <input type="number" name="stok">
                            </div>

                            <div>
                                <label>Status</label>
                                <select name="status">
                                    <option value="Tersedia">Tersedia</option>
                                    <option value="Habis">Habis</option>
                                </select>
                            </div>
                            <div>
                                <label>Keterangan</label>
                                <textarea name="keterangan"></textarea>
                            <button type="submit" class="btn btn-success">Perbarui</button>
                            <a href="{{ route('menu_kantins.index') }}" class="btn btn-secondary">
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
