<?php
// panggil file config.php masukkan coding kedalam file ini
include_once("config.php");

// panggil tabel product dan tampilkan semua * dan urutkan menjadi descending / besar ke kecil
$result = mysqli_query($conn, "SELECT * FROM product ORDER BY id DESC");
?>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Belajar Program</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Menyisipkan Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>

<body>
<a href="add.php">Add New User</a><br/><br/>
    <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Name</th> <th>Deskripsi</th> <th>Type</th> <th>Harga</th><th>Update</th>
            </tr>
        </thead>
        <tbody>
        <?php  
        while($user_data = mysqli_fetch_array($result)) {     
            echo "<tr>";
            echo "<td>".$user_data['name']."</td>";
            echo "<td>".$user_data['deskripsi']."</td>";
            echo "<td>".$user_data['type']."</td>";
            echo "<td>".$user_data['harga']."</td>";       
            echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
        }
        ?>
        </tbody>
        <tfoot>
            <tr>
                <th>Name</th> <th>Deskripsi</th> <th>Type</th> <th>Harga</th><th>Update</th>
            </tr>
        </tfoot>
        </table>
    </div>
</body>
<script>
$(document).ready( function () {
    $('#example1').DataTable();
} );
</script>
<script src="js/bootstrap.min.js"></script>
</html>