<?php
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['submit'])) {
        $kode_anggaran = $_POST['kode_anggaran'];
        $jumlah_anggaran = $_POST['jumlah_anggaran'];
        $jumlah_penerimaan = $_POST['jumlah_penerimaan'];
        $keterangan = $_POST['keterangan'];
        $tanggal = $_POST['tanggal'];
        echo $jumlah_anggaran.$jumlah_penerimaan.$keterangan.$tanggal;
        include_once("config.php");
        $sql = "INSERT INTO anggaran (kode_anggaran,jumlah_anggaran,jumlah_penerimaan,keterangan,tanggal) VALUES('$kode_anggaran','$jumlah_anggaran','$jumlah_penerimaan','$keterangan','$tanggal')";
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        echo "User added successfully. <a href='index.php'>View Users</a>";
    }
    ?>