<!DOCTYPE html>
<html>
<head>
    <title><?= isset($mahasiswa) ? 'Edit Mahasiswa' : 'Tambah Mahasiswa' ?></title>
</head>
<body>
    <h1><?= isset($mahasiswa) ? 'Edit Mahasiswa' : 'Tambah Mahasiswa' ?></h1>

    <form method="post" action="<?= isset($mahasiswa) ? site_url('mahasiswa/update/'.$mahasiswa['id']) : site_url('mahasiswa/store') ?>">
        <p>
            <label>Nama:</label><br>
            <input type="text" name="nama" value="<?= isset($mahasiswa) ? $mahasiswa['nama'] : '' ?>" required>
        </p>
        <p>
            <label>NIM:</label><br>
            <input type="text" name="nim" value="<?= isset($mahasiswa) ? $mahasiswa['nim'] : '' ?>" required>
        </p>
        <p>
            <label>Umur:</label><br>
            <input type="text" name="umur" value="<?= isset($mahasiswa) ? $mahasiswa['umur'] : '' ?>" required>
        </p>
        <p>
            <button type="submit"><?= isset($mahasiswa) ? 'Update' : 'Simpan' ?></button>
            <a href="<?= site_url('mahasiswa') ?>">Batal</a>
        </p>
    </form>
</body>
</html>
