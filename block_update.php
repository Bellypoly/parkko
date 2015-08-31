<?php
// $id = isset($_GET['id']);
// echo $_GET['id'].'<br>';
// echo $_GET['block_type'];
$block_type = $_GET['block_type'];
$id = $_GET['id'];

$servername = "128.199.248.168";
$username = "root";
$password = "spr1nt3r";
$dbname = "parkko";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if($block_type == '2'){
	$sql = "UPDATE block SET block_type = 1 WHERE id =".$_GET['id'];
}
if($block_type == '1'){
	$sql = "UPDATE block SET block_type = 2 WHERE id =".$_GET['id'];
}
// echo $sql;


if (mysqli_query($conn, $sql)) {
    // echo "Record updated successfully";
} else {
    // echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>