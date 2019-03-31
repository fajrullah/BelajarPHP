<?php
include_once("config.php");
if(isset($_POST['update']))
{   
    $id = $_POST['id'];
    $nama=$_POST['names'];
    $desc=$_POST['deskripsis'];
    $type=$_POST['types'];
    $harga=$_POST['harga'];
    $result = mysqli_query($conn, "UPDATE product SET name='$nama',type='$type',deskripsi='$desc',harga='$harga' WHERE id=$id");
    header("Location: index.php");
}
?>