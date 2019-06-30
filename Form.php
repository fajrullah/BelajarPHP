<form method="POST" action="action.php" enctype="multipart/form-data">
	<input type="text" name="nama"
	placeholder="nama">
	<input type="text" name="keterangan" placeholder="keterangan">
	<textarea name="alamat">Alamat</textarea>
	<input type="text" name="telepon">
	<radio name="jenkel" value="P"/>
	<radio name="jenkel" value="L"/>
 	-- TEXT , NUMBER , TEXTAREA , SELECT, CHECKBOX , RADIO ---
	<input type="file" name="file" />
	<input type="submit" value="Submit"/>
</form>