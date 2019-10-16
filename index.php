<?php 
$title='College Erp';
$page='home';
include 'header.php';
if ( isset($_GET['success']) && $_GET['success'] == 1 )
{
     // treat the succes case ex:
     $message = "wrong answer";
		echo "<script type='text/javascript'>M.toast({html: 'Message sent sucessfully!', classes: 'rounded'});
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
						     <input id="first_name" type="text" class="validate">
						     <label for="first_name">First Name</label>
						     </div>
						     <div class="input-field col s12 m6">
						     <i class="material-icons prefix">account_circle</i>
						     <input id="last_name" type="text" class="validate">
						     <label for="last_name">Last Name</label>
						     </div>
						     </div>
		                      
		                      <div class="row clearfix">
		                      <div class="input-field col s12 m6">
		                      <i class="material-icons prefix">account_balance</i>
		                      <input type="text" name="username">
		                      <label>Enter college id</label>
		                      </div>
		                      
		                      <p class="col s12 m6">
							      <label>
							        <input name="group1" type="radio" checked />
							        <span>student</span>
							      </label>
							    </p>
							    <p class="col s12 m6">
							      <label>
							        <input name="group1" type="radio" />
							        <span>faculty</span>
							      </label>
							    </p>
							  </div>
							   
		                  		
		                  	  <div class="input-field col s12">
		                      <i class="material-icons prefix">email</i>
		                      <input type="email" name="email" class="validate">
		                      <label>Enter email</label>
		                      </div>

		                      <div class="input-field col s12">
		                      <i class="material-icons prefix">lock</i>
		                      <input type="password" name="pass1">
		                      <label>Enter password</label>
		                      </div>

		                      <div class="input-field col s12">
		                      <i class="material-icons prefix">vpn_key</i>
		                      <input type="password" name="pass2">
		                      <label>Confirm password</label>
		                      </div>

		                      <div class="input-field col s12">
		                      <i class="material-icons prefix">call</i>
		                      <input type="text" name="pass2" data-length="10" class="number">
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
	
  		
        
<?php include 'footer.php';?>

