<!DOCTYPE html>
<html>
<head>
    <title>Edit Mahasiswa</title>
    <link rel="stylesheet" href="<?= base_url('styles.css') ?>">
</head>
<body>
<div class="container">
    <h1>Edit Mahasiswa</h1>

    <form method="post" action="<?= site_url('mahasiswa/update/'.$mhs['id']) ?>">
        <label>NIM:</label>
        <input type="text" name="nim" value="<?= $mhs['nim'] ?>" required>

        <label>Nama:</label>
        <input type="text" name="nama" value="<?= $mhs['nama'] ?>" required>

        <label>Umur:</label>
        <input type="number" name="umur" value="<?= $mhs['umur'] ?>" required>

        <div style="margin-top: 15px;">
            <button type="submit" class="button button-create">Update</button>
            <a href="<?= site_url('mahasiswa') ?>" class="button button-batal">Batal</a>
        </div>
    </form>
</div>
</body>
</html>
