<?php
session_start();
if(!isset($_SESSION['sessuser'])){
   header("Location:index.php");
}
$title='timetable';
$page='timetable';
include 'dashheader.php';
?>
	<main>
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
	  					$(document).ready(function(){	
	  					$.ajax({
									url: 'data.php',
									dataType: 'json', 
									type: 'get',
									success: function(datae)
									{ 	
								       var sem="gettable.php?sem="+datae[0].semester;
										    $.ajax({
											url: sem,
											dataType: 'json', 
											type: 'get',
											success: function(data)
											{     		     
										       $('#m1').append(data[0].a);
										       $('#m2').append(data[0].b);
										       $('#m3').append(data[0].c);
										       $('#m4').append(data[0].d);
										       $('#m5').append(data[0].e);
										       $('#m6').append(data[0].f);
										       $('#m7').append(data[0].g);
										       $('#m8').append(data[0].h);	
										       $('#t1').append(data[1].a);
										       $('#t2').append(data[1].b);
										       $('#t3').append(data[1].c);
										       $('#t4').append(data[1].d);
										       $('#t5').append(data[1].e);
										       $('#t6').append(data[1].f);
										       $('#t7').append(data[1].g);
										       $('#t8').append(data[1].h);								       
										       $('#w1').append(data[2].a);
										       $('#w2').append(data[2].b);
										       $('#w3').append(data[2].c);
										       $('#w4').append(data[2].d);
										       $('#w5').append(data[2].e);
										       $('#w6').append(data[2].f);
										       $('#w7').append(data[2].g);
										       $('#w8').append(data[2].h);
										       $('#th1').append(data[3].a);
										       $('#th2').append(data[3].b);
										       $('#th3').append(data[3].c);
										       $('#th4').append(data[3].d);
										       $('#th5').append(data[3].e);
										       $('#th6').append(data[3].f);
										       $('#th7').append(data[3].g);
										       $('#th8').append(data[3].h);
										       $('#f1').append(data[4].a);
										       $('#f2').append(data[4].b);
										       $('#f3').append(data[4].c);
										       $('#f4').append(data[4].d);
										       $('#f5').append(data[4].e);
										       $('#f6').append(data[4].f);
										       $('#f7').append(data[4].g);
										       $('#f8').append(data[4].h);
										       $('#s1').append(data[5].a);
										       $('#s2').append(data[5].b);
										       $('#s3').append(data[5].c);
										       $('#s4').append(data[5].d);
										       $('#s5').append(data[5].e);
										       $('#s6').append(data[5].f);
										       $('#s7').append(data[5].g);
										       $('#s8').append(data[5].h);								       								       
									       }					      
									    });					       
							       }					      
							    });								 		
						});
	  			</script>
		<div class="container">
		<div class="row valign-wrapper add-height">
        <div class="card-panel z-depth-5 "style="background-color: #181915;width: 100%">
        	<h4 class="center">TimeTable</h4>
        	<div class="card-panel z-depth-5 "style="width: 100%;color:black;">
			<table id="tt" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">9:00am</th>
						<th scope="col">9:55am</th>
						<th scope="col">11:10am</th>
						<th scope="col">12:05pm</th>
						<th scope="col">01:00pm</th>
						<th scope="col">01:55pm</th>
						<th scope="col">03:10pm</th>
						<th scope="col">04:05pm</th>
					</tr>
				</thead>
			<tbody>
				<tr>
					<th scope="row">Monday</th>
					<td id="m1"></td>
					<td id="m2"></td>
					<td id="m3"></td>
					<td id="m4"></td>
					<td id="m5"></td>
					<td id="m6"></td>
					<td id="m7"></td>
					<td id="m8"></td>
				</tr>
				<tr>
					<th scope="row">Tuesday</th>
					<td id="t1"></td>
					<td id="t2"></td>
					<td id="t3"></td>
					<td id="t4"></td>
					<td id="t5"></td>
					<td id="t6"></td>
					<td id="t7"></td>
					<td id="t8"></td>
				</tr>
				<tr>
					<th scope="row">Wednesday</th>
					<td id="w1"></td>
					<td id="w2"></td>
					<td id="w3"></td>
					<td id="w4"></td>
					<td id="w5"></td>
					<td id="w6"></td>
					<td id="w7"></td>
					<td id="w8"></td>
				</tr>
				<tr>
					<th scope="row">Thursday</th>
					<td id="th1"></td>
					<td id="th2"></td>
					<td id="th3"></td>
					<td id="th4"></td>
					<td id="th5"></td>
					<td id="th6"></td>
					<td id="th7"></td>
					<td id="th8"></td>
				</tr>
				<tr>
					<th scope="row">Friday</th>
					<td id="f1"></td>
					<td id="f2"></td>
					<td id="f3"></td>
					<td id="f4"></td>
					<td id="f5"></td>
					<td id="f6"></td>
					<td id="f7"></td>
					<td id="f8"></td>
				</tr>
				<tr>
					<th scope="row">Saturday</th>
					<td id="s1"></td>
					<td id="s2"></td>
					<td id="s3"></td>
					<td id="s4"></td>
					<td id="s5"></td>
					<td id="s6"></td>
					<td id="s7"></td>
					<td id="s8"></td>
				</tr>
			</tbody>
				<tfoot>
					<tr>
						<th scope="col">#</th>
						<th scope="col">9:00am</th>
						<th scope="col">9:55am</th>
						<th scope="col">11:10am</th>
						<th scope="col">12:05pm</th>
						<th scope="col">01:00pm</th>
						<th scope="col">01:55pm</th>
						<th scope="col">03:10pm</th>
						<th scope="col">04:05pm</th>
					</tr>
				</tfoot>
			</table>
		</div>
	  	</div>
	  </div>
	</div>
	</main>
	

