<html>
<head>
    <title>Add Products</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>

    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0" class="table table-stripped">
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="nama"  class="form-control" placeholder="Nama"></td>
            </tr>
            <tr> 
                <td>Type</td>
                <td><input type="text" name="type" class="form-control" placeholder="Type"></td>
            </tr>
            <tr> 
                <td>Deskripsi</td>
                <td>
                    <textarea name="desc" class="form-control" placeholder="Deskripsi"> 
                    </textarea>
                </td>
            </tr>
           <tr> 
                <td>Harga</td>
                <td><input type="number" name="harga" class="form-control" placeholder="0"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add" class="btn-success"></td>
            </tr>
        </table>
    </form>

    <?php

    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $nama = $_POST['nama'];
        $type = $_POST['type'];
        $desc = $_POST['desc'];
        $harga = $_POST['harga'];
        include_once("config.php");
        $result = mysqli_query($conn, "INSERT INTO product (name,type,deskripsi,harga) VALUES('$nama','$type','$desc','$harga')");
        echo "User added successfully. <a href='index.php'>View Users</a>";
    }
    ?>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>