<?php 
header("Content-type: application/");
header("Content-Disposition: attachment; filename=Laporan Semester 1.xls");
header("Pragma: no-cache");
header("Expires: 0");
include_once("config.php");
$result = mysqli_query($conn, "SELECT * FROM product ORDER BY id DESC");
?>

<table id="orderlist1" border="1" width="100%">

<thead>
<tr>
	<th>id</th>
	<th>name</th>
	<th>type</th>
	<th>deskripsi</th>
	<th>harga</th>
	<th>tanggal_exp</th>
	<th>garansi</th>
	<th>warna</th>
	<th>image_url</th>
	<th>kelengkapan</th>
 </tr>
</thead>
<tbody>
<?php  
while($user_data = mysqli_fetch_array($result)) {     
    echo "<tr>";
    echo "<td>".$user_data['id']."</td>";
    echo "<td>".$user_data['name']."</td>";
    echo "<td>".$user_data['type']."</td>";
    echo "<td>".$user_data['deskripsi']."</td>";       
	echo "<td>".$user_data['harga']."</td>";  
	echo "<td>".$user_data['tanggal_exp']."</td>"; 
	echo "<td>".$user_data['garansi']."</td>"; 
	echo "<td>".$user_data['warna']."</td>"; 
	echo "<td>".$user_data['image_url']."</td>"; 
	echo "<td>".$user_data['kelengkapan']."</td>"; 
    echo '</tr>';    

}
?>
</tbody>
</table>