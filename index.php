
<?php include 'includes/header.php'; ?>
<?php include 'includes/sidebar.php'; ?>



<main class="main-content bg-gray">
<?php include 'includes/navbar.php'; ?>

<section class="spacethis">
	<div class="padding-box">
		<div class="ui statistics">
			
		<div class="statistic top-labeld">
		  <div class="value">
		  	<div>
		  		  <i class="bigly-icon-users-o"></i>
		  		   <div class="ellipse">
		  		   	<i class="notched circle  loading icon"></i>
		  			</div>

		  			<div class="ui orange tiny progress" style="margin-bottom: -5px;
    margin-top: 10px;">
		  			  <div class="bar"></div>
		  			</div>
		  	</div>
		   
		  </div>
		  <div class="label">
		    Profile
		  </div>
		   <small class="label text-muted">
		  Completed (10%)
		  </small>
		 
		</div>
		<div class="statistic top-labeld">
			  <div class="value">
			    <i class="bigly-icon-box-o"></i>
			  </div>
			  <div class="label">
			    Views
			  </div>
			   <small class="label text-muted">
			    Views
			  </small>
			 
			</div>
			<div class="statistic top-labeld">
				  <div class="value">
				    <i class="bigly-icon-settings-o"></i>
				  </div>
				  <div class="label">
				    Views
				  </div>
				   <small class="label text-muted">
				    Views
				  </small>
				  
				</div>
			
		</div>
	</div>
</section>




<div class="spacethis inner100 animated-column">
	<div class="padding-box">
		<div class="ui three column divided grid">
		  <div class="stretched row">
		  	<div class="column">
		  	  <img src="img/side-one.png" alt="">
		  	  <hr class="hr">
		  	  <img src="img/side-two.png" alt="">
		  	</div>

		    <div class="column">
		      <img src="img/middle-one.png" alt="">
		    </div>

		    <div class="column">
		    <div class="banner-img">
		      <img src="img/chair-banner.png" alt="">
		    	<div class="banner-img-overlay">
		    		hello world
		    	</div>
		    </div>

		      <hr class="hr">
		      <div class="banner-img">
		      <img src="img/side-4.png" alt="">
		      <div class="banner-img-overlay">
		    		hello world
		    	</div>
		    </div>
		     
		    </div>
		  </div>
		</div>
	</div>
	
</div>

<div class="spacethis inner100 animated-column">
	<div class="padding-box">
		<div class="ui three column divided grid">
		  <div class="stretched row">
		  	 <div class="column">
		      <img src="img/middle-four.png" alt="">
		    </div>
		  	<div class="column">
		  	  <img src="img/side-chair.png" alt="">
		  	  <hr class="hr">
		  	  <img src="img/shide-shoe.png" alt="">
		  	</div>

		   

		    <div class="column">
		    <div class="banner-img">
		      <img src="img/side-shirt.png" alt="">
		    	<div class="banner-img-overlay">
		    		
		    	</div>
		    </div>

		      <hr class="hr">
		      <div class="banner-img">
		      <img src="img/side-5.jpg" alt="">
		      <div class="banner-img-overlay">
		    		hello world
		    	</div>
		    </div>
		     
		    </div>
		  </div>
		</div>
	</div>
	
</div>


<div class="padding-box">
	<h2 class="ui header d-blue">
	  <i class="chart bar outline icon"></i>
	  <div class="content ">
	    Sales
	  </div>

	    <div class="sub header text-muted">Check out our plug-in marketplace</div>
	    <br>
	</h2>

	<div id="latest-product-slider" class="slider-pro sp-buttons-right">
			<div class="sp-slides ">
		<?php for ($i=0; $i < 10; $i++) {  ?>
				<div class="sp-slide product-items no-flex">
					<div class="card ui">
						
					  <div class="image">
					    <img src="img/chair-yellow.png">
					  </div>
					  <div class="content">
					  	<div class="extra">
					  	     <div class="ui star rating" data-rating="4"></div>
					  	   </div>
					    <div class="header">Matt Giampietro</div>
					    <div class="meta">
					      <a>Supplier: Marco polo</a>
					      <p>
					      <s class="cut-text"><i class="rupee sign icon"></i> 3500</s>
					      <span><i class="rupee sign icon"></i> 3500</span>
					      	
					      </p>

					    </div>
					    
					  </div>
					
					</div>
			
				</div>
				<?php } ?>

			</div>
	    </div>
</div>

<div class="padding-box">
	<h2 class="ui header d-blue">
	  <i class="chart bar outline icon"></i>
	  <div class="content ">
	    Sales
	  </div>

	    <div class="sub header text-muted">Check out our plug-in marketplace</div>
	    <br>
	</h2>

	<div id="topcatogeries-slider" class="slider-pro sp-buttons-right">
			<div class="sp-slides">
				<?php for ($i=0; $i < 10; $i++) {  ?>
					<div class="sp-slide">
						<div class="cato-box">
						            <img src="img/categories/home-bedshit.jpg" alt="">
						               <div class="cato-box-overlay">
						                   <div class="cato-overlay-content">
						                    <b><small>Bedsheet</small></b>
						                    <p>
						                       Alien: River of Pain <br>
						                     Revisions 2.0
						                    </p>
						                    
						                   </div>
						               </div>
						           </div>
					</div>
				
				<?php } ?>

			</div>
	    </div>
</div>

</main>

<?php include 'includes/footer.php'; ?>
