<!DOCTYPE html>
<html>
<head>
    <title>Detail Mahasiswa</title>
    <link rel="stylesheet" href="<?= base_url('styles.css') ?>">
</head>
<body>
<div class="container">
    <h1>Detail Mahasiswa</h1>
    <p><strong>NIM:</strong> <?= $mhs['nim'] ?></p>
    <p><strong>Nama:</strong> <?= $mhs['nama'] ?></p>
    <p><strong>Umur:</strong> <?= $mhs['umur'] ?></p>
    <a href="/mahasiswa" class="button button-detail">Kembali</a>

</div>
</body>
</html>
