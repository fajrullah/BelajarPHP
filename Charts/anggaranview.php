<table border="1">
  <tr>
    <td>Kode Anggaran</td>
    <td>Jumlah Anggaran</td>
    <td>Jumlah Penerimaan</td>
    <td>Keterangan</td>
    <td>Tanggal</td>
    <td></td>
  </tr>
    <?php  
     // panggil file config.php masukkan coding kedalam file ini
    include_once("config.php");
    // panggil tabel product dan tampilkan semua * dan urutkan menjadi descending / besar ke kecil
    $result = mysqli_query($conn, "SELECT * FROM anggaran ORDER BY kode_anggaran ASC");
      while($user_data = mysqli_fetch_array($result)) {     
          echo "<tr>";
          echo "<td>".$user_data['kode_anggaran']."</td>";
          echo "<td>".$user_data['jumlah_anggaran']."</td>";
          echo "<td>".$user_data['jumlah_penerimaan']."</td>";
          echo "<td>".$user_data['keterangan']."</td>";
          echo "<td>".$user_data['tanggal']."</td>";         
          echo '<td>'."<a href='delete.php?kode_anggaran=$user_data[kode_anggaran]'>Delete</a></td>";
          echo '</tr>';    
      }
      ?>
</table>
