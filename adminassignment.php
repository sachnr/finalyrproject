<?php
session_start();
if(!isset($_SESSION['sessuser'])){
   header("Location:index.php");
}
$title='assignment';
$page='assignment';
include 'addashheader.php';
if ( isset($_GET['success']) && $_GET['success'] == 1 )
{
		echo "<script type='text/javascript'>
				M.toast({html: 'sucessfull!', classes: 'rounded'});
				</script>";
}
if(isset($_POST['submit'])){
	$sem=$_POST['sem'];
	$link=$_POST['ass'];
	$link='assignment/' .$link;
	$messege=$_POST['msg'];
	$cnx = mysqli_connect("localhost", "root", "", "loginerp");
	$result=mysqli_query($cnx, "INSERT INTO `assignment` (`datetime` ,`data`, `link`, `sem`) VALUES ('".date("Y-m-d H:i:s")."','". $messege ."','". $link ."','". $sem ."' )");
	if($result !=0)
	Header( 'Location: adminassignment.php?success=1' );
	exit();
}
?>
	<main>
		<div class="container">
			<div class="row valign-wrapper" style="height: 50rem;">	  				
	  			<div class="col s12 " style="background-color: #181915;height: auto;">
  					<div class="card-panel z-depth-5  " style="background-color: #181915;">
						<div class="card-content white-text">
							<h4 class="card-title center" style="font-family:'arial';font-size: 18px;font-weight:bold;">Upload assignments</h4>
								<form action="#" method="POST">      

								<div class="input-field" style="height: 5rem;">
								<i class="material-icons prefix">feedback</i>
								<textarea id="textarea1" class="materialize-textarea " name="sem" maxlength="1" pattern= "[0-8]" required></textarea>
								<label for="textarea1">Semester</label>
								</div>

								<div class="input-field" style="height: 5rem;">
								<i class="material-icons prefix">feedback</i>
								<textarea id="textarea1" class="materialize-textarea " name="ass" maxlength="6000" rows="7" required></textarea>
								<label for="textarea1">Filename.pdf</label>
								</div>

								<div class="input-field" style="height: 5rem;">
								<i class="material-icons prefix">feedback</i>
								<textarea id="textarea1" class="materialize-textarea " name="msg" maxlength="6000" rows="7" required></textarea>
								<label for="textarea1">Messege</label>
								</div>

								<div class="center">
								<button class="cbtn waves-effect waves-light btn-small center z-depth-5" type="submit" name="submit" style="background-color: #7289da">send
								<i class="material-icons right">send</i>
								</button>
								</div>

								</form>
						</div>
						
					</div>
				</div>
			</div>	
	  	</div>
	</main>
	
