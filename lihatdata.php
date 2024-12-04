<?php
$koneksi=mysqli_connect("localhost", "root", "", "pengarsipan");



?>
<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Data Pengarsipan Pelayanan Kanwil Kemenkumham</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<center>
	<h4> Data Pengarsipan Pelayanan Kanwil Kemenkumham </h4>
<table border="1" cellpadding="6" cellspacing="0">
	<tr>
	<td>No.</td>
	<td>ID/No. Pelayanan</td>
	<td>Nama</td>
	<td>Alamat</td>
	<td>No. Telepon</td>
	<td>Tanggal Pelayanan</td>
	<td>Divisi</td>
	<td>Pelayanan</td>
</tr>
<tr>
	<?php 
	$no=1;
		$arsip_pelayanan=mysqli_query($koneksi, "SELECT * FROM arsip_pelayanan ORDER BY nama ASC"); 
		while ($tampil_data=mysqli_fetch_array($arsip_pelayanan)) {
			?>
			<tr>
			<td><?=$no++; ?>.</td>
				<td><?=$tampil_data['id']; ?></td>
				<td><?=$tampil_data['nama']; ?></td>
				<td><?=$tampil_data['alamat']; ?></td>
				<td><?=$tampil_data['no_hp']; ?></td>
				<td><?=$tampil_data['tgl_pelayanan']; ?></td>
				<td><?=$tampil_data['tujuan_pelayanan']; ?></td>
				<td><?=$tampil_data['kasus']; ?></td>
			</tr>
		
	<?php  }?>
</tr>
</tr></table>

</center>
</body>
</html>
<td></td>
</tr>
	</form>
</center>
</body>
</html>
