<?php 
$title='College Erp';
$page='about';
include 'header.php';
?>
	<main>
		<div class="container">
	  			<div class="row valign-wrapper" style="height: 400px;">
	  				<div class="card-panel z-depth-5 sublime center hoverable">
	  					<h4 class="center">About</h4>
	  					<p>I am a very simple card. I am good at containing small bits of information.
          				I am convenient because I require little markup to use effectively.</p>
          				<div class="info-box visible-xs visible-md visible-lg">
			  						<a class="cbtn waves-effect waves-light btn discord center pulse z-depth-5"href="#" data-toggle="modal" data-target="#contactus">Contact us</a>
			            </div>
	  				</div>
	  			</div>
	  	</div>
	</main>
	<!--modal-->
  		<div class="modal fade" id="contactus" role="dialog">
        	<div class="modal-dialog sublime card-panel">
      			<div class="modal-content sublime">
        			<div class="modal-header sublime">
          				<h4 class="modal-title"><center><img src="images/erpban.png" alt="" style="height: 90px;"></center></h4>
        			</div>
        			<div class="modal-body sublime">
        				<form action="mail.php" method="POST" class="col s12 center">      
                      		<h3 class="center">Send us your query</h3>
                      
		                      <div class="input-field">
		                      <i class="material-icons prefix">account_balance</i>
		                      <input type="text" name="cid">
		                      <label>Enter College ID</label>
		                      </div>
                  
		                      <div class="input-field">
		                      <i class="material-icons prefix">email</i>
		                      <input name="emailcu" type="email" class="validate">
		                      <label>Enter Email adress</label>
		                      </div>

		                      <div class="input-field col s12">
		                      <i class="material-icons prefix">feedback</i>
					          <textarea id="textarea1" class="materialize-textarea " name="feedback" maxlength="6000" rows="7" required></textarea>
					          <label for="textarea1">Query</label>
					          </div>
             					
             					<div class="col s12 ">
             					 <button class="cbtn waves-effect waves-light btn-small center discord col s12 z-depth-5" type="submit" name="submit">send
   								 <i class="material-icons right">send</i>
  								 </button>
  								 </div>

  								 <div class="clearfix"></div>
                	    </form>
                	</div>
	                <div class="modal-footer sublime">
	          			<button type="button" class="cbtn waves-effect waves-light btn-small modal-close discord z-depth-5" data-dismiss="modal">Close</button>
	        		</div>
           		</div>
        	</div>
        </div>

<?php include 'footer.php';?>