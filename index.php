<?php 
$title='College Erp';
$page='home';
include 'header.php';
if(isset($_SESSION['sessuser'])){
	session_destroy(); 
    session_unset(); 
}
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
else if( isset($_GET['success']) && $_GET['success'] == 3 ){
	echo "<script type='text/javascript'>M.toast({html: 'Invalid id Password!', classes: 'rounded'});
				</script>";
}
else if( isset($_GET['logout']) && $_GET['logout'] == 'true' ){
	echo "<script type='text/javascript'>M.toast({html: 'Logged out successfully', classes: 'rounded'});
				</script>";
}
?>
  		<main>
	  		<div class="container">
	  			<div class="row valign-wrapper add-height">
	  				<div class="col s12 m4 offset-m8">
	  		 

		  				<div class="card-panel z-depth-5 sublime">   
			                <form action="authenticate.php" method="POST">      
	                      		<h3 class="center">Login</h3>
	                      
			                      <div class="input-field">
			                      <i class="material-icons prefix">account_circle</i>
			                      <input type="text" name="mdlid" id="mdlid">
			                      <label>Enter Collegeid</label>
			                      </div>
	                  
			                      <div class="input-field">
			                      <i class="material-icons prefix">lock</i>
			                      <input type="password" name="mdlpass" id="mdlpass">
			                      <label>Enter password</label>
			                      </div>
	             
		                         <p class="right"><a href="#signup" class="modal-trigger"href="#" data-toggle="modal" data-target="#contactus" style="color: #fff;"><small>Forgot password</small></a></p>
		                         <button  class="cbtn waves-effect waves-light btn-small left col s12 discord" type="submit">Login</button>
	                
	                             <div class="clearfix"></div>
                	    	</form>
			            </div>

		                     
	  				</div>
	  			</div>
	  		</div>
	  	</main>
							
  		
        
<?php include 'footer.php';?>

