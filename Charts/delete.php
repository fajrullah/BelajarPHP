<?php
include_once("config.php");
echo $_GET['kode_anggaran'];
$kode_anggaran = $_GET['kode_anggaran'];
$result = mysqli_query($conn, "DELETE FROM anggaran WHERE kode_anggaran='$kode_anggaran'");
header("Location:anggaranview.php");
?>