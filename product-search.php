
<?php include 'includes/header.php'; ?>
<?php include 'includes/sidebar.php'; ?>



<main class="main-content bg-gray">
<?php include 'includes/navbar.php'; ?>

<div class="padding-box">
	<div class="ui secondary  menu">
	 <div class="item">
	 	<button class="ui labeled icon button">
	 	  <i class="pause icon"></i>
	 	  Select All
	 	</button>
	 </div>
	 <div class="item">
	 	
	 	<div class="ui labeled button" tabindex="0">
	 	  <div class="ui  blue button">
	 	    <i class="fork icon"></i> Import
	 	  </div>
	 	  <a class="ui basic left pointing blue label">
	 	    1,048
	 	  </a>
	 	</div>
	 </div>

	  <div class="right menu">
	    
	  
	  <div class="item">
	  	<div class="ui floating dropdown labeled search icon button">
	  	  <i class="world icon"></i>
	  	  <span class="text">Price Range</span>
	  	  <div class="menu">
	  	    <div class="item"><i class="af flag"></i>Arabic</div>
	  	    <div class="item">Chinese</div>
	  	    <div class="item">Danish</div>
	  	   
	  	  </div>
	  	</div>
	  </div>
	  <div class="item">
	  	<div class="ui floating dropdown labeled search icon button">
	  	  <i class="world icon"></i>
	  	  <span class="text">Supplier</span>
	  	  <div class="menu">
	  	    <div class="item"><i class="af flag"></i>Arabic</div>
	  	    <div class="item">Chinese</div>
	  	    <div class="item">Danish</div>
	  	   
	  	  </div>
	  	</div>
	  </div>
	  <div class="item">
	  	<div class="ui floating dropdown labeled search icon button">
	  	  <i class="world icon"></i>
	  	  <span class="text">Categories</span>
	  	  <div class="menu">
	  	    <div class="item"><i class="af flag"></i>Arabic</div>
	  	    <div class="item">Chinese</div>
	  	    <div class="item">Danish</div>
	  	   
	  	  </div>
	  	</div>
	  </div>
	  <div class="item">
	  	<div class="ui animated button blue loading" tabindex="0">
	  	  <div class="visible content ">Find</div>
	  	  <div class="hidden content">
	  	    <i class="right arrow icon"></i>
	  	  </div>
	  	</div>
	  </div>
	  </div>
	</div>




</div>


<section class="spacethis">
	<div class="padding-box">
	<div class="ui link cards product-items special">
	<?php for ($i=0; $i < 10; $i++) {  ?>
		<div class="card">
			  <div class="ui dimmer">
		      <div class="content">
		        <div class="ui vertical icon buttons product-float-list">
		            <button class="circular ui icon button">
		              <i class="icon settings"></i>
		            </button> 
		            <button class="circular ui icon button">
		              <i class="icon settings"></i>
		            </button>
		          </div>
		      </div>
		    </div>
		  <div class="blurring dimmable image">
		  
		    <img src="img/chair-yellow.png">
		  </div>
		  <div class="content">
		  	<div class="extra">
	    	     <div class="ui star rating" data-rating="4"></div>
	    	   </div>
		    <a class="header">Team Fu</a>
		    <div class="meta">
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
</section>






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
