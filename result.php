<?php
session_start();
if(!isset($_SESSION['sessuser'])){
   header("Location:index.php");
}
$title='Dashboard';
$page='dashboard';
include 'dashheader.php';
?>
	<main>
		<div class="container">
	  			
	  	</div>
	</main>
	

