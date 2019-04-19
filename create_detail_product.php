<?php
header("Content-type:application/json");
include_once("config.php");
$nama = $_POST['name'];
$img = $_POST['img'];
$tgldibuat = $_POST['tgldibuat'];
$tglexp = $_POST['tglexp'];
$beratbarang = $_POST['beratbarang'];
$idproduct = $_POST['idproduct'];
$deskripsi = $_POST['deskripsi'];

$result = mysqli_query($conn, "INSERT INTO detail_product (url_img,name_detail,deskripsi_detail,tanggal_dibuat,tanggal_exp,berat_barang,id_product) VALUES('$img','$nama','$tgldibuat','$tglexp','$beratbarang','$idproduct')");
// $sql = "SELECT * FROM product Order by id desc LIMIT 1";
// $result = $mysqli->query($sql);
// $data = $result->fetch_assoc();
// echo json_encode($data, JSON_PRETTY_PRINT);
?>