<?php
session_start();
if(!isset($_SESSION['admin'])){
   header("Location:index.php");
}
$title='adDashboard';
$page='addashboard';
include 'addashheader.php';
?>
	<main>
		<div class="container">
	  			
	  	</div>
	</main>
	


