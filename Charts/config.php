<!-- fungsi mengkoneksikan, database MYSQL dengan syntax PHP -->
<?php
$databaseHost = 'localhost';
$databaseName = 'apbd';
$databaseUsername = 'root';
$databasePassword = '';
$conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
?>