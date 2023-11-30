<?php
require 'functions.php';

// Mendapatkan data dari form atau sumber lainnya
$nip = $_POST['nip'];
$nama = $_POST['nama'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];
$email = $_POST['email'];

// Memanggil fungsi ubahData
if (ubahData($nip, $nama, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $alamat, $no_hp, $email)) {
    echo "
    <script>
        alert('Data berhasil diubah!');
        document.location.href = 'index.php';
    </script>
    ";
} else {
    echo "
    <script>
        alert('Data gagal diubah!');
        document.location.href = 'index.php';
    </script>
    ";
}
?>
