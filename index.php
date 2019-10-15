<?php 
$title='College Erp';
$page='home';
?>
<!DOCTYPE html>
<html>
  	<head>
	  	<title>College erp</title>
	  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	  	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	    <link rel="stylesheet" href="css/style.css">
	    <link rel="stylesheet" href="css/materialize.min.css">
		<link href="css/responsive.css" rel="stylesheet">
		<link href="css/bootstrap.css" rel="stylesheet">
		<script src="js/materialize.min.js"></script>
    	<script src="js/jquery.js"></script>
 		<script src="js/popper.min.js"></script>
 		<script src="js/bootstrap.min.js"></script>
  	</head>
  	
  	<body id="index">
  		<div class="page-wrapper">
  			<!-- .preloader -->
    		<div class="preloader"></div>
	  		<header class="main-header " id="header">
	  			<div class="container">
	  			<div class="row">
	  				<div class="logo col s1">
                		<figure><a href="index.php"><img src="images/erpban.png" alt="" style="height: 90px;"></a></figure>
                	</div>
	  				<div class="col s1 offset-s10">
	  					<div class="info-box visible-md visible-lg">
	  						<a class="waves-effect waves-light btn discord"href="#" data-toggle="modal" data-target="#myModal" id="myBtn">login</a>
	                    </div>
	  				</div>
	  			</div>
	  			</div>
	  		</header>
  		</div>

	  		<div class="container"  id="sulocation">
	  			<div class="row">
	  				
	  				<div class="col s4 offset-s8" >
	  					<form action="" method="POST">   

	  						  <div class="card-panel z-depth-5 sublime">   
		                      <h3 class="center">Signup</h3>
		                      
		                      <div class="input-field">
		                      <i class="material-icons prefix">account_circle</i>
		                      <input type="text" name="username" placeholder="Enter username">
		                      </div>
		                  
		                      <div class="input-field">
		                      <i class="material-icons prefix">lock</i>
		                      <input type="password" name="pass1" placeholder="Enter password">
		                      </div>
		             		 <input type="submit" name="submit" value="Sign up" class="btn left col s12 discord">
		                
		                      <div class="clearfix"></div>
		                    </div>
		                    </div>
                	</form>
	  				</div>
	  			</div>
	  		</div>

  		<!--modal-->
  		<div class="modal fade" id="myModal" role="dialog">
        	<div class="modal-dialog sublime card-panel">
      			<div class="modal-content sublime">
        			<div class="modal-header sublime">
          				<h4 class="modal-title"><center><img src="images/erpban.png" alt="" style="height: 90px;"></center></h4>
        			</div>
        			<div class="modal-body sublime">
        				<form action="" method="POST">      
                      		<h3 class="center">Login</h3>
                      
                      		 <div class="input-field">
	                      		<i class="material-icons prefix">account_circle</i>
		                        <input type="text" name="username" placeholder="Enter username">
	                         </div>
                  
		                      <div class="input-field">
			                    <i class="material-icons prefix">lock</i>
			                    <input type="password" name="pass1" placeholder="Enter password">
		                      </div>
             
	                         <p class="right"><a href="#signup" class="modal-trigger">Forgot password</a></p>
	                         <input type="submit" name="submit" value="Login" class="btn left col s12 discord">
                
                             <div class="clearfix"></div>
                	    </form>
                	</div>
	                <div class="modal-footer sublime">
	          			<button type="button" class="btn modal-close discord" data-dismiss="modal">Close</button>
	        		</div>
           		</div>
        	</div>
        </div>
        
<?php include 'footer.php';?>

