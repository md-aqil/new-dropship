

<body>
  <div class="ui sidebar vertical menu right">
    <a class="item">
      <div class="ui transparent left icon input floated ui search focus">
		  <input type="text" class="prompt" placeholder="Search..." autocomplete="off">
		  <i class="search icon"></i>
		  <div class="results"></div>
		</div>
    </a>

    <a class="item">
    	<span class="span-label">Select Categories</span>
      <div class="ui fluid search selection dropdown">
        <input type="hidden" name="country">
        <i class="dropdown icon"></i>
        <div class="default text">Select Categories</div>
	        <div class="menu">
		        <div class="item" data-value="af">Afghanistan</div>
		        <div class="item" data-value="ax">Aland Islands</div>
	      	</div>
       </div>
    </a>
      <a class="item">
    	<span class="span-label">Choose Supplier</span>
      <div class="ui fluid search selection dropdown">
        <input type="hidden" name="country">
        <i class="dropdown icon"></i>
        <div class="default text">Choose Supplier</div>
	        <div class="menu">
		        <div class="item" data-value="af">Afghanistan</div>
		        <div class="item" data-value="ax">Aland Islands</div>
	      	</div>
       </div>
    </a>
    <a class="item">
    	<span class="span-label">Price Range</span>
      <div class="ui fluid search selection dropdown">
        <input type="hidden" name="country">
        <i class="dropdown icon"></i>
        <div class="default text">Price Range</div>
	        <div class="menu">
		        <div class="item" data-value="af">Afghanistan</div>
		        <div class="item" data-value="ax">Aland Islands</div>
	      	</div>
       </div>
    </a>
    <a class="item">
    	<span class="span-label">Item per page</span>
      <div class="ui fluid search selection dropdown">
        <input type="hidden" name="country">
        <i class="dropdown icon"></i>
        <div class="default text">Item per page</div>
	        <div class="menu">
		        <div class="item" data-value="af">Afghanistan</div>
		        <div class="item" data-value="ax">Aland Islands</div>
	      	</div>
       </div>
    </a>
    <a href="" class="item">
		<button class="ui fluid green button">Find</button>
    	
    </a>
   
  </div>


  <div class="pusher no-dimm">
  	<?php include 'includes/header.php'; ?>
  	<?php include 'includes/sidebar.php'; ?>

    <main class="main-content bg-gray">
<?php include 'includes/navbar.php'; ?>
	
<section class="padding-box ui clearfix">
	<div class="pull-left">
		<button class="ui  red  button">Select All</button>
		<button class="ui   button">Import</button>
	</div>
	<div class="pull-right">
		<button class="ui active button green toggle">
		  <i class="filter icon"></i>
		  Follow
		</button>
	</div>

</section>

<section class="padding-box">
	<div class="ui link cards sequenced all-products-list">
			<div class="card">
			    <div class="image">
			      <img src="img/product.jpg">
			      <a class="ui right corner label" >
			        <div class="ui checkbox">
			          <input type="checkbox" name="example">
			        </div>
		      	</a>
			    </div>
			    <div class="content">
			    	<!-- <i class="right floated like icon"></i> -->
			    	<a class="header">Kristy</a>
			      <div class="meta">
			        <a>Men's Clothing</a>
			      </div>
			      
			      <div class="description">
			      	<b>Supplier:</b> supplier name
			       <h2 class="price">
			       	₹ 500
			       </h2>

			      </div>
			    </div>
			    <div class="extra content">
			      <span class="right floated ui">
			        Profit Margin <b class="green">(70%)</b>
			      </span>
		           Shipping Charge (70)
			    </div>
			</div>
	</div>
</section>
</main>
  </div>
</body>




<?php include 'includes/footer.php'; ?>
