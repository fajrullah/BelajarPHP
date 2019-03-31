<?php
// panggil file config.php masukkan coding kedalam file ini
include_once("config.php");

// panggil tabel product dan tampilkan semua * dan urutkan menjadi descending / besar ke kecil
$result = mysqli_query($conn, "SELECT * FROM product ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Belajar Program</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet"
href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body>
<div class="container">
    <a class="btn btn-outline-primary" href="add.php">Add New User</a><br/><br/>
    <!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
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
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<script src="dist/js/adminlte.min.js"></script>
<script src="dist/js/demo.js"></script>
<script>
  $(function () {
    $('#example1').DataTable()
  })
</script>
</body>
</html>

