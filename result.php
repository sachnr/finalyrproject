<?php
session_start();
if(!isset($_SESSION['sessuser'])){
   header("Location:result.php");
}
$title='result';
$page='result';
include 'dashheader.php';
?>
	<main>
		<div class="container">
	  			
	  	</div>
	</main>
	

