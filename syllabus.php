<?php
session_start();
if(!isset($_SESSION['sessuser'])){
   header("Location:index.php");
}
$title='syllabus';
$page='syllabus';
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
	  			<div class="row valign-wrapper" style="height: 100rem;">	  				
	  				<div class="col s12 " id="user-info" style="background-color: #181915;">
  						<div class="card-panel z-depth-5  " style="background-color: #181915;">
							<div class="card-content white-text">
								<h4 class="card-title center" style="font-family:'arial';font-size: 18px;font-weight:bold;">Syllabus All Semesters</h4>
							</div>
							<div>
							    <object data="uploads/Syllabus.pdf" type="application/pdf" style="width: 100%;height: 70rem"></object>
							</div>
						</div>
					</div>
				</div>
	  	</div>
	</main>
	

