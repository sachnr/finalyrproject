	<!DOCTYPE html>
		<html>
		  	<head>
			  	<title>College erp</title>
			  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
			  	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
			    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
			    <link rel="stylesheet" href="css/materialize.css">
				<link href="css/bootstrap.css" rel="stylesheet">
			    <link rel="stylesheet" href="css/style.css">
				<script src="js/popper.min.js"></script>
		    	<script src="js/jquery.js"></script>
				<script src="js/materialize.min.js"></script>
		 		<script src="js/bootstrap.min.js"></script>	
		 		<script src="js/playsound.js"></script>	
				 
				<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
				<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
		  	</head>
		  	
		  	<body id="index">
		  		<div class="page-wrapper">
		  			<!-- .preloader -->
		    		<div class="preloader"></div>


			  		<header class="left_header header">
			  			<!--<div class="container">
			  				<div class="row">
								<div class="col s6 m3 header z-depth-3">
									<nav class="navbar navbar-default" style="background-color: #181915;width:100%;height:60px;text-align: center;float: left">
									    <div class="nav-wrapper">
										    <a class="brand-logo left hide-on-med-and-down" href="index.php"><img src="images/erpban.png" alt="" style="height: 60px;"></a>
										    <ul id="nav-mobile" class="right cbtn">
										      	<li class="<?php if($page=="dashboard.php"){echo "active";} ?>"><a href="">profile</a></li>
										      	<li class="<?php if($page=="course"){echo "active";} ?>"><a href="">course </a></li>
										      	<li class="<?php if($page=="Branch"){echo "active";} ?>"><a href="">Branch</a></li>
										      	<li class="<?php if($page=="Batch"){echo "active";} ?>"><a href="">Batch</a></li>
										    </ul>
										</div>
									</nav>
								</div>
								<div class="col s4 offset-s7 m2 offset-m9">
				  					<div class="info-box visible-xs visible-md visible-lg">
				  						<a class="cbtn waves-effect waves-light btn discord z-depth-5"href="logout.php?logout=true" class="logout-link" data-toggle="modal" data-target="" id="myBtn">log out</a>
				                    </div>
						  		</div>
						  	</div>
			  			</div>-->
			  		<div class="navbar-fixed z-depth-3">
				        <nav class="navbar" style="background-color: #181915;">
				          <div class="nav-wrapper">
				            <ul id="nav-mobile" class="right">
				              <li class="hide-on-med-and-down"><a href="#!" data-target="dropdown1" class="dropdown-trigger waves-effect"><i class="material-icons">notifications</i></a></li>
				              <li><a href="logout.php?logout=true" data-target="" class="btn waves-effect" style="background-color: #181915;"><i class="material-icons">power_settings_new</i></a></li>
				            </ul><a href="#!" data-target="sidenav-left" class="sidenav-trigger left"><i class="material-icons black-text">menu</i></a>
				          </div>
				        </nav>
				    </div>

				    <ul id="sidenav-left" class="sidenav sidenav-fixed "style="background-color: #181915;" >
				    	<div class="user-view">
				    		<a class="brand-logo " href="dashboard.php"><img src="images/erpban.png" alt="" style="height: 60px;"></a>
						</div>
					<div>
						<ul class="cbtn">
		                  <li class="<?php if($page=="dashboard"){echo "active";} ?>"><a href="dashboard.php" class="white-text"> Home<i class="material-icons white-text">web</i></a></li>
		                  <li class="<?php if($page=="attendence"){echo "active";} ?>"><a href="attendence.php" class="white-text">attendence<i class="material-icons white-text">list</i></a></li>
		                  <li class="<?php if($page=="result"){echo "active";} ?>"><a href="result.php" class="white-text">result<i class="material-icons white-text">dashboard</i></a></li>
		                  <li class="<?php if($page=="messeges"){echo "active";} ?>"><a href="messeges.php" class="white-text">messeges<i class="material-icons white-text">chat</i></a></li>
		                </ul>
		            </div>
              		</div>
				    </ul>
       
  	
			    	

			  		</header>
		  		</div>
	