<?php
session_start();
if(!isset($_SESSION['sessuser'])){
   header("Location:index.php");
}
$title='result';
$page='result';
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
							       }					      
							    });
						});
	  			</script>
				<script type="text/javascript">
					$(document).ready( function() {
						function dwindow(data) {

						}
						$("#user-info").DataTable({
							"paging":   false,
					        "ordering": false,
					        "info":     false,
					        "bFilter" : false,
							"ajax": {
								"url":"getresult.php",
								"dataSrc": ""
							},
							"columns": [
								{"data": "semester"},
								{"data": "sgpa"},
								{"data": "backs"},
								{"data": "result_status"},
								{"data": "view",
								        "render": function(data, type, row, meta){
							            if(type === 'display'){
							                data = '<a href="' + data + '">' + 'Result' + '</a>';
							            }

							            return data;
							         }
							}
							],
							"rowCallback": function(row, data, index){
									$(row).css('color', 'black')
								}
						});
					} );
				</script>
	<main>
		<div class="container">
			<div class="row valign-wrapper add-height">
        		<div class="card-panel z-depth-5 "style="background-color: #181915;width: 100%">
        			<h4 class="center">Result All Semesters</h4>
        			<div class="card-panel z-depth-5 "style="width: 100%;color: black;">
				        <table id="user-info" class="display table table-bordered table-hover table-striped">
				            <thead>
				                <tr>
				                	<th>Semester</th>
				                	<th>SGPA</th>
				                	<th>Total Backs</th>
				                	<th>Status</th>
				                	<th>View</th>
				                </tr>
				            </thead> 
				            <tfoot>
				                <tr>
				                	<th>Semester</th>
				                	<th>SGPA</th>
				                	<th>Total Backs</th>
				                	<th>Status</th>
				                	<th>View</th>
				                </tr>
				            </tfoot>   
				        </table> 
					</div>
					<div id="marksheet" class="card-panel z-depth-3 "style="width: 100%;">

					</div>
	  			</div>
	  		</div>
		</div>
	</main>
	

