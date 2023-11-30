<?php
// Koneksi ke database
$conn = mysqli_connect("localhost","root","","kepegawaian");


// Fungsi menampilkan data
function query ($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

// Fungsi pengambilan Data
function ambilDataByNIP($nip) {
    global $conn;

    $result = mysqli_query($conn, "SELECT * FROM pegawai WHERE nip = '$nip'");

    if (!$result) {
        die("Error: " . mysqli_error($conn));
    }

    $pegawai = mysqli_fetch_assoc($result);

    mysqli_free_result($result);

    return $pegawai;
}

// Fungsi ubah data
function ubahData($nip, $nama, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $alamat, $no_hp, $email) {
    global $conn;
    
    $stmt = $conn->prepare("UPDATE pegawai SET nama=?, tempat_lahir=?, tanggal_lahir=?, jenis_kelamin=?, alamat=?, no_hp=?, email=? WHERE nip=?");
    
    $stmt->bind_param("ssssssss", $nama, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $alamat, $no_hp, $email, $nip);
    
    if ($stmt->execute()) {
        $stmt->close();
        return true; // Data berhasil diubah
    } else {
        $stmt->close();
        return false; // Gagal mengubah data
    }
}

// Fungsi hapus data
function hapus ($nip) {
    global $conn;
    mysqli_query($conn, "DELETE FROM pegawai WHERE nip = '$nip'");
    return mysqli_affected_rows($conn);
}

// Fungsi pencarian
function cariPegawai($conn, $filter, $pencarian) {
    $query = "SELECT nip, nama, tempat_lahir, tanggal_lahir, jenis_kelamin, alamat, no_hp, email FROM `pegawai` WHERE $filter LIKE ?";

    // Membuat prepared statement
    $stmt = $conn->prepare($query);

    // Binding parameter
    $pencarian = "%" . $pencarian . "%";
    $stmt->bind_param("s", $pencarian);

    // Eksekusi pernyataan
    $stmt->execute();

    // Mendapatkan hasil query
    $result = $stmt->get_result();

    // Fetch hasil query menjadi array asosiatif
    $pegawai = $result->fetch_all(MYSQLI_ASSOC);

    // Tutup statement
    $stmt->close();

    return $pegawai;
}
?>