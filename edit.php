<?php
include_once("config.php");
if(isset($_POST['update']))
{   
    $id = $_POST['id'];
    $nama=$_POST['nama'];
    $desc=$_POST['desc'];
    $type=$_POST['type'];
    $harga=$_POST['harga'];
    $result = mysqli_query($conn, "UPDATE product SET name='$nama',type='$type',deskripsi='$desc',harga='$harga' WHERE id=$id");
    header("Location: index.php");
}
?>
<?php
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM product WHERE id=$id");
while($user_data = mysqli_fetch_array($result))
{
    $nama = $user_data['name'];
    $desc = $user_data['deskripsi'];
    $type = $user_data['type'];
    $harga = $user_data['harga'];
}
?>
<html>
<head>  
    <title>Edit User Data</title>
</head>

<body>
    <a href="index.php">Home</a>
    <br/><br/>

    <form name="update_user" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>Name</td>
                <td><input type="text" name="nama" value=<?php echo $nama;?>></td>
            </tr>
            <tr> 
                <td>type</td>
                <td><input type="text" name="type" value=<?php echo $type;?>></td>
            </tr>
            <tr> 
                <td>desc</td>
                <td><input type="text" name="desc" value=<?php echo $desc;?>></td>
            </tr>
            <tr> 
                <td>harga</td>
                <td><input type="text" name="harga" value=<?php echo $harga;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>