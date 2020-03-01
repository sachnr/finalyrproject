<?php 
$title='College Erp';
$page='home';
include 'header.php';
if ( isset($_GET['success']) && $_GET['success'] == 1 )
{
		echo "<script type='text/javascript'>
				M.toast({html: 'Message sent sucessfully!', classes: 'rounded'});
				</script>";
}
else if( isset($_GET['success']) && $_GET['success'] == 2 ){
	echo "<script type='text/javascript'>M.toast({html: 'Message sent failed!', classes: 'rounded'});
				</script>";

}
?>
  		<main>
	  		<div class="container">
	  			<div class="row valign-wrapper add-height">
	  				<div class="col s12 m4 offset-m8">
	  					<form action="" method="POST" class="col s12">   

	  						<div class="card-panel z-depth-5 sublime">   
		                     <h3 class="center">Signup</h3>

		                     <div class="row clearfix">
						     <div class="input-field col s12 m6">
						     <i class="material-icons prefix">account_circle</i>
						     <input id="first_name" type="text" class="validate" required pattern="[A-za-z]*" maxlength="20">
						     <label for="first_name">First Name</label>
						     </div>
						     <div class="input-field col s12 m6">
						     <i class="material-icons prefix">account_circle</i>
						     <input id="last_name" type="text" class="validate" required pattern="[A-za-z]*" maxlength="20">
						     <label for="last_name">Last Name</label>
						     </div>
						     </div>
		                      
		                      <div class="row clearfix">
		                      <div class="input-field col s12 m6">
		                      <i class="material-icons prefix">account_balance</i>
		                      <input type="text" name="suid" required pattern="[0-9]*" maxlength="10">
		                      <label>Enter college id</label>
		                      </div>
		                      
		                      <p class="col s12 m6">
							      <label>
							        <input name="suradio" type="radio" checked  required/>
							        <span>student</span>
							      </label>
							    </p>
							    <p class="col s12 m6">
							      <label>
							        <input name="suradio" type="radio" />
							        <span>faculty</span>
							      </label>
							    </p>
							  </div>
							   
		                  		
		                  	  <div class="input-field col s12">
		                      <i class="material-icons prefix">email</i>
		                      <input type="email" name="suemail" class="validate" required email maxlength="30">
		                      <label>Enter email</label>
		                      </div>	
	                    

		                      <div class="input-field col s12">
		                      <i class="material-icons prefix">lock</i>
		                      <input type="password" name="password" id="password" required>
		                      <label>Enter password</label>
		                      </div>

		                      <div class="input-field col s12">
		                      <i class="material-icons prefix">vpn_key</i>
		                      <input type="password" name="confirm_password" id="confirm_password" required>
		                      <label>Confirm password</label>
		                      <span class="helper-text" id='message'></span>
		                      </div>

		                      <div class="input-field col s12">
		                      <i class="material-icons prefix">call</i>
		                      <input type="text" name="sumob" data-length="10" class="number" required pattern="[0-9]*" maxlength="10">
		                      <label>Enter mobile no</label>
		                      </div>


		             		  <input type="submit" name="submit" value="Sign up" class="waves-effect waves-light btn cbtn left col s12 discord">
		                
		                      <div class="clearfix"></div>
		                    </div>
		                    </div>
                	</form>
	  				</div>
	  			</div>
	  		</div>
	  	</main>
							<script src="js/jquery.js">
		                      	$('#password, #confirm_password').on('keyup', function () {
								  if ($('#password').val() == $('#confirm_password').val()) {
								    $('#message').html('Matching').css('color', 'green');
								  } else 
								    $('#message').html('Not Matching').css('color', 'red');
								});
		                      </script>	
  		
        
<?php include 'footer.php';?>

