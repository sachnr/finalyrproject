<?php
session_start();
if(!isset($_SESSION['sessuser'])){
   header("Location:index.php");
}
$title='Assignments';
$page='Assignments';
include 'dashheader.php';
?>
				<script type="text/javascript" charset="utf8">
	  					$(document).ready(function(){ 				
						 		$.ajax({
									url: 'data.php',
									dataType: 'json', 
									type: 'get',
									success: function(data)
									{  		       
										document.getElementById('himage').src = data[1].location;
										var sem="getassignment.php?sem="+data[0].semester;
											$.ajax({
												url: sem,
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

													

													for(var i = 0; i < data.length; i++) {
													    var t1= data[i].datetime.split(/[- :]/);
													    var d1 = new Date(Date.UTC(t1[0], t1[1]-1, t1[2], t1[3]-5, t1[4]-30, t1[5]));
													    var p1 = timeSince(d1);
													    var markup = '<div class="tableass"><i class="material-icons z-depth-5" style="margin-right: 40px;color:black;">assignment</i>' +

													    			'<tr>'+
													    			'<td><a href="'+ data[i].link +'">' + data[i].data + '</a>' +
													    			'<time class="media-meta">' + p1 +'</time>' + 
													    			'</td>'+
													    			'</tr>'+
													    			'</div>';
													    $('#tt').append(markup);
													}   				       				       
										       }					      
										    });	   				       				       
							       }					      
							    });
						});
	  			</script>
	<main>
		<div class="container">
	  		<div class="row valign-wrapper" style="height: 50rem;">	  				
	  			<div class="col s12 " style="background-color: #181915;height: auto;">
  					<div class="card-panel z-depth-5  " style="background-color: #181915;">
						<div class="card-content white-text">
							<h4 class="card-title center" style="font-family:'arial';font-size: 18px;font-weight:bold;">Assignments</h4>
							<table id="tt" class="table table-bordered table-striped" style="width: 100%">
								
							
							</table>
					</div>
				</div>
			</div>		
	  	</div>
	</main>
	

