<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nis          = $_POST['nis'] ?? '';
    $namasiswa    = $_POST['namasiswa'] ?? '';
    $jk           = $_POST['jk'] ?? '';
    $alamat       = $_POST['alamat'] ?? '';
    $tanggallahir = $_POST['tanggallahir'] ?? '';
    $fotoBase64   = $_POST['foto'] ?? '';

    $imageData = base64_decode($fotoBase64);

    $namaFile = $nis . "_siswa.jpg";
    $filePath = "uploads/" . $namaFile;

    if (file_put_contents($filePath, $imageData)) {

        require_once 'koneksi.php';

        $sql = "INSERT INTO siswa (nis, namasiswa, jk, alamat, tanggallahir, foto)
                VALUES ('$nis', '$namasiswa', '$jk', '$alamat', '$tanggallahir', '$filePath')";

        if (mysqli_query($con, $sql)) {
            echo 'Berhasil Menambahkan Siswa dan QR Code';
        } else {
            echo 'Gagal Menambahkan Siswa: ' . mysqli_error($con);
        }

        mysqli_close($con);

    } else {
        echo 'Gagal menyimpan gambar QR Code';
    }
}
