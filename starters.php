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
		<a href="starters" class="starters selected">Starters</a> |           
		<a href="desserts" class="desserts">Desserts</a> |
		<a href="party" class="party">Party</a> | 
		<a href="extras" class="extras">Extras</a> 
	</div>
      
    <div id="main" class="home-page">
		<h1>A selection of Justin specials:</h1>
		
			<a href="starters-dish/courgette-soup" class="recipe">
				<img src="_images/food-thumbs/courgette-soup-thumb.png" alt="#" />
				<p>Courgette Soup</p>
			</a><!--Recipe End-->

			<a href="chopped-liver" class="recipe">
				<img src="_images/food-thumbs/chopped-liver-thumb.png" alt="#" />
				<p>Chopped Liver</p>
			</a><!--Recipe End-->

    </div><!--Main End-->
    
    <?php include '_includes/footer.php'; ?> 
    
</div>

</body>
</html>