<?php
echo $_POST['id'];
$servername = "128.199.248.168";
$username = "root";
$password = "spr1nt3r";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";



if(isset($_POST['id'])){
    //connect to the db etc...
    $id = mysql_real_escape($_POST['id']);

    mysql_query("UPDATE block SET `block_type` =2 WHERE `id` = $id") or die(mysql_error());

    $results = mysql_fetch_assoc($query);
    echo json_encode($results);
}
?>