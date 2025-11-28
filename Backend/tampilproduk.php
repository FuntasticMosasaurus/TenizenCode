<?php
require_once 'koneksi.php';

$idproduk = isset($_GET['idproduk']) ? $_GET['idproduk'] : null;

$result = [];

$query = mysqli_query($con, "SELECT * FROM produk ORDER BY idproduk DESC");

while ($row = mysqli_fetch_assoc($query)) {
    $result[] = $row;
}

header('Content-Type: application/json');
echo json_encode(['result' => $result]);
?>
