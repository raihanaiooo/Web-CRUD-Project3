<!DOCTYPE html>
<html>
<head>
    <title>Edit Mahasiswa</title>
</head>
<body>
    <h1>Edit Mahasiswa</h1>
    <form method="post" action="/mahasiswa/update/<?= $mhs['id'] ?>">
        NIM: <input type="text" name="nim" value="<?= $mhs['nim'] ?>"><br>
        Nama: <input type="text" name="nama" value="<?= $mhs['nama'] ?>"><br>
        Umur: <input type="number" name="umur" value="<?= $mhs['umur'] ?>"><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>
