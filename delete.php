<?php
include_once("config.php");
$id = $_GET['id'];
$result = mysqli_query($conn, "DELETE FROM product WHERE id=$id");
header("Location:index.php");
?>