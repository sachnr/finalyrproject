<?php

if(isset($_POST['submit'])){
$cid=$_POST['mdlid'];
$pass=$_POST['mdlpass'];


$servername = "localhost";
$database = "user";
$username = "sachnr";
$password = "223@#897";

// Create connection

$conn = mysqli_conncect($servername, $username, $password, $database);

// Check connection

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
//insertion in database
$sql =
if ($conn->query($sql) === TRUE) {
    Header( 'Location: index.php?success=3' );
    exit();
} else {
    Header( 'Location: index.php?success=4' );
    exit();
}
mysqli_close($conn);

?>