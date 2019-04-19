<?php
// panggil file config.php masukkan coding kedalam file ini
include_once("config.php");
// panggil tabel product dan tampilkan semua * dan urutkan menjadi descending / besar ke kecil
$result = mysqli_query($conn, "SELECT * FROM detail_product ORDER BY id_detail_product DESC");
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
  <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Detail Product</h3>
            </div>
            <div class="box-body">
              <button type="button" class="btn btn-success" data-toggle="modal" data-target="#createModal">Tambah Data</button>
            </div>
            <div class="box-body">
                 <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Name</th> 
                            <th>Deskripsi</th> 
                            <th>Url Image</th>
                            <th>Tanggal dibuat</th>
                            <th>Tanggal Exp</th>
                            <th>berat</th>
                            <th>Id product</th>
                            <th>Delete</th>
                            <th>Update</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php  
                    while($user_data = mysqli_fetch_array($result)) {     
                        echo "<tr>";
                        echo "<td>".$user_data['name_detail']."</td>";
                        echo "<td>".$user_data['deskripsi_detail']."</td>";
                        echo "<td>".$user_data['url_img']."</td>";
                        echo "<td>".$user_data['tanggal_dibuat']."</td>";
                        echo "<td>".$user_data['tanggal_exp']."</td>";
                        echo "<td>".$user_data['berat_barang']."</td>";
                        echo "<td>".$user_data['id_product']."</td>";       
                        echo '<td>'."<a href='delete.php?id=$user_data[id_detail_product]'>Delete</a></td>";
                        echo '<td><a href="javascript:;"
                              data-id="'.$user_data['id_detail_product'].'"
                              data-name="'.$user_data['name_detail'].'"
                              data-deskripsi="'.$user_data['deskripsi_detail'].'"
                              data-urlimg="'.$user_data['url_img'].'"
                              data-tgldibuat="'.$user_data['tanggal_dibuat'].'"
                              data-tglexp="'.$user_data['tanggal_exp'].'"
                              data-beratbarang="'.$user_data['berat_barang'].'"
                              data-idproduct="'.$user_data['id_product'].'"
                              data-toggle="modal" data-target="#updateModal">
                              <button  data-toggle="modal" class="btn btn-info">Update <i class="fa fa-edit"></i></button>
                            </a></td></tr>';    
                    }
                    ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Name</th> 
                            <th>Deskripsi</th> 
                            <th>Url Image</th>
                            <th>Tanggal dibuat</th>
                            <th>Tanggal Exp</th>
                            <th>berat</th>
                            <th>Id product</th>
                            <th>Delete</th>
                            <th>Update</th>
                        </tr>
                    </tfoot>
                    </table>
                </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
</section>
<!-- Untuk Mengubah Data / Mengubah Data -->
<div class="modal fade" id="updateModal" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="createModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form data-toggle="validator" action="update.php" method="POST">
            <div class="form-group">
                <input type="hidden" name="id" id="id">
                <label class="control-label" for="Nama">Nama</label>
                <input id="names" type="text" name="names" class="form-control" required />
            </div>
            <div class="form-group">
                <label class="control-label" for="Type">Type</label>
                <input id="types" type="text" name="types" class="form-control" required />
            </div>
            <div class="form-group">
                <label class="control-label" for="Alamat">Deskripsi</label>
                <input id="deskripsis" type="text" name="deskripsis" class="form-control" required />
            </div>
            <div class="form-group">
                <label class="control-label" for="Harga">Harga</label>
                <input id="harga" type="number" name="harga" class="form-control" required />
            </div>
            <div class="form-group">
                <input type="submit" name="update" value="Update" class="btn crud-update btn-success">
                <button  type="reset" id="reset" class="btn crud-update btn-info">Clear</button>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="createModal" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="createModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form data-toggle="validator" action="create_detail_product.php" method="POST">
            <div class="form-group">
                <label class="control-label" for="Nama">Nama</label>
                <input type="text" name="name" class="form-control" required />
            </div>
            <div class="form-group">
                <label class="control-label" for="Type">Image</label>
                <input type="text" name="img" class="form-control" required />
            </div>
            <div class="form-group">
                <label class="control-label" for="Alamat">Tanggal Dibuat</label>
                <input type="date" name="tgldibuat" class="form-control" required />
            </div>
            <div class="form-group">
                <label class="control-label" for="Alamat">Tanggal EXP</label>
                <input type="date" name="tglexp" class="form-control" required />
            </div>
            <div class="form-group">
                <label class="control-label" for="Harga">Berat Barang</label>
                <input type="number" name="beratbarang" class="form-control" required />
            </div>
           <div class="form-group">
                <label class="control-label" for="Harga">ID Product</label>
                <input type="text" name="idproduct" class="form-control" required />
            </div>
            <div class="form-group">
                <label class="control-label" for="Type">Deskripsi</label>
                <textarea id="deskripsi" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" id="submit" class="btn crud-submit btn-success">Submit</button>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
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

$(document).ready(function(){
    $(function () {
    $('#example1').DataTable()
    $('#createModal').on('shown.bs.modal', function () {
        $('#createModal').trigger('focus')
    });
    //javascript Tambah data
    var url = "http://localhost/training/PHPNative/";
      $(".crud-submit").click(function(e){
        e.preventDefault();
        var form_action = $("#createModal").find("form").attr("action");
        var name = $("#createModal").find("input[name='name']").val();
        var tglexp = $("#createModal").find("input[name='tglexp']").val();
        var tgldibuat = $("#createModal").find("input[name='tgldibuat']").val();
        var deskripsi = $("#createModal").find("input[name='deskripsi']").val();
        var img = $("#createModal").find("input[name='img']").val();
        var beratbarang = $("#createModal").find("input[name='beratbarang']").val();
        var idproduct = $("#createModal").find("input[name='idproduct']").val();
        if(name != '' && beratbarang != '' && deskripsi != ''){
            $.ajax({
                dataType: 'json',
                type:'POST',
                url: url + form_action,
                data:{ 'name' : name, 'deskripsi' : deskripsi, 'img' : img, 'tgldibuat' : tgldibuat,'idproduct' : idproduct, 'beratbarang' : beratbarang,'tglexp' : tglexp}
            }).done(function(data){
                // $("#createModal").find("input[name='name']").val('');
                // $("#createModal").find("input[name='type']").val('');
                // $("#createModal").find("input[name='deskripsi']").val('');
                // $("#createModal").find("input[name='harga']").val('');
                //getPageData();
                $(".modal").modal('hide');
            });
                alert('Data berhasil ditambah')
                location.reload();
        }else{
            alert('Ada data yang kosong')
        }
    });
  })
    //javascriptEdit ini untk mengupdate data
  $('#updateModal').on('show.bs.modal', function (event) {
        var div = $(event.relatedTarget) // Tombol dimana modal/popup  di tampilkan
        var pop_modal = $(this)
        pop_modal.find('#id').attr("value",div.data('id'));
        pop_modal.find('#names').attr("value",div.data('names'));
        pop_modal.find('#deskripsis').attr("value",div.data('deskripsis'));
        pop_modal.find('#types').attr("value",div.data('types'));
        pop_modal.find('#harga').attr("value",div.data('harga'));
  });
});
</script>
</body>
</html>