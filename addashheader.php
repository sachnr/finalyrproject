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
				<script src="js/popper.min.js"></script>
		    	<script src="js/jquery.js"></script>
				<script src="js/materialize.min.js"></script>
		 		<script src="js/bootstrap.min.js"></script>
		 		<script src="js/playsound.js"></script>

				<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
        
				<script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.3.1.js"></script>
				<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>				
        <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/jeditable.js/2.0.15/jquery.jeditable.min.js"></script>

			
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
                        <li class="hide-on-med-and-down"><a href="#!" data-target="dropdown1" class="dropdown-trigger waves-effect"><i class="material-icons">notifications</i></a></li>
                        <li><a href="logout.php?logout=true" data-target="" class="btn waves-effect" style="background-color: #181915;"><i class="material-icons">power_settings_new</i></a></li>
                      </ul><a href="#!" data-target="sidenav-left" class="sidenav-trigger left"><i class="material-icons black-text">menu</i></a>
                    </div>
                  </nav>
                </div>

                <ul id="sidenav-left" class="sidenav sidenav-fixed "style="background-color: #181915;" >
                  <div class="user-view">
                    <a class="brand-logo " href="admindashboard.php"><img src="images/erpban.png" alt="" style="height: 60px;"></a>
                  </div>

                  <div>
                    <ul class="cbtn">
                      <li class="<?php if($page=="admindashboard.php"){echo "active";} ?>"><a href="admindashboard.php" class="white-text"> Dashboard<i class="material-icons white-text">web</i></a></li>
                      <li class="<?php if($page=="adminadd.php"){echo "active";} ?>"><a href="adminadd.php" class="white-text"> add new user<i class="material-icons white-text">web</i></a></li>
                    </ul>
                  </div>
                </ul>
			  		  </header>
		  		</div>
        </div>
	