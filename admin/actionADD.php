   <?php
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $nama = $_POST['nama'];
        $type = $_POST['type'];
        $desc = $_POST['desc'];
        $harga = $_POST['harga'];
        $garansi = $_POST['garansi'];
        $tanggal_exp = date("Y-m-d h:i:s", strtotime($_POST['tanggal_exp']." ".$_POST['time_exp']));
        $kelengkapan = $_POST['kelengkapan'];
        $warna = $_POST['warna'];
        $arr_kelengkapan = '';
        $arr_warna = '';
        for ($i=0; $i < sizeof($kelengkapan);$i++) { 
              $arr_kelengkapan = $kelengkapan[$i].", ".$arr_kelengkapan;
        };
        for ($i=0; $i < sizeof($warna);$i++) { 
              $arr_warna = $warna[$i].", ".$arr_warna;
        };
        //file Upload
        $direktori  = '';
        $lokasi_file = '';
        if(isset($_FILES['image'])){
            $lokasi_file = $_FILES['image']['tmp_name'];
            $tipe_file   = $_FILES['image']['type'];
            $nama_file   = $_FILES['image']['name'];
            $direktori   = "image/profile/$nama_file";
          }
          include_once("config.php");
          $sql = "INSERT INTO product (name,type,deskripsi,harga,tanggal_exp,kelengkapan,garansi,warna,image_url) VALUES('$nama','$type','$desc','$harga','$tanggal_exp','$arr_kelengkapan','$garansi','$arr_warna','$direktori')";
        if ($conn->query($sql) === TRUE) {
            move_uploaded_file($lokasi_file,$direktori); 
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        echo "User added successfully. <a href='index.php'>View Users</a>";
    }
    ?>