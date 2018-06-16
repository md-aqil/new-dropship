
<?php include 'includes/header.php'; ?>
<?php include 'includes/sidebar.php'; ?>



<main class="main-content bg-gray">
<?php include 'includes/navbar.php'; ?>

<div class="padding-box">
	<div class="ui secondary  menu">
	 <div class="item">
	 	<button class="ui labeled icon button">
	 	  <i class="hand pointer icon"></i>
	 	  Select All
	 	</button>
	 </div>
	 <div class="item">
	 	
	 	<div class="ui labeled button" tabindex="0">
	 	  <div class="ui  blue button">
	 	    <i class="bigly-icon-import-right-f icon"></i> Import
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
	  	<div class="ui animated button blue " tabindex="0">
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
	<?php for ($i=0; $i < 20; $i++) {  ?>
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
	  <i class="bigly-icon-bar-chart-o fz30"></i>
	  <div class="content ">
	   Top Trending Categories
	  </div>

	    <div class="sub header text-muted">Check out our plug-in marketplace</div>
	    <br>
	</h2>

	<div id="topcatogeries-slider" class="slider-pro sp-buttons-right">
			<div class="sp-slides">
				
					<div class="sp-slide">
						<div class="cato-box g-1">
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
				<div class="sp-slide">
						<div class="cato-box g-2">
					            <img src="img/categories/Kitchen-Masala.jpg" alt="">
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
					<div class="sp-slide">
						<div class="cato-box g-3">
					            <img src="img/categories/hand-bag.jpeg" alt="">
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
				
				<div class="sp-slide">
						<div class="cato-box g-4">
					            <img src="img/categories/baby-products.jpeg" alt="">
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
				<div class="sp-slide">
						<div class="cato-box g-5">
					            <img src="img/categories/bag-pack.jpeg" alt="">
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
				
				<div class="sp-slide">
						<div class="cato-box g-9">
					            <img src="img/categories/computer.jpeg" alt="">
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
				<div class="sp-slide">
						<div class="cato-box g-10">
					            <img src="img/categories/cam-photos.jpeg" alt="">
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
				<div class="sp-slide">
						<div class="cato-box g-7">
					            <img src="img/categories/car.jpeg" alt="">
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
				<div class="sp-slide">
						<div class="cato-box">
					            <img src="img/categories/mens-clothing.jpeg" alt="">
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
				
				
			</div>
	    </div>
</div>


<div class="padding-box">
	<h2 class="ui header d-blue">
	  <i class="bigly-icon-money fz30"></i>
	  <div class="content ">
	   Top Profit Margin product
	  </div>

	    <div class="sub header text-muted">Check out our plug-in marketplace</div>
	    <br>
	</h2>

	<div id="topprofit-slider" class="slider-pro sp-buttons-right">
			<div class="sp-slides">
				
					<div class="sp-slide">
						<div class="ui card">

						  <div class="image no-bg">
						    <img src="img/chair-yellow.png">
						  </div>


						  <div class="extra content">
						      <span class="left floated like">
						       <div class="header ">Cute Dog</div>
       						    <div class="meta">
						        
       							      <span class="date "> <span class="text-danger">Joined in 2013 | <i class="bigly-icon-rupee-f" style="font-size: 12px"></i>$10.00</span>  
    
       							   </div>
						      </span>
						      <span class="right floated text-danger">
						        <i class="bigly-icon-import-right-f fz20"></i>
						      </span>
						    </div>

						</div>
					</div>
					<div class="sp-slide">
						<div class="ui card">

						  <div class="image no-bg">
						    <img src="img/watch.png">
						  </div>


						  <div class="extra content">
						      <span class="left floated like">
						       <div class="header ">Cute Dog</div>
       						    <div class="meta">
						        
       							      <span class="date "> <span class="text-danger">Joined in 2013 | <i class="bigly-icon-rupee-f" style="font-size: 12px"></i>10.00</span>  
    
       							   </div>
						      </span>
						      <span class="right floated text-danger">
						        <i class="bigly-icon-import-right-f fz20"></i>
						      </span>
						    </div>

						</div>
					</div>
				<div class="sp-slide">
					<div class="ui card">

					  <div class="image no-bg">
					    <img src="img/short.png">
					  </div>


					  <div class="extra content">
					      <span class="left floated like">
					       <div class="header ">Short</div>
   						    <div class="meta">
					        
   							      <span class="date "> <span class="text-danger">Joined in 2013 | <i class="bigly-icon-rupee-f" style="font-size: 12px"></i>10.00</span>  

   							   </div>
					      </span>
					      <span class="right floated text-danger">
					        <i class="bigly-icon-import-right-f fz20"></i>
					      </span>
					    </div>

					</div>
				</div>
				<div class="sp-slide">
					<div class="ui card">

					  <div class="image no-bg">
					    <img src="img/shirt.png">
					  </div>


					  <div class="extra content">
					      <span class="left floated like">
					       <div class="header ">Shirt</div>
   						    <div class="meta">
					        
   							      <span class="date "> <span class="text-danger">Joined in 2013 | <i class="bigly-icon-rupee-f" style="font-size: 12px"></i>10.00</span>  

   							   </div>
					      </span>
					      <span class="right floated text-danger">
					        <i class="bigly-icon-import-right-f fz20"></i>
					      </span>
					    </div>

					</div>
				</div>
	    </div>
</div>

</main>

<?php include 'includes/footer.php'; ?>



