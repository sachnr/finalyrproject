<?php 
$title='College Erp';
$page='gallery';
include 'header.php';
?>
	<main>

		<div class="container">
	  			<div class="row valign-wrapper" style="height: 700px;">
	  				<div class="card-panel sublime z-depth-5 hoverable">
	  					<h4 class="center">Gallery</h4>
						    <div class="carousel carousel-slider" style="height: 400px;width:800px;">						  
							    <a class="carousel-item" href="#one!"><img src="https://lorempixel.com/800/400/food/1"></a>
								<a class="carousel-item" href="#two!"><img src="https://lorempixel.com/800/400/food/2"></a>
								<a class="carousel-item" href="#three!"><img src="https://lorempixel.com/800/400/food/3"></a>
								<a class="carousel-item" href="#four!"><img src="https://lorempixel.com/800/400/food/4"></a>
							</div>
						</div>
	  			</div>
	  	</div>
	</main>
			    <script src="js/jquery.js"></script>
				<script src="js/materialize.min.js"></script>
				<script type="text/javascript">
					$('.carousel.carousel-slider').carousel({
					    fullWidth: true,
					    padding: 5,
					    indicators :true
					  });
				</script>


<?php include 'footer.php';?>