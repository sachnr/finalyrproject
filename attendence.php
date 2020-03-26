<?php
session_start();
if(!isset($_SESSION['sessuser'])){
   header("Location:index.php");
}
$title='attendence';
$page='attendence';
include 'dashheader.php';
?>
	<main>
		<div class="container">
	  			
	  	</div>
	</main>
	

