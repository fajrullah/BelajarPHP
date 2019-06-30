<html>
<head>
	<title>Import Excel Ke MySQL dengan PHP</title>
</head>
<body>
<a href="index.php">Kembali</a>
<?php 
include 'config.php';
?>
<form method="post" enctype="multipart/form-data" action="uploadaction.php">
<table border="1">
	<tr>
		<td>Upload File Upload File </td>
		<td><input name="fileapbd" type="file" required="required"> </td>
	</tr>
	<tr>
		<td>Button Save</td>
		<td><input name="upload" type="submit" value="Button Import"></td>
	</tr>
</table>
</form>
	
</body>
</html>