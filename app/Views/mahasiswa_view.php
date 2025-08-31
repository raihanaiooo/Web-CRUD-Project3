<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>

    <form method="get" action="/mahasiswa/search">
        <input type="text" name="keyword" placeholder="Cari NIM/Nama">
        <button type="submit">Cari</button>
    </form>
    <br>

    <a href="/mahasiswa/create">+ Tambah Mahasiswa</a>
    <br><br>

    <table border="1" cellpadding="8">
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
                <a href="/mahasiswa/detail/<?= $m['id'] ?>">Detail</a> | 
                <a href="/mahasiswa/edit/<?= $m['id'] ?>">Edit</a> | 
                <a href="/mahasiswa/delete/<?= $m['id'] ?>" onclick="return confirm('Yakin hapus?')">Hapus</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </table>
</body>
</html>
