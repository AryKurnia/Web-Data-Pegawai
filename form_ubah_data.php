<!DOCTYPE html>
<html>

<head>
    <title>Kepegawaian</title>
    <link rel="stylesheet" href="style.css">
</head>

<body> 
    <?php
    require 'functions.php';

    // Periksa apakah ada NIP yang diterima melalui parameter GET
    if (isset($_GET['nip'])) {
        // Dapatkan data pegawai berdasarkan NIP
        $nip_to_edit = $_GET['nip'];
        $pegawai = ambilDataByNIP($nip_to_edit);

        // Periksa apakah data ditemukan
        if ($pegawai) {
            // Mengisi formulir dengan data pegawai yang akan diubah
            $nip = $pegawai['nip'];
            $nama = $pegawai['nama'];
            $tempat_lahir = $pegawai['tempat_lahir'];
            $tanggal_lahir = $pegawai['tanggal_lahir'];
            $jenis_kelamin = $pegawai['jenis_kelamin'];
            $alamat = $pegawai['alamat'];
            $no_hp = $pegawai['no_hp'];
            $email = $pegawai['email'];
        }
    }
    ?>
    <div class="container">
    <h3>UBAH DATA PEGAWAI</h3>
    <form method="POST" action="ubah_data.php" enctype="multipart/form-data">
        <ul>
            <li>NIP
                <input type="text" name="nip" value="<?php echo isset($nip) ? $nip : ''; ?>" readonly>
            </li>
            <li>Nama
                <input type="text" name="nama" value="<?php echo isset($nama) ? $nama : ''; ?>">
            </li>
            <li>Tempat Lahir
                <input type="text" name="tempat_lahir" value="<?php echo isset($tempat_lahir) ? $tempat_lahir : ''; ?>">
            </li>
            <li>Tanggal Lahir
                <input type="date" name="tanggal_lahir" value="<?php echo isset($tanggal_lahir) ? $tanggal_lahir : ''; ?>">
            </li>
            <li>Jenis Kelamin
                <select id="jenis_kelamin" name="jenis_kelamin">
                    <option value="Laki-laki" <?php echo (isset($jenis_kelamin) && $jenis_kelamin == 'Laki-laki') ? 'selected' : ''; ?>>Laki-laki</option>
                    <option value="Perempuan" <?php echo (isset($jenis_kelamin) && $jenis_kelamin == 'Perempuan') ? 'selected' : ''; ?>>Perempuan</option>
                </select>
            </li>
            <li>Alamat
                <input type="text" name="alamat" value="<?php echo isset($alamat) ? $alamat : ''; ?>">
            </li>
            <li>No HP
                <input type="text" name="no_hp" value="<?php echo isset($no_hp) ? $no_hp : ''; ?>">
            </li>
            <li>Email
                <input type="email" name="email" value="<?php echo isset($email) ? $email : ''; ?>">
            </li>
        </ul>
        <button type="submit">Simpan</button>
    </form>
    </div> 
</body>

</html>