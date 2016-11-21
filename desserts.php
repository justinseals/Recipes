<!DOCTYPE html>

<head>

	<title>Justin Seals Helpful Recipe Website</title>
    
	<?php include '_includes/header-inc.php'; ?> 

</head>
<body>

<div id="pagewidth">

	<?php include '_includes/masthead.php'; ?> 
	
    <div id="navigation">	  
		<a href="/recipes" class="main-course">Main Courses</a> | 
		<a href="starters" class="starters">Starters</a> |           
		<a href="desserts" class="desserts selected">Desserts</a> |
		<a href="party" class="party">Party</a> | 
		<a href="extras" class="extras">Extras</a> 
	</div>
      
    <div id="main" class="home-page">
		<h1>A selection of Justin specials:</h1>
		
			<a href="chocolate-mousse" class="recipe">
				<img src="_images/food-thumbs/chocolate-mousse-thumb.png" alt="#" />
				<p>Chocolate Mousse</p>
			</a><!--Recipe End-->

			<a href="mags-brownies" class="recipe">
				<img src="_images/food-thumbs/item-thumb.png" alt="#" />
				<p>Mag's Brownies</p>
			</a><!--Recipe End-->

			<a href="choc-fondue" class="recipe">
				<img src="_images/food-thumbs/item-thumb.png" alt="#" />
				<p>Chocolate Fondue</p>
			</a><!--Recipe End-->

			<a href="nutella-lava" class="recipe">
				<img src="_images/food-thumbs/item-thumb.png" alt="#" />
				<p>Nutella Lava Cake</p>
			</a><!--Recipe End-->
					
    </div><!--Main End-->
    
    <?php include '_includes/footer.php'; ?> 
    
</div>

</body>
</html>