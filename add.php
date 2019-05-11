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
  <!-- datepicker timepicker select2 icheck-->
  <link rel="stylesheet" href="bower_components/select2/dist/css/select2.min.css">
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <link rel="stylesheet" href="plugins/timepicker/bootstrap-timepicker.min.css">
  <link rel="stylesheet" href="plugins/iCheck/all.css">

  <link rel="stylesheet"
href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body>
    <a class="btn btn-outline-primary" href="index.php">Go to Home</a>
    <br/><br/>

    <form action="actionADD.php" method="post" name="form1" enctype="multipart/form-data">
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
                </div> 
        </div>
        <div class="form-group">
                <select class="form-control select2" multiple="multiple" data-placeholder="Warna Tersedia"
                        style="width: 100%;" name="warna[]">
                  <option value="Merah">Merah</option>
                  <option value="Hitam">Hitam</option>
                  <option value="Biru">Biru</option>
                  <option value="Putih">Putih</option>
                  <option value="Kuning">Kuning</option>
                  <option value="Hijau">Hijau</option>
                  <option value="Oranye">Oranye</option>
                </select>
        </div>
        <div class="form-group">
        <label>Kelengkapan : </label><br>
            <label>
                  <input type="checkbox" class="minimal-red" checked name="kelengkapan[]" value="Kartu Garansi">
                   Kartu Garansi
            </label><br>
            <label>
                  <input type="checkbox" class="minimal-red" name="kelengkapan[]" value="Dus / Kotak Box">
                  Dus / Kotak Box
            </label><br>
            <label>
                  <input type="checkbox" class="minimal-red" name="kelengkapan[]" value="Packaging , Bubble Wrap , Box">
                  Packaging , Bubble Wrap , Box
            </label><br>
            <label>
                  <input type="checkbox" class="minimal-red" name="kelengkapan[]" value="Geratis Biaya Kirim">
                  Geratis Biaya Kirim
            </label>
        </div>
        <div class="form-group">
        <label>Garansi : </label><br>
            <label>
              <input type="radio" name="garansi" class="minimal-red" checked value="garansi">
              Garansi
            </label>
            <label>
              <input type="radio" name="garansi" class="minimal-red" value="tidak garansi">
              Tidak ada Garansi
            </label>
        </div>
        <div class="form-group">
          <label>Upload Gambar</label>
          <input type="file" name="image">
          <p class="help-block">Upload Gambar Product</p>
        </div>
        <div class="form-group">
            <input type="submit" name="Submit" value="Add" class="btn-success">
        </div>
     </div>
    </form>

 
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src="bower_components/fastclick/lib/fastclick.js"></script>
    <script src="dist/js/adminlte.min.js"></script>
    <script src="dist/js/demo.js"></script>
    <!-- select2 timepicker datepicker icheck-->
    <script src="bower_components/select2/dist/js/select2.full.min.js"></script>
    <script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script src="plugins/timepicker/bootstrap-timepicker.min.js"></script>
    <script src="plugins/input-mask/jquery.inputmask.js"></script>
    <script src="plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
    <script src="plugins/input-mask/jquery.inputmask.extensions.js"></script>
    <script src="plugins/iCheck/icheck.min.js"></script>
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
        $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
          checkboxClass: 'icheckbox_minimal-red',
          radioClass   : 'iradio_minimal-red'
        })
    })
    </script>
</body>
</html>