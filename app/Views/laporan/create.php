<h2>Tambah Laporan</h2>
 <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
<form action="/laporan/store" method="post" enctype="multipart/form-data">
  Nama Jalan: <input type="text" name="nama_jalan"><br>
  Deskripsi:<br>
  <textarea name="deskripsi"></textarea><br>
  Koordinat: <input type="text" name="koordinat"><br>
  Foto: <input type="file" name="foto"><br>
  <button type="submit">Simpan</button>
</form>
