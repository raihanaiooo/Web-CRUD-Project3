<!DOCTYPE html>
<html>
<head>
    <title><?= isset($mahasiswa) ? 'Edit Mahasiswa' : 'Tambah Mahasiswa' ?></title>
    <link rel="stylesheet" href="<?= base_url('styles.css') ?>">
</head>
<body>
<div class="container">
    <h1><?= isset($mahasiswa) ? 'Edit Mahasiswa' : 'Tambah Mahasiswa' ?></h1>
    <form method="post" action="<?= isset($mahasiswa) ? site_url('mahasiswa/update/'.$mahasiswa['id']) : site_url('mahasiswa/store') ?>">
        <label>NIM:</label>
        <input type="text" name="nim" value="<?= isset($mahasiswa) ? $mahasiswa['nim'] : '' ?>" required>
        <label>Nama:</label>
        <input type="text" name="nama" value="<?= isset($mahasiswa) ? $mahasiswa['nama'] : '' ?>" required>
        <label>Umur:</label>
        <input type="number" name="umur" value="<?= isset($mahasiswa) ? $mahasiswa['umur'] : '' ?>" required>
        <button type="submit"><?= isset($mahasiswa) ? 'Update' : 'Simpan' ?></button>
<a href="<?= site_url('mahasiswa') ?>" class="button button-batal">Batal</a>

    </form>
</div>

</body>
</html>
