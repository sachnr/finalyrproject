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
		 		<script src="js/jquery.dataTables.min.js"></script>
		 		<script src="js/dataTables.buttons.min.js"></script>
		 		<script src="js/dataTables.select.min.js"></script>
		 		<script src="js/dataTables.editor.min.js"></script>
		 		<link rel="stylesheet" href="css/jquery.dataTables.min.css">
		 		<link rel="stylesheet" href="css/buttons.dataTables.min.css">
		 		<link rel="stylesheet" href="css/select.dataTables.min.css">
		 		<link rel="stylesheet" href="css/editor.dataTables.min.css">
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
                      <li class="<?php if($page=="admindashboard.php"){echo "active";} ?>"><a href="admindashboard.php" class="white-text">Dashboard<i class="material-icons white-text">web</i></a></li>
                      <li class="<?php if($page=="sendmessege.php"){echo "active";} ?>"><a href="sendmessege.php" class="white-text">SendMessage<i class="material-icons white-text">mail</i></a></li>
                    </ul>
                  </div>
                </ul>
			  		  </header>
		  		</div>
        </div>
	