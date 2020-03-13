<?php
if(isset($_POST["submit"])){
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db="loginerp";
	$conn = mysqli_connect($servername, $username, $password,$db);
	
	$id=$_POST['id'];
	$pass=$_POST['password'];
	$college_id=$_POST['cid'];
	$name=$_POST['name'];
	$address=$_POST['address'];
	$date=$_POST['date'];

	$insert_user = mysqli_query($conn, "INSERT INTO `accounts` (id, password) VALUES ('$id', '$pass')");
	$insert_user = mysqli_query($conn, "INSERT INTO `user_info` (college_id, address, birth_date, id, name) VALUES ('$college_id', '$address', '$date', '$id', '$name')");

header("Location:admindashboard.php");
}
?>
 