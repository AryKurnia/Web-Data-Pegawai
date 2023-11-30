<?php
    require 'functions.php';
	$nip = $_GET["nip"];

    if (hapus($nip) > 0) {
        echo "
        <script>
            alert('data berhasil dihapus!');
            document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('data gagal dihapus!');
            document.location.href = 'index.php';
        </script>
        ";
    }
?>