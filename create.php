<?php
header("Content-type:application/json");
include_once("config.php");
$nama = $_POST['name'];
$type = $_POST['type'];
$desc = $_POST['deskripsi'];
$harga = $_POST['harga'];
$result = mysqli_query($conn, "INSERT INTO product (name,type,deskripsi,harga) VALUES('$nama','$type','$desc','$harga')");
// $sql = "SELECT * FROM product Order by id desc LIMIT 1";
// $result = $mysqli->query($sql);
// $data = $result->fetch_assoc();
// echo json_encode($data, JSON_PRETTY_PRINT);

?>