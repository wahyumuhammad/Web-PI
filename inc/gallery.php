		<section class="gallery-title text-center">
			<div class="gallery-wrapper">
				<div class="container">
					<div class= "row">
						<div>
							<h1 class="headline">Gallery Kami</h1>
						</div>
					</div>
					<div class="row">
						<div class="sub-headline">
							<p>Produk dan Hasil Olahan Dari Koperasi  serta PT dibawah Himpunan GKBI</p>
						</div>
					</div>	
				</div>
			</div>
		</section>

		<section class="gallery-content">
			<div class="container">
				<!-- timbol filter
				<div class="row port">
	    			<div class="col-md-8 col-md-offset-2 text-center button-group" id="filters">

	    				<button type="button" class="gallery-btn btn-primary btn is-checked" data-filter="*">All</button>
	    				<button type="button" class="gallery-btn btn-primary btn" data-filter=".care">Care</button>
	    				<button type="button" class="gallery-btn btn-primary btn" data-filter=".treatment">Treatment</button>
	    				<button type="button" class="gallery-btn btn-primary btn" data-filter=".staff">Staff</button>
	    				<button type="button" class="gallery-btn btn-primary btn" data-filter=".donation">Donation</button>
	    				<button type="button" class="gallery-btn btn-primary btn" data-filter=".pharmacy">Pharmacy</button>

	    			</div>
		    	</div>	<!-- row -->
	    		<div class="row">
	    			<div class="isotope" id="port-items">
	    				<div class="col-md-4 col-sm-6 col-xs-6 element-item care" data-category="care">
	    					<img class="img-responsive center-block" src="assets/img/gkbi/p1.jpg" alt="Image">
	    					<div class="item-desc hidden-xs">
								<div class="item-title">
									<h3>Produk Batik 1</h3>
								</div>
								<div class="item-tags">
									<p>
										Produk Batik Pekalongan 1
									</p>
								</div>
							</div><!-- /.item-desc -->
	    				</div>
	    				<div class="col-md-4 col-sm-6 col-xs-6 element-item care" data-category="care">
	    					<img class="img-responsive center-block" src="assets/img/gkbi/p2.jpg" alt="Image">
	    					<div class="item-desc hidden-xs">
								<div class="item-title">
									<h3>Produk Batik 1</h3>
								</div>
								<div class="item-tags">
									<p>
										Produk Batik Pekalongan 1
									</p>
								</div>
							</div><!-- /.item-desc -->
	    				</div>
	    				<div class="col-md-4 col-sm-6 col-xs-6 element-item care" data-category="care">
	    					<img class="img-responsive center-block" src="assets/img/gkbi/p3.jpg" alt="Image">
	    					<div class="item-desc hidden-xs">
								<div class="item-title">
									<h3>Produk Batik 1</h3>
								</div>
								<div class="item-tags">
									<p>
										Produk Batik Pekalongan 1
									</p>
								</div>
							</div><!-- /.item-desc -->
	    				</div>
	    				<div class="col-md-4 col-sm-6 col-xs-6 element-item care" data-category="care">
	    					<img class="img-responsive center-block" src="assets/img/gkbi/p4.jpg" alt="Image">
	    					<div class="item-desc hidden-xs">
								<div class="item-title">
									<h3>Produk Batik 1</h3>
								</div>
								<div class="item-tags">
									<p>
										Produk Batik Pekalongan 1
									</p>
								</div>
							</div><!-- /.item-desc -->
	    				</div>
	    				<div class="col-md-4 col-sm-6 col-xs-6 element-item care" data-category="care">
	    					<img class="img-responsive center-block" src="assets/img/gkbi/p5.jpg" alt="Image">
	    					<div class="item-desc hidden-xs">
								<div class="item-title">
									<h3>Produk Batik 1</h3>
								</div>
								<div class="item-tags">
									<p>
										Produk Batik Pekalongan 1
									</p>
								</div>
							</div><!-- /.item-desc -->
	    				</div>
	    				<div class="col-md-4 col-sm-6 col-xs-6 element-item care" data-category="care">
	    					<img class="img-responsive center-block" src="assets/img/gkbi/p6.jpg" alt="Image">
	    					<div class="item-desc hidden-xs">
								<div class="item-title">
									<h3>Produk Batik 1</h3>
								</div>
								<div class="item-tags">
									<p>
										Produk Batik Pekalongan 1
									</p>
								</div>
							</div><!-- /.item-desc -->
	    				</div>
	    				<div class="col-md-4 col-sm-6 col-xs-6 element-item care" data-category="care">
	    					<img class="img-responsive center-block" src="assets/img/gkbi/p7.jpg" alt="Image">
	    					<div class="item-desc hidden-xs">
								<div class="item-title">
									<h3>Produk Energy</h3>
								</div>
								<div class="item-tags">
									<p>
										Batu Bara
									</p>
								</div>
							</div><!-- /.item-desc -->
	    				</div>
	    			</div>	<!-- isotope -->
	    		</div>	<!-- row -->
			</div>
		</section>


		<?php include_once "inc/script.php" ?>

		<script>
      		new WOW().init();
		</script>

		<script>
			$( function() {
				  // init Isotope
			  	var $container = $('.isotope').isotope
			  	({
				    itemSelector: '.element-item',
				    layoutMode: 'fitRows'
			  	});


  				// bind filter button click
  				$('#filters').on( 'click', 'button', function() 
  				{
				    var filterValue = $( this ).attr('data-filter');
				    // use filterFn if matches value
				    $container.isotope({ filter: filterValue });
				 });
  
			  // change is-checked class on buttons
			  	$('.button-group').each( function( i, buttonGroup ) 
			  	{
			    	var $buttonGroup = $( buttonGroup );
			    	$buttonGroup.on( 'click', 'button', function() 
			    	{
			      		$buttonGroup.find('.is-checked').removeClass('is-checked');
			      		$( this ).addClass('is-checked');
			    	});
			  	});
			  
			});
		</script>
		
	</body>
</html>
