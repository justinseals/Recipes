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
		<a href="desserts" class="desserts">Desserts</a> |
		<a href="party" class="party selected">Party</a> | 
		<a href="extras" class="extras">Extras</a> 
	</div>
      
    <div id="main" class="home-page">
		<h1>A selection of Justin specials:</h1>
		
		<a href="mushroom-bites" class="recipe">
			<img src="_images/food-thumbs/item-thumb.png" alt="#" />
			<p>Mushroom Bites</p>
		</a><!--Recipe End-->

		<a href="smoked-salmon-bites" class="recipe">
			<img src="_images/food-thumbs/item-thumb.png" alt="#" />
			<p>Smoked Salmon Bites</p>
		</a><!--Recipe End-->
					
    </div><!--Main End-->
    
    <?php include '_includes/footer.php'; ?> 
    
</div>

</body>
</html>