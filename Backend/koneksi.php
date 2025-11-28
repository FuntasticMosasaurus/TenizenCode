<?php


$server = "localhost";
$user = "root";
$password = "";
$database = "tenizencode2";

$con = mysqli_connect($server, $user, $password, $database);
if (mysqli_connect_errno()) {
    echo "Gagal menghubungkan ke database" . mysqli_connect_error();
}

?>