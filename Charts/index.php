<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
<?php 
include_once("config.php");
$result = mysqli_query($conn, "SELECT * FROM anggaran ORDER BY kode_anggaran ASC");
$paramater = [];
$paramaterLine = [];
$paramaterDonut = [];
$paramaterLineTotalPab = [];
while($user_data = mysqli_fetch_array($result)) {
  array_push($paramaterDonut,array(
    'label' => $user_data['kode_anggaran'],
    'value' => $user_data['jumlah_anggaran'],
  ));
  array_push($paramater,array(
    'y' => $user_data['kode_anggaran'],
    'a' => $user_data['jumlah_anggaran'],
    'b' => $user_data['jumlah_penerimaan'],
  ));
  array_push($paramaterLine,array(
    'y' => date('Y', strtotime(($user_data['tanggal']))),
    'a' => $user_data['jumlah_anggaran'],
    'b' => $user_data['jumlah_penerimaan'],
  ));
}
$total_pab = mysqli_query($conn, "SELECT *, SUM(pad) AS total_pad FROM `apbd` GROUP BY prov");
while($user_data = mysqli_fetch_array($total_pab)) {
  array_push($paramaterLineTotalPab,array(
    'y' => $user_data['prov'],
    'a' => $user_data['pad'],
    'b' => $user_data['total_pad'],
  ));
}
$jsonData = json_encode($paramater); 
$jsonDataLine = json_encode($paramaterLine);
$jsonDataDonut = json_encode($paramaterDonut); 
$jsonDataBarPab = json_encode($paramaterLineTotalPab);
if(isset($_GET['berhasil'])){
  echo "<p>".$_GET['berhasil']."Data berhasil di import.</p>";
}   
?>
<a href="importexcel.php">IMPORT DATA</a>
<div id="pabbar" style="height: 250px;"></div>
<div id="myfirstchart" style="height: 250px;"></div>
<div id="mysecondchart" style="height: 250px;"></div>
<div id="mythirdchart" style="height: 250px;"></div>
<script type="text/javascript">
Morris.Bar({
  element: 'pabbar',
  data: <?php echo $jsonDataBarPab; ?>
  ,
  xkey: 'y',
  ykeys: ['a', 'b'],
  labels: ['Pab', 'total Pab']
});
Morris.Bar({
  element: 'myfirstchart',
  data: <?php echo $jsonData; ?>
  ,
  xkey: 'y',
  ykeys: ['a', 'b'],
  labels: ['Jumlah Anggaran', 'Jumlah Penerimaan']
});
Morris.Line({
  element: 'mysecondchart',
  data: <?php echo $jsonDataLine; ?>,
  xkey: 'y',
  ykeys: ['a','b'],
  labels: ['Value']
});
Morris.Donut({
  element: 'mythirdchart',
  data: <?php echo $jsonDataDonut; ?>
});
</script>
