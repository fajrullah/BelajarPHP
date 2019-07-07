<?php 
include_once("config.php");
$result = mysqli_query($conn, "SELECT * FROM product ORDER BY id ASC");?>

<select name="category">
<?php while($user_data = mysqli_fetch_array($result)) { ?>
    <option value="<?php echo $user_data['id'] ?>"><?php echo $user_data['type'] ?></option>
<?php } ?>
</select>
  
