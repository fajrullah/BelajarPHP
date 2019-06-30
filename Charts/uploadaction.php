<?php 
// menghubungkan dengan koneksi
include 'config.php';
// menghubungkan dengan library excel reader
include "excel_reader2.php";
// upload file xls
$target = basename($_FILES['fileapbd']['name']) ;
move_uploaded_file($_FILES['fileapbd']['tmp_name'], $target);
// beri permisi agar file xls dapat di baca
chmod($_FILES['fileapbd']['name'],0777);
// mengambil isi file xls
$data = new Spreadsheet_Excel_Reader($_FILES['fileapbd']['name'],false);
// menghitung jumlah baris data yang ada
$jumlah_baris = $data->rowcount($sheet_index=0);
// jumlah default data yang berhasil di import
$berhasil = 0;
for ($i=2; $i<=$jumlah_baris; $i++){
	// menangkap data dan memasukkan ke variabel sesuai dengan kolumnya masing-masing
	$prov     = $data->val($i, 1);
	$kab_kota   = $data->val($i, 2);
	$kode_wil  = $data->val($i, 3);
	if($prov != "" && $kab_kota != "" && $kode_wil != ""){
		// input data ke database (table apbd)
        $sql = "INSERT INTO apbd (prov,kab_kota,kode_wil) VALUES('$prov','$kab_kota','$kode_wil')";
        if ($conn->query($sql) === TRUE) {
            $berhasil++;
        } else {
            $berhasil = 0;
        }
	}
}
// hapus kembali file .xls yang di upload tadi
unlink($_FILES['fileapbd']['name']);
// alihkan halaman ke index.php
header("location:index.php?berhasil=$berhasil");
?>