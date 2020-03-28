<?php
session_start();
if(!isset($_SESSION['sessuser'])){
   header("Location:index.php");
}
$title='notifications';
$page='notifications';
include 'addashheader.php';
if ( isset($_GET['success']) && $_GET['success'] == 1 )
{
		echo "<script type='text/javascript'>
				M.toast({html: 'Message sent sucessfully!', classes: 'rounded'});
				</script>";
}
if(isset($_POST['submit'])){
	$messege=$_POST['noti'];
	$cnx = mysqli_connect("localhost", "root", "", "loginerp");
	$result=mysqli_query($cnx, "INSERT INTO `notification` (`messege`, `datetime`) VALUES ('". $messege ."', '".date("Y-m-d H:i:s")."')");
	if($result !=0)
	Header( 'Location: notifications.php?success=1' );
	exit();
}
?>
	<main>
		<div class="container">
			<div class="row valign-wrapper" style="height: 50rem;">	  				
	  			<div class="col s12 " style="background-color: #181915;height: auto;">
  					<div class="card-panel z-depth-5  " style="background-color: #181915;">
						<div class="card-content white-text">
							<h4 class="card-title center" style="font-family:'arial';font-size: 18px;font-weight:bold;">Send notification to All Users</h4>
								<form action="#" method="POST">      

								<div class="input-field" style="height: 5rem;">
								<i class="material-icons prefix">feedback</i>
								<textarea id="textarea1" class="materialize-textarea " name="noti" maxlength="6000" rows="7" required></textarea>
								<label for="textarea1">messege</label>
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
	
