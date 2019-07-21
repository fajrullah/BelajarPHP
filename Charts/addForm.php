<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1>ADD Data</h1>
    <form method="post" action="actionadd.php">
    	<table>
    		<tr>
    			<td>Kode Anggaran</td>
    			<td><input class="form-control" type="text" name="kode_anggaran"></td>
    		</tr>
    		<tr>
    			<td>Jumlah Anggaran</td>
    			<td><input class="form-control" type="number" name="jumlah_anggaran" ></td>
    		</tr>
    		<tr>
    			<td>Jumlah Penerimaan</td>
    			<td><input class="form-control" type="number" name="jumlah_penerimaan" ></td>
    		</tr>
    		<tr>
    			<td>Keterangan</td>
    			<td><textarea class="form-control" name="keterangan"></textarea></td>
    		</tr>
    		<tr>
    			<td>Tanggal</td>
    			<td><input class="form-control" type="date" name="tanggal"></td>
    		</tr>
    		<tr>
    			<td>Jenis Kelamin</td>
    			<td>
    				<input  type="radio" name="jenkel" value="laki2">Laki-laki
    				<input  type="radio" name="jenkel" value="prempuan">Perempuan</td>
    		</tr>
    		<tr>
    			<td>Jenis </td>
    			<td>
    				<select class="form-control" name="jenismakanan">
    					<option value="01">Mie</option>
    					<option value="berat">Rendang</option>
    					<option value="otpional">optional</option>
    				</select>
    		</tr>
    		<tr>
    			<td></td>
    			<td><input class="form-control btn btn-danger" type="submit" name="submit" value="Save"></td>
    		</tr>
    	</table>
	</form>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
