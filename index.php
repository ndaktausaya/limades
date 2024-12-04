<?php
$koneksi=mysqli_connect("localhost", "root", "", "pengarsipan");
if (isset($_POST['simpan'])) {

	$id=mysqli_real_escape_string($koneksi, $_POST['id']);
	$nama=mysqli_real_escape_string($koneksi, $_POST['nama']);
	$alamat=mysqli_real_escape_string($koneksi, $_POST['alamat']);
	$no_hp=mysqli_real_escape_string($koneksi, $_POST['no_hp']);
	$tgl_pelayanan=mysqli_real_escape_string($koneksi, $_POST['tgl_pelayanan']);
	$tujuan_pelayanan=mysqli_real_escape_string($koneksi, $_POST['tujuan_pelayanan']);
	$kasus=mysqli_real_escape_string($koneksi, $_POST['kasus']);
	$simpan=mysqli_query($koneksi, "INSERT INTO arsip_pelayanan VALUES('$id', '$nama', '$alamat', '$no_hp', '$tgl_pelayanan', '$tujuan_pelayanan', '$kasus')");
	if ($simpan) {
		echo "<script> window.alert('Pengarsipan Layanan Berhasil Dilakukan') </script>";
	}else{
		echo"<script> window.alert('Pengarsipan Layanan Gagal, Silahkan diulangi') </script>";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sistem Pengarsipan Layanan</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<center>
	<h4> Form Pengarsipan Layanan Kanwil Kemenkumham </h4>
	<form action="" method="post">
		<table>
			<tr>
				<td>ID/No. Pelayanan</td>
				<td><input type="text" placeholder="Silahkan isi ID/No. Pelayanan" name="id" style="width:500px; height:30px;" required ></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" placeholder="Silahkan isi Nama Penerima Layanan" name="nama" style="width:500px; height:30px;" required></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" placeholder="Silahkan isi Alamat Penerima Layanan" name="alamat" style="width:500px; height:30px;" required></td>
			</tr>
			<tr>
				<td>No. Telepon</td>
				<td><input type="number" placeholder="Silahkan isi No Telepon Penerima Layanan" name="no_hp" style="width:500px; height:30px;" required></td>
			</tr>
			<tr>
				<td>Tanggal Pelayanan</td>
				<td><input type="date" placeholder="Silahkan isi Tanggal Pelayanan" name="tgl_pelayanan" style="width:500px; height:30px;" required></td>
			</tr>
			<tr>
				<td>Divisi Pelayanan</td>
				<td><select name="tujuan_pelayanan" style="width:500px; height:30px;" required>
				    <option value="">Silahkan isi Divisi Pelayanan</option>
					<option value="Divisi Administrasi">Divisi Administrasi</option>
					<option value="Divisi Pemasyarakatan">Divisi Pemasyarakatan</option>
					<option value="Divisi Keimigrasian">Divisi Keimigrasian</option>
					<option value="Divisi Pelayanan Hukum">Divisi Pelayanan Hukum</option>
					<option value="Lainnya">Lainnya</option>

</select></td>
			</tr>
			<tr>
				<td>Detail Pelayanan</td>
				<td><textarea type="textbox" placeholder="Silahkan isi Detail Pelayanan" name="kasus" style="width:500px; height:60px;" required></textarea></td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="simpan" value="Simpan Pengarsipan">
				</td>
			</tr>
		</table>
		<br></br>
				<br></br>
						<br></br>
		<tr>
				<td>Klik disini untuk Melihat Pelayanan yang Telah di Arsip</td>
					<br></br>
				<td><a href="lihatdata.php">Lihat Data</a></td></tr>

<td></td>
</tr>
	</form>
</center>
</body>
</html>
