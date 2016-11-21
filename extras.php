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
		<a href="party" class="party">Party</a> | 
		<a href="extras" class="extras selected">Extras</a> 
	</div>
      
    <div id="main" class="home-page">
		<h1>A selection of Justin specials:</h1>
		
			<a href="french-dressing" class="recipe">
				<img src="_images/food-thumbs/item-thumb.png" alt="#" />
				<p>French Salad Dressing</p>
			</a><!--Recipe End-->
			
			<a href="garlic-bread" class="recipe">
				<img src="_images/food-thumbs/item-thumb.png" alt="#" />
				<p>Garlic Bread</p>
			</a><!--Recipe End-->

			<a href="potatoes-rice" class="recipe">
				<img src="_images/food-thumbs/item-thumb.png" alt="#" />
				<p>Potatoes & Rice</p>
			</a><!--Recipe End-->
					
    </div><!--Main End-->
    
    <?php include '_includes/footer.php'; ?> 
    
</div>

</body>
</html>