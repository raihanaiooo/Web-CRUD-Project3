<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
<link rel="stylesheet" href="<?= base_url('styles.css') ?>">
</head>
<body>
<div class="container">
    <h1>Data Mahasiswa</h1>

    <form method="get" action="/mahasiswa/search">
        <input type="text" name="keyword" placeholder="Cari NIM/Nama">
        <button type="submit" class="button button-create">Cari</button>
    </form>

    <a href="/mahasiswa/create" class="button button-create">+ Tambah Mahasiswa</a>


    <table>
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Umur</th>
            <th>Aksi</th>
        </tr>
        <?php $no = 1; ?>
        <?php foreach($mhs as $m): ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $m['nim'] ?></td>
            <td><?= $m['nama'] ?></td>
            <td><?= $m['umur'] ?></td>
            <td>
    <a href="/mahasiswa/detail/<?= $m['id'] ?>" class="button button-detail">Detail</a>
    <a href="/mahasiswa/edit/<?= $m['id'] ?>" class="button button-edit">Edit</a>
    <a href="/mahasiswa/delete/<?= $m['id'] ?>" class="button button-hapus" onclick="return confirm('Yakin hapus?')">Hapus</a>
</td>

        </tr>
        <?php endforeach; ?>
    </table>
</div>
</body>
</html>
