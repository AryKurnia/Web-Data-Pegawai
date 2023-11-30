<?php
require 'functions.php';
$pegawai = query("SELECT nip, nama, tempat_lahir, tanggal_lahir, jenis_kelamin, alamat, no_hp, email FROM `pegawai`");
?>

<!DOCTYPE html>
<html>

<head>
	<title>Kepegawaian</title>
	<link rel="stylesheet" href="style_index.css">
</head>

<body>
	<h1>GAFTAR PEGAWAI</h1>
	<div class="add">
		<a href="form_add.php">Tambah Data</a><br>
	</div>
	<div class="filter">
		<form action="index.php" method="GET">
			<label for="">Cari berdasarkan : </label>
			<select name="filter">
				<option value="nip">NIP</option>
				<option value="nama">Nama</option>
				<option value="tempat_lahir">Tempat Lahir</option>
				<option value="tanggal_lahir">Tanggal Lahir</option>
				<option value="jenis_kelamin">Jenis Kelamin</option>
				<option value="alamat">Alamat</option>
				<option value="no_hp">NO HP</option>
				<option value="email">email</option>
			</select>
			<input type="text" value="<?php if (isset($_GET['cari'])) {	echo $_GET['cari'];} ?>" name="cari">
			<button type="submit">Cari</button>
		</form>
	</div>
	<table border="1" cellpadding="5" cellspacing="0">
		<tr>
			<th>NIP</th>
			<th>Nama</th>
			<th>Tempat Lahir</th>
			<th>Tgl. Lahir</th>
			<th>Jenis Kelamin</th>
			<th>Alamat</th>
			<th>No. Hp</th>
			<th>Email</th>
			<th>Aksi</th>
		</tr>
		<?php
		if (isset($_GET['cari']) && isset($_GET['filter'])) {
			$filter = $_GET['filter'];
			$pencarian = $_GET['cari'];

			// Panggil fungsi cariPegawai
			$pegawai = cariPegawai($conn, $filter, $pencarian);
		}
		try {
			foreach ($pegawai as $row) {
				echo "<tr>";
				foreach ($row as $in => $val)
					echo "<td>" . $val . "</td>";
				echo "<th>
								<button><a href='form_ubah_data.php?nip=" . $row['nip'] . "'>Ubah</a></button>
								<button><a href='hapus-data.php?nip=" . $row['nip'] . "'>Hapus</a></button>								
							</th>";
				echo "</tr>";
			}
		} catch (PDOException $e) {
			print("Query bermasalah dengan pesan : " . $e->getMessage());
			die();
		}
		?>
</body>

</html>