<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="background-color:brown;">



<?php

$servername = "localhost";
$username = "root";
$password = "05210824";
$dbname = "cndog";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
 
    $sqlf  = " DELETE FROM cnydog";
    $resultf= mysqli_query($conn, $sqlf);
    echo "no data";






 header("Location:index.php"); 
        exit;

?>
</body>
</html>