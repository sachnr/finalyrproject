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
			    <script src="js/moment.js"></script>
				<script src="js/popper.min.js"></script>
		    	<script src="js/jquery.js"></script>
		    	<script src="js/bootstrap.min.js"></script>	
				<script src="js/materialize.min.js"></script>
				<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
				<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>	
		  	</head>
		  	
		  	<body id="index">
		  		<div class="page-wrapper">
		  			<!-- .preloader -->
		    		<div class="preloader"></div>

					<script type="text/javascript">
					$(document).ready(function() {
					$('.dropdown-trigger').dropdown();
					});
					var m = require('moment');
					</script>
					<script type="text/javascript" charset="utf8">	
	  					$(document).ready(function(){ 		

						 		$.ajax({
									url: 'getdatetime.php',
									dataType: 'json', 
									type: 'get',
									success: function(data)
									{  		       
										function timeSince(date) {

										    var seconds = Math.floor((new Date() - date) / 1000);

										    var interval = Math.floor(seconds / 31536000);

										    if (interval > 1) {
										        return interval + " years";
										    }
										    interval = Math.floor(seconds / 2592000);
										    if (interval > 1) {
										        return interval + " months";
										    }
										    interval = Math.floor(seconds / 86400);
										    if (interval > 1) {
										        return interval + " days";
										    }
										    interval = Math.floor(seconds / 3600);
										    if (interval > 1) {
										        return interval + " hours";
										    }
										    interval = Math.floor(seconds / 60);
										    if (interval > 1) {
										        return interval + " minutes";
										    }
										    return Math.floor(seconds) + " seconds";
										}

										var t1 = data[0].datetime.split(/[- :]/);;
										var d1 = new Date(Date.UTC(t1[0], t1[1]-1, t1[2], t1[3], t1[4], t1[5]))
										var t2 = data[1].datetime.split(/[- :]/);;
										var d2 = new Date(Date.UTC(t2[0], t2[1]-1, t2[2], t2[3], t2[4], t2[5]))
										var t3 = data[2].datetime.split(/[- :]/);;
										var d3 = new Date(Date.UTC(t1[0], t2[1]-1, t2[2], t2[3], t2[4], t2[5]))
										var d1 = timeSince(d1);
										var d2 = timeSince(d2);
										var d3 = timeSince(d3);
									
										var markup ='<li><h5 class="hea">Notifications</h5></li>' + 
													'<li class="divider" tabindex="-1"></li>' + 
													'<li><a href="#!">' + data[0].messege + '</a>' +
													'<time class="media-meta">' + d1 +'</time>' + 
													'</li>' + 
													'<li class="divider"></li>' + 
													'<li><a href="#!">' + data[1].messege + '</a>' +
													'<time class="media-meta">' + d2 +'</time>' + 
													'</li>' +
													'<li class="divider"></li>' + 
													'<li><a href="#!">' + data[2].messege + '</a>' +
													'<time class="media-meta">' + d3 +'</time>' + 
													'</li>' ;	
										
										document.getElementById("dropdown1").innerHTML = markup;   				       				       
							       }					      
							    });
						});
	  			</script>
			  		<header class="left_header header">
			  		<div class="navbar-fixed z-depth-3">
				        <nav class="navbar" style="background-color: #181915;">
				          <div class="nav-wrapper">
				            <ul id="nav-mobile" class="right">
				              	<li class="nav-item dropdown">
				              		<a class='dropdown-trigger waves-effect' href='#' data-target='dropdown1'><i class="material-icons">notifications</i></a>
									  <!-- Dropdown Structure -->
									  <ul id='dropdown1' class='dropdown-content z-depth-3'>
									   
									  </ul>
        
								</li>

								<li class="nav-item dropdown">
									<a class="waves-effect dropdown-toggle " href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img id="himage" src="" alt="batman" class="img-fluid circle responsive-img" style="height: 30px;"><i class="material-icons right" style="margin-left: 0px;">arrow_drop_down</i></a>
									<div class="dropdown-menu dropdown-menu-right z-depth-3" aria-labelledby="navbarDropdownMenuLink" style="background-color: #181915;padding: 0rem;font-size: 1rem;">
										<a class="dropdown-item clearfix" href="#"><i class="material-icons left" style="margin-right:2px;">settings</i>Change password</a>
										<a class="dropdown-item clearfix" href="logout.php?logout=true"><i class="material-icons left" style="margin-right:4px;">power_settings_new</i>Logout</a>	
									</div>
								</li>	

				            </ul>
				            <a href="#!" data-target="sidenav-left" class="sidenav-trigger left"><i class="material-icons black-text">menu</i></a>
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
	

