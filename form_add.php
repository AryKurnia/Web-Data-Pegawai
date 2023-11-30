<!DOCTYPE html>
<html>

<head>
	<title>Kepegawaian</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<div class="container">
	<h3>TAMBAH DATA PEGAWAI</h3>
	<form method="POST" action="add.php" enctype="multipart/form-data">
		<ul>
			<li>NIP
				<input type="text" name="nip">
			</li>
			<li>Nama
				<input type="text" name="nama">
			</li>
			<li>Tempat Lahir
				<input type="text" name="tempat_lahir">
			</li>
			<li>Tanggal Lahir
				<input type="date" name="tanggal_lahir">
			</li>
			<li>Jenis Kelamin
				<select id="jenis_kelamin" name="jenis_kelamin">
					<option value="Laki-laki">Laki-laki</option>
					<option value="Perempuan">Perempuan</option>
				</select>
			</li>
			<li>Alamat
				<input type="text" name="alamat">
			</li>
			<li>No HP
				<input type="text" name="no_hp">
			</li>
			<li>Email
				<input type="email" name="email">
			</li>
		</ul>
		<button type="submit">Simpan</button>
	</form>
	</div>
</body>

</html>