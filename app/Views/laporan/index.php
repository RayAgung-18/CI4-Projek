<!DOCTYPE html>
<html>
<head>
    <title>Daftar Laporan Kerusakan Jalan</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">

</head>
<body>

<div class="container">
    <h1>Daftar Laporan Kerusakan Jalan </h1>

    <a href="<?= base_url('laporan/create') ?>" class="btn-add">+ Tambah Laporan</a>

    <table class="tabel-laporan">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Jalan</th>
                <th>Deskripsi</th>
                <th>Koordinat</th>
                <th>Foto</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
        <?php foreach ($laporan as $row): ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['nama_jalan'] ?></td>
                <td><?= $row['deskripsi'] ?></td>
                <td><?= $row['koordinat'] ?></td>
                <td><img src="/uploads/<?= $row['foto'] ?>" class="foto"></td>
                <td>
                    <a href="<?= base_url('laporan/edit/'.$row['id']) ?>" class="btn-edit">Edit</a>
                    <a href="<?= base_url('laporan/delete/'.$row['id']) ?>" class="btn-delete" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                </td>
            </tr>
        <?php endforeach ?>
        </tbody>
    </table>
</div>

</body>
</html>
