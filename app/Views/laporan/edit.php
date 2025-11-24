<h2>Edit Laporan</h2>
 <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
<form action="/laporan/update/<?= $laporan['id'] ?>" method="post">
  Nama Jalan: <input type="text" name="nama_jalan" value="<?= esc($laporan['nama_jalan']) ?>"><br>
  Deskripsi:<br>
  <textarea name="deskripsi"><?= esc($laporan['deskripsi']) ?></textarea><br>
  Koordinat: <input type="text" name="koordinat" value="<?= esc($laporan['koordinat']) ?>"><br>
  <button type="submit">Update</button>
</form>
