<?php
session_start();
if(!isset($_SESSION['sessuser'])){
   header("Location:index.php");
}
$title='adminadd';
$page='adminadd';
include 'addashheader.php';
?>
	<main>
	  		<div class="container">
	  			<div class="row valign-wrapper add-height">
	  				<div class="col s12">

						<div class="card-panel z-depth-5 sublime"> 
	  					<form action="save.php" method="post">   

	  						  
		                     <h3 class="center">add user</h3>

		                     <div class="row clearfix">
						     <div class="input-field col s6 m3">
		                      <i class="material-icons prefix">account_balance</i>
		                      <input id="id" type="text" name="id" required  maxlength="10">
		                      <label>id</label>      
						     </div>						     
                      		<div class="input-field col s6 m3">
		                      <i class="material-icons prefix">lock</i>
		                      <input type="password" name="password" id="password" required>
		                      <label>Enter password</label>
		                      </div>
						     </div>

						     <div class="input-field col s12">
		                      <i class="material-icons prefix">account_balance</i>
		                      <input id="cid"  type="text" name="cid" required maxlength="10">
		                      <label>Enter college id</label>  
		                     </div>

		                      <div class="input-field col s12">
						     <i class="material-icons prefix">account_circle</i>
						     <input id="name" name="name" type="text" class="validate" required pattern="[A-za-z]*" maxlength="20">
						     <label for="name">Name</label>
						     </div>						     
							   
		                  		
		                  	  <div class="input-field col s12">
		                      <i class="material-icons prefix">email</i>
		                      <input type="text" name="address" id="address" class="validate" required>
		                      <label>address</label>
		                      </div>

		                      <div class="input-field col s12">
		                      <i class="material-icons prefix">grid_on</i>
		                      <input type="text" name="date" id="date" class="validate datepicker" required>
		                      <label>YYYY-MM-DD</label>
		                      </div>		

		                      <button class="cbtn waves-effect waves-light btn left discord col s12 z-depth-5" type="submit" name="submit">add
                   				<i class="material-icons right">send</i>
                   			  </button>
		             		  
		                
		                      <div class="clearfix"></div>
		                    </form>
		                </div>
	  				</div>
	  			</div>
	  		</div>
	  	</main>
				

				<script type="text/javascript">
					$('.datepicker').pickadate({				  
				    format: 'yyyy mm dd' });
				    setDefaultDate: true
				</script>

		                     <!-- <script>
								$(document).ready(function() {
									$('#butsave').on('click', function() {
										$("#butsave").attr("disabled", "disabled");
										var id = $('#id').val();
										var pass = $('#password').val();
										var cid = $('#cid').val();
										var name = $('#name').val();
										var address = $('#address').val();
										if(id!="" && pass!="" && cid!="" && name!="" && address!=""){
											$.ajax({
												url: "save.php",
												type: "POST",
												data: {
													id: id,					
													college_id: cid,
													name: name,
													address:address	,
													password :pass			
												},
												cache: false,
												success: function(dataResult){
													var dataResult = JSON.parse(dataResult);
													if(dataResult.statusCode==200){
														$("#butsave").removeAttr("disabled");
														$('#fupForm').find('input:text').val('');
														$("#success").show();
														$('#success').html('Data added successfully !'); 						
													}
													else if(dataResult.statusCode==201){
													   alert("Error occured !");
													}
													
												}
											});
										}
										else{
											alert('Please fill all the field !');
										}
									});
								});
								</script> -->

