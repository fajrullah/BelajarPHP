<html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Halaman Admin</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="bower_components/select2/dist/css/select2.min.css">
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <link rel="stylesheet" href="plugins/timepicker/bootstrap-timepicker.min.css">
  <link rel="stylesheet"
href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body>
    <a class="btn btn-outline-primary" href="index.php">Go to Home</a>
    <br/><br/>

    <form action="add.php" method="post" name="form1">
     <div class="col-md-6">
        <div class="form-group">
            <input type="text" name="nama"  class="form-control" placeholder="Nama">
        </div>
        <div class="form-group">
            <select name="type" class="form-control select2">
              <option selected="selected" disabled="">Pilih Type ...</option>
              <option value="Aksesoris">Aksesoris</option>
              <option value="Hardware">Hardware</option>
              <option value="Software">Software</option>
              <option value="Perbaikan">Perbaikan</option>
              <option value="Graphic">Graphic</option>
              <option value="Sound">Sound</option>
            </select>
        </div>
        <div class="form-group">
        <textarea name="desc" class="form-control" placeholder="Deskripsi"></textarea>
        </div>
        <div class="form-group">
            <input type="number" name="harga" class="form-control" placeholder="0">
        </div>
        <div class="form-group">
            <label>Tanggal Exp:</label>
            <div class="input-group date">
              <div class="input-group-addon">
                <i class="fa fa-calendar"></i>
              </div>
              <input type="text" class="form-control pull-right" id="datepicker" name="tanggal_exp">
            </div>
        </div>
        <div class="bootstrap-timepicker">
                <div class="form-group">
                  <label>Time picker:</label>

                  <div class="input-group">
                    <input type="text" class="form-control timepicker" name="time_exp">

                    <div class="input-group-addon">
                      <i class="fa fa-clock-o"></i>
                    </div>
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->
        </div>
        <div class="form-group">
            <input type="submit" name="Submit" value="Add" class="btn-success">
        </div>
     </div>
    </form>

    <?php

    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $nama = $_POST['nama'];
        $type = $_POST['type'];
        $desc = $_POST['desc'];
        $harga = $_POST['harga'];
        $tanggal_exp = date("Y-m-d h:i:s", strtotime($_POST['tanggal_exp']." ".$_POST['time_exp']));
        echo $tanggal_exp;
        include_once("config.php");
        $result = mysqli_query($conn, "INSERT INTO product (name,type,deskripsi,harga,tanggal_exp) VALUES('$nama','$type','$desc','$harga','$tanggal_exp')");
        echo "User added successfully. <a href='index.php'>View Users</a>";
    }
    ?>
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src="bower_components/fastclick/lib/fastclick.js"></script>
    <script src="dist/js/adminlte.min.js"></script>
    <script src="dist/js/demo.js"></script>
    <!-- select2 timepicker datepicker -->
    <script src="bower_components/select2/dist/js/select2.full.min.js"></script>
    <script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script src="plugins/timepicker/bootstrap-timepicker.min.js"></script>
    <script src="plugins/input-mask/jquery.inputmask.js"></script>
    <script src="plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
    <script src="plugins/input-mask/jquery.inputmask.extensions.js"></script>
    <script>
    $(function () {
        //inisialisasi select2
        $('.select2').select2()
        //inisialisasi datepicker
        $('#datepicker').datepicker({
          autoclose: true
        })
        $('.timepicker').timepicker({
          showInputs: false
        })
    })
    </script>
</body>
</html>