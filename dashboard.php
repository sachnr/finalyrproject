<?php
session_start();
if(!isset($_SESSION['sessuser'])){
   header("Location:index.php");
}
$title='Dashboard';
$page='dashboard';
include 'dashheader.php';
?>
	<main>
		<div class="container">
	  			<div class="row valign-wrapper add-height">
	  				<div class="col s12 ">

	  						<div class="card-panel z-depth-5 sublime">   
			                     <ul id="profile-page-about-details" class="collection z-depth-5 ">
				                  <li class="collection-item">
				                    <div class="row" style="max-height: 300px; background-color: #FAFAFA;">
										<div class="col-4">
										  <div class="portrait">
										    <img src="" alt="batmanandrobin" class="img-fluid">
										  </div>
										</div>
									  </div>
				                  </li>
				                  <li class="collection-item">
				                    <div class="row ">
				                      <div class="col s5 grey-text darken-1"><i class="mdi-action-wallet-travel"></i> Name</div>
				                      <div class="col s7 grey-text text-darken-4 right-align">ABC Name</div>
				                    </div>
				                  </li>
				                  <li class="collection-item">
				                    <div class="row">
				                      <div class="col s5 grey-text darken-1"><i class="mdi-social-poll"></i> College ID</div>
				                      <div class="col s7 grey-text text-darken-4 right-align">16n31023</div>
				                    </div>
				                  </li>
				                  <li class="collection-item">
				                    <div class="row">
				                      <div class="col s5 grey-text darken-1"><i class="mdi-social-domain"></i> Address</div>
				                      <div class="col s7 grey-text text-darken-4 right-align">NY, USA</div>
				                    </div>
				                  </li>
				                  <li class="collection-item">
				                    <div class="row">
				                      <div class="col s5 grey-text darken-1"><i class="mdi-social-cake"></i> Birth date</div>
				                      <div class="col s7 grey-text text-darken-4 right-align">18th June, 1991</div>
				                    </div>
				                  </li>

		                      <div class="clearfix"></div>
		                    </div>
		                    </div>
                	</form>
	  				</div>
	  			</div>
	  	</div>
	</main>
	

