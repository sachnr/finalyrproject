<?php
session_start();
if(!isset($_SESSION['sessuser'])){
   header("Location:index.php");
}
$title='edit';
$page='edit';
include 'dashheader.php';
?>
	<main>
		<div class="container">
	  			<div class="row valign-wrapper add-height">
	  					<div class="card-panel z-depth-5 col s10 right" style="background-color: #181915;">
	  						<form method="POST" action="getdata.php">
							 <input type="file" name="myimage">
							 <input type="submit" name="submit_image" value="Upload">
							</form>

	  					</div>
	  			</div>
	  	</div>
	</main>
	