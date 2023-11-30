<?php
	require 'functions.php';
	try{
		$sql = "INSERT INTO `pegawai` (`id_pegawai`, `nip`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `no_hp`, `email`) VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?)";
		// $insert = $conn->prepare("INSERT INTO `pegawai` (`id_pegawai`, `nip`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `no_hp`, `email`) VALUES (NULL, :nip, :nama, :tempat_lahir, :tanggal_lahir, :jenis_kelamin, :alamat, :no_hp, :email);");
		
		// Membuat prepared statement
		$insert = $conn->prepare($sql);

		// Binding parameter
		$insert->bind_param("ssssssss", $_POST['nip'], $_POST['nama'], $_POST['tempat_lahir'], $_POST['tanggal_lahir'], $_POST['jenis_kelamin'], $_POST['alamat'], $_POST['no_hp'], $_POST['email']);
	
		// Eksekusi pernyataan
		$insert->execute();
	
		// Tutup statement
		$insert->close();
	
		// Tutup koneksi
		$conn->close();
	
		header('location: ./index.php');
	}catch(PDOException $e){
		print("Terjadi kesalahan dengan pesan : ".$e->getMessage());
		print("<br><a href='./index.php'>Kembali</a>");
		die();
	}
?>