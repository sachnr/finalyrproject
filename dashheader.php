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
			  		<div class="navbar-fixed z-depth-3">
				        <nav class="navbar" style="background-color: #181915;">
				          <div class="nav-wrapper">
				            <ul id="nav-mobile" class="right">
				              	<li class="nav-item dropdown"><a href="#!" data-target="dropdown1" class="dropdown-trigger waves-effect"><i class="material-icons">notifications</i></a></li>
								<li class="nav-item dropdown">
									<a class="waves-effect dropdown-toggle " href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><img id="himage" src="" alt="batman" class="img-fluid circle responsive-img" style="height: 30px;"><i class="material-icons right" style="margin-left: 0px;">arrow_drop_down</i></a>
									<div class="dropdown-menu dropdown-menu-right z-depth-3" aria-labelledby="navbarDropdownMenuLink" style="background-color: #181915;padding: 0rem;font-size: 1rem;">
										<a class="dropdown-item clearfix" href="#"><i class="material-icons left" style="margin-right:2px;">settings</i>Change password</a>
										<a class="dropdown-item clearfix" href="logout.php?logout=true"><i class="material-icons left" style="margin-right:4px;">power_settings_new</i>Logout</a>	
									</div>
								</li>	           
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
		                  <li class="<?php if($page=="syllabus"){echo "active";} ?>"><a href="syllabus.php" class="white-text">Syllabus<i class="material-icons white-text">list</i></a></li>
		                  <li class="<?php if($page=="timetable"){echo "active";} ?>"><a href="timetable.php" class="white-text">TimeTable<i class="material-icons white-text">dashboard</i></a></li>
		                  <li class="<?php if($page=="messeges"){echo "active";} ?>"><a href="messeges.php" class="white-text">messeges<i class="material-icons white-text">chat</i></a></li>
		                </ul>
		            </div>
              		</div>
				    </ul>
       
  	
			    	

			  		</header>
		  		</div>
	