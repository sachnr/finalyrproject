		<!DOCTYPE html>
		<html>
		  	<head>
			  	<title>College erp</title>
			  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
			  	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
			    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
			    <link rel="stylesheet" href="css/materialize.min.css">
				<link href="css/bootstrap.css" rel="stylesheet">
			    <link rel="stylesheet" href="css/style.css">
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
			  			<div class="container"><div class="row">
			  				<div class="logo col s1">
		                		<figure><a href="index.php"><img src="images/erpban.png" alt="" style="height: 60px;"></a></figure>
		                	</div>
			  				<div class="col s4 m2 offset-m9">
			  					<div class="info-box visible-xs visible-md visible-lg">
			  						<a class="cbtn waves-effect waves-light btn discord z-depth-5"href="#" data-toggle="modal" data-target="#myModal" id="myBtn">log in</a>
			                    </div>
			  				</div>
			  			</div>
			  			</div>
			  		</header>
		  		</div>
		<!--modal-->
  		<div class="modal fade" id="myModal" role="dialog">
        	<div class="modal-dialog sublime card-panel modalpos">
      			<div class="modal-content sublime" >
        			<div class="modal-header sublime">
          				<h4 class="modal-title"><center><img src="images/erpban.png" alt="" style="height:60px;"></center></h4>
        			</div>
        			<div class="modal-body sublime">
        				<form action="" method="POST">      
                      		<h3 class="center">Login</h3>
                      
		                      <div class="input-field">
		                      <i class="material-icons prefix">account_circle</i>
		                      <input type="text" name="username">
		                      <label>Enter username</label>
		                      </div>
                  
		                      <div class="input-field">
		                      <i class="material-icons prefix">lock</i>
		                      <input type="password" name="pass1">
		                      <label>Enter password</label>
		                      </div>
             
	                         <p class="right"><a href="#signup" class="modal-trigger"><small>Forgot password</small></a></p>
	                         <input type="submit" name="submit" value="Login" class="cbtn waves-effect waves-light btn-small left col s12 discord">
                
                             <div class="clearfix"></div>
                	    </form>
                	</div>
	                <div class="modal-footer sublime">

	          			
	        		</div>
           		</div>
        	</div>
        </div>