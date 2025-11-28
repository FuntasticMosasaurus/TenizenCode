<?php
require_once 'koneksi.php';

$idtransaksi = isset($_GET['idtransaksi']) ? $_GET['idtransaksi'] : null;

$result = [];

$query = mysqli_query($con, "SELECT * FROM transaksi ORDER BY idtransaksi DESC");

while ($row = mysqli_fetch_assoc($query)) {
    $result[] = $row;
}

header('Content-Type: application/json');
echo json_encode(['result' => $result]);
?>
