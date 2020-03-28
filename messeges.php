<?php
session_start();
if(!isset($_SESSION['sessuser'])){
   header("Location:index.php");
}
$title='messeges';
$page='messeges';
include 'dashheader.php';
?>
				<script type="text/javascript" charset="utf8">
	  					$(document).ready(function(){ 				
						 		$.ajax({
									url: 'data.php',
									dataType: 'json', 
									type: 'get',
									success: function(data)
									{  		       
										document.getElementById('himage').src = data[1].location;	   				       				       
							       }					      
							    });
						});
	  			</script>
	<main>
		<div class="container">
	  			
	  	</div>
	</main>
	

