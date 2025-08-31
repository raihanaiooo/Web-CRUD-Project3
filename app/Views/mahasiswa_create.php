<!DOCTYPE html>
<html>
<head>
    <title>Tambah Mahasiswa</title>
</head>
<body>
    <h1>Tambah Mahasiswa</h1>
    <form method="post" action="/mahasiswa/store">
        NIM: <input type="text" name="nim"><br>
        Nama: <input type="text" name="nama"><br>
        Umur: <input type="number" name="umur"><br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
