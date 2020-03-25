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
	  			<div class="row valign-wrapper" style="height: 1000px;">
	  				<script type="text/javascript">
	  					$(document).ready(function(){		  				
						 		$.ajax({
									url: 'data.php',
									dataType: 'json', 
									type: 'get',
									success: function(data)
									{ 
										document.getElementById('pimage').src = data[1].location;                		     
								       $('#ph').append(data[0].phone);
								       $('#email').append(data[0].email);
								       $('#name').append(data[0].name);
								       $('#fname').append(data[0].fname);
								       $('#date').append(data[0].dob);
								       $('#course').append(data[0].course);
								       $('#branch').append(data[0].branch);
								       $('#sem').append(data[0].semester);
								       $('#roll').append(data[0].urno);	
							       }					      
							    });
							
						});
	  				</script>
	  				<div class="col s12 " id="user-info" style="background-color: #181915;">
	  						<div class="card-panel z-depth-5  " style="background-color: #181915;">
			                     <ul id="profile-page-about-details" class="collection z-depth-3" >
				                  <li class="collection-item" >
				                    <div class="row" >
										<div class="col-4">
											<div class="portrait">
											     <img id="pimage" src="" alt="batmanandrobin" class="img-fluid circle responsive-img" style="height: 200px;">
											</div>
										</div>
									</div>
									<div class="grey-text darken-1" id="ph"><i class="material-icons prefix">phone</i></div>
				                 	<div class="grey-text darken-1" id="email"><i class="material-icons prefix">mail</i> </div>
				                  </li>
				                 </ul>
				                 
				              </div>
								
								<div class="card-panel z-depth-5  col s12" style="background-color: #181915;">
								<ul id="profile-page-about-details" class="collection z-depth-1">
									<li class="collection-item">
				                    <div class="row">
				                      <div class="col s5 grey-text darken-1"><i class="mdi-action-wallet-travel"></i>Name</div>
				                      <div class="col s7 grey-text text-darken-4 right-align" id="name"></div>
				                    </div>
				                  </li>
				                  <li class="collection-item">
				                    <div class="row">
				                      <div class="col s5 grey-text darken-1"><i class="mdi-action-wallet-travel"></i>Fathers Name</div>
				                      <div class="col s7 grey-text text-darken-4 right-align" id="fname"></div>
				                    </div>
				                  </li>
				                  <li class="collection-item">
				                    <div class="row">
				                      <div class="col s5 grey-text darken-1"><i class="mdi-social-poll"></i>Date Of Birth</div>
				                      <div class="col s7 grey-text text-darken-4 right-align" id="date"></div>
				                    </div>
				                  </li>
				                  <li class="collection-item">
				                    <div class="row">
				                      <div class="col s5 grey-text darken-1"><i class="mdi-social-domain"></i>Course</div>
				                      <div class="col s7 grey-text text-darken-4 right-align" id="course"></div>
				                    </div>
				                  </li>
				                  <li class="collection-item">
				                    <div class="row">
				                      <div class="col s5 grey-text darken-1"><i class="mdi-social-cake"></i>Branch</div>
				                      <div class="col s7 grey-text text-darken-4 right-align" id="branch"></div>
				                    </div>
				                  </li>
				                  <li class="collection-item">
				                    <div class="row">
				                      <div class="col s5 grey-text darken-1"><i class="mdi-social-cake"></i>Semester</div>
				                      <div class="col s7 grey-text text-darken-4 right-align" id="sem"></div>
				                    </div>
				                  </li>
				                  <li class="collection-item">
				                    <div class="row">
				                      <div class="col s5 grey-text darken-1"><i class="mdi-social-cake"></i>University Roll no.</div>
				                      <div class="col s7 grey-text text-darken-4 right-align" id="roll"></div>
				                    </div>
				                  </li>
				                </ul>
				            </div>
								<!--
				                  <li class="collection-item">
				                    <div class="row ">
				                      <div class="col s5 grey-text darken-1"><i class="mdi-action-wallet-travel"></i> Name</div>
				                      <div class="col s7 grey-text text-darken-4 right-align">ABC Name</div>
				                    </div>
				                  </li>
				                  <li class="collection-item">
				                    <div class="row">
				                      <div class="col s5 grey-text darken-1"><i class="mdi-social-poll"></i> College ID</div>
				                      <div class="col s7 grey-text text-darken-4 right-align">16n31023</div>
				                    </div>
				                  </li>
				                  <li class="collection-item">
				                    <div class="row">
				                      <div class="col s5 grey-text darken-1"><i class="mdi-social-domain"></i> Address</div>
				                      <div class="col s7 grey-text text-darken-4 right-align">NY, USA</div>
				                    </div>
				                  </li>
				                  <li class="collection-item">
				                    <div class="row">
				                      <div class="col s5 grey-text darken-1"><i class="mdi-social-cake"></i> Birth date</div>
				                      <div class="col s7 grey-text text-darken-4 right-align">18th June, 1991</div>
				                    </div>
				                  </li>
							-->
							</div>              
	  			</div>
	  	</div>
	</main>
	

