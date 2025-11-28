<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $idproduk     = $_POST['idproduk'] ?? '';
    $namaproduk   = $_POST['namaproduk'] ?? '';
    $jumlah       = $_POST['jumlah'] ?? '';
    $harga        = $_POST['harga'] ?? '';
    $barcodeBase64 = $_POST['barcode'] ?? '';
    $tanggal      = $_POST['tanggal'] ?? '';

    $imageData = base64_decode($barcodeBase64);

    $namaFile = $idproduk . "_produk.jpg";
    $filePath = "uploads/" . $namaFile;

    if (file_put_contents($filePath, $imageData)) {

        require_once 'koneksi.php';

        $sql = "INSERT INTO produk (idproduk, namaproduk, jumlah, harga, barcode, tanggal)
                VALUES ('$idproduk', '$namaproduk', '$jumlah', '$harga', '$filePath', '$tanggal')";

        if (mysqli_query($con, $sql)) {
            echo 'Berhasil Menambahkan Produk dan Barcode';
        } else {
            echo 'Gagal Menambahkan Produk: ' . mysqli_error($con);
        }

        mysqli_close($con);

    } else {
        echo 'Gagal menyimpan gambar Barcode';
    }
}
?>
