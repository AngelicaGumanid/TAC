<?php

    include 'header.php';

?>

<head>

	<title> TAC Merch </title>

	<!-- Merch -->
	
	<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
	
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="css/merchstyle.css">
  

</head>

<br><br>

	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		
		<ol class="carousel-indicators">
			
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		
		</ol>
		
		<div class="carousel-inner">
		<div class="carousel-item active">
      
			<img style = "height: 490px" class="d-block w-100" src="images/banner/bannerMerch1.png" alt="First slide">
		</div>
    
		<div class="carousel-item">
			
			<img style = "height: 490px" class="d-block w-100" src="images/banner/bannerMerch1.png" alt="Second slide">
		
		</div>
    
		<div class="carousel-item">
			
			<img style = "height: 490px" class="d-block w-100" src="images/banner/bannerMerch1.png" alt="Third slide">
		
		</div>
		
		</div>
  
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
  
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
	
	</div>

	<div class = "container">
	<div class = "center">
	
		<h1 class="margin">FEATURED MERCH</h1>
		
		<div class="row">
		<div class="column">
		
			<div class="card">
			
				<img src="images/merch/MerchTshirt.png" class="card-img-top" alt="...">
				
				<div class="container-fluid">
				<div class="row">
				
				<div>
				
					<h5 class="card-title">STATUS</h5>
				
				</div>
				
				<div class="text">
					
					<p class="card-text text">Product Name Product Name</p>
				
				</div>
				
				<div class="text-right bottom">
					
					<a href = "<?php echo 'Cart.php'; ?>" ><img src="images/cart.PNG" class="image position" alt="cart"> </a>
					<a href = "<?php echo 'Heart.php'; ?>" ><img src="images/like.PNG" class="image position" alt="heart"> </a>
					<a href = "<?php echo 'Message.php'; ?>" ><img src="images/cart.PNG" class="image position" alt="message"> </a>
				
				</div>
				
				</div>
				</div>
		
			</div>
		
		</div>

		<div class="column">
		
			<div class="card">
			
				<div class="productx"><img src="images/merch/Nezuko.png" class="card-img-top" alt="..."></div>
				
				<div class="container-fluid">
				<div class="row">
				
				<div>
				
					<h5 class="card-title">STATUS</h5>
				
				</div>
				
				<div class="text">
					
					<p class="card-text text">Product Name Product Name</p>
				
				</div>
				
				<div class="text-right bottom">
					
					<a href = "<?php echo 'Cart.php'; ?>" ><img src="images/cart.PNG" class="image position" alt="cart"> </a>
					<a href = "<?php echo 'Heart.php'; ?>" ><img src="images/like.PNG" class="image position" alt="heart"> </a>
					<a href = "<?php echo 'Message.php'; ?>" ><img src="images/cart.PNG" class="image position" alt="message"> </a>
				
				</div>
				
				</div>
				</div>
		
			</div>
		
		</div>
  
		<div class="column">
		
			<div class="card">
			
				<div class="productx"><img src="images/merch/Tanjiro.png" class="card-img-top" alt="..."></div>
				
				<div class="container-fluid">
				<div class="row">
				
				<div>
				
					<h5 class="card-title">STATUS</h5>
				
				</div>
				
				<div class="text">
					
					<p class="card-text text">Product Name Product Name</p>
				
				</div>
				
				<div class="text-right bottom">
					
					<a href = "<?php echo 'Cart.php'; ?>" ><img src="images/cart.PNG" class="image position" alt="cart"> </a>
					<a href = "<?php echo 'Heart.php'; ?>" ><img src="images/like.PNG" class="image position" alt="heart"> </a>
					<a href = "<?php echo 'Message.php'; ?>" ><img src="images/cart.PNG" class="image position" alt="message"> </a>
				
				</div>
				
				</div>
				</div>
		
			</div>
		
		</div>
  
		<div class="column">
		
			<div class="card">
			
				<div class="productx"><img src="images/merch/MerchTshirt2.png" class="card-img-top" alt="..."></div>
				
				<div class="container-fluid">
				<div class="row">
				
				<div>
				
					<h5 class="card-title">STATUS</h5>
				
				</div>
				
				<div class="text">
					
					<p class="card-text text">Product Name Product Name</p>
				
				</div>
				
				<div class="text-right bottom">
					
					<a href = "<?php echo 'Cart.php'; ?>" ><img src="images/cart.PNG" class="image position" alt="cart"> </a>
					<a href = "<?php echo 'Heart.php'; ?>" ><img src="images/like.PNG" class="image position" alt="heart"> </a>
					<a href = "<?php echo 'Message.php'; ?>" ><img src="images/cart.PNG" class="image position" alt="message"> </a>
				
				</div>
				
				</div>
				</div>
		
			</div>
		
		</div>
		</div>
		
<br>

	<h1 class="margin">ACCESSORIRES</h1>

		<div class="row">
		<div class="column">
		
			<div class="card">
			
				<div class="productx"><img src="images/sample.PNG" class="card-img-top" alt="..."></div>
				
				<div class="container-fluid">
				<div class="row">
				
				<div>
				
					<h5 class="card-title">STATUS</h5>
				
				</div>
				
				<div class="text">
					
					<p class="card-text text">Product Name Product Name</p>
				
				</div>
				
				<div class="text-right bottom">
					
					<a href = "<?php echo 'Cart.php'; ?>" ><img src="images/cart.PNG" class="image position" alt="cart"> </a>
					<a href = "<?php echo 'Heart.php'; ?>" ><img src="images/like.PNG" class="image position" alt="heart"> </a>
					<a href = "<?php echo 'Message.php'; ?>" ><img src="images/cart.PNG" class="image position" alt="message"> </a>
				
				</div>
				
				</div>
				</div>
		
			</div>
		
		</div>

		<div class="column">
		
			<div class="card">
			
				<div class="productx"><img src="images/sample.PNG" class="card-img-top" alt="..."></div>
				
				<div class="container-fluid">
				<div class="row">
				
				<div>
				
					<h5 class="card-title">STATUS</h5>
				
				</div>
				
				<div class="text">
					
					<p class="card-text text">Product Name Product Name</p>
				
				</div>
				
				<div class="text-right bottom">
					
					<a href = "<?php echo 'Cart.php'; ?>" ><img src="images/cart.PNG" class="image position" alt="cart"> </a>
					<a href = "<?php echo 'Heart.php'; ?>" ><img src="images/like.PNG" class="image position" alt="heart"> </a>
					<a href = "<?php echo 'Message.php'; ?>" ><img src="images/cart.PNG" class="image position" alt="message"> </a>
				
				</div>
				
				</div>
				</div>
		
			</div>
		
		</div>
  
		<div class="column">
		
			<div class="card">
			
				<div class="productx"><img src="images/sample.PNG" class="card-img-top" alt="..."></div>
				
				<div class="container-fluid">
				<div class="row">
				
				<div>
				
					<h5 class="card-title">STATUS</h5>
				
				</div>
				
				<div class="text">
					
					<p class="card-text text">Product Name Product Name</p>
				
				</div>
				
				<div class="text-right bottom">
					
					<a href = "<?php echo 'Cart.php'; ?>" ><img src="images/cart.PNG" class="image position" alt="cart"> </a>
					<a href = "<?php echo 'Heart.php'; ?>" ><img src="images/like.PNG" class="image position" alt="heart"> </a>
					<a href = "<?php echo 'Message.php'; ?>" ><img src="images/cart.PNG" class="image position" alt="message"> </a>
				
				</div>
				
				</div>
				</div>
		
			</div>
		
		</div>
  
		<div class="column">
		
			<div class="card">
			
				<div class="productx"><img src="images/sample.PNG" class="card-img-top" alt="..."></div>
				
				<div class="container-fluid">
				<div class="row">
				
				<div>
				
					<h5 class="card-title">STATUS</h5>
				
				</div>
				
				<div class="text">
					
					<p class="card-text text">Product Name Product Name</p>
				
				</div>
				
				<div class="text-right bottom">
					
					<a href = "<?php echo 'Cart.php'; ?>" ><img src="images/cart.PNG" class="image position" alt="cart"> </a>
					<a href = "<?php echo 'Heart.php'; ?>" ><img src="images/like.PNG" class="image position" alt="heart"> </a>
					<a href = "<?php echo 'Message.php'; ?>" ><img src="images/cart.PNG" class="image position" alt="message"> </a>
				
				</div>
				
				</div>
				</div>
		
			</div>
		
		</div>
		</div>
		
<br><br>

	<h1 class="margin">INTERESTING</h1>
		
		<div class="row">
		<div class="column">
		
			<div class="card">
			
				<div class="productx"><img src="images/sample.PNG" class="card-img-top" alt="..."></div>
				
				<div class="container-fluid">
				<div class="row">
				
				<div>
				
					<h5 class="card-title">STATUS</h5>
				
				</div>
				
				<div class="text">
					
					<p class="card-text text">Product Name Product Name</p>
				
				</div>
				
				<div class="text-right bottom">
					
					<a href = "<?php echo 'Cart.php'; ?>" ><img src="images/cart.PNG" class="image position" alt="cart"> </a>
					<a href = "<?php echo 'Heart.php'; ?>" ><img src="images/like.PNG" class="image position" alt="heart"> </a>
					<a href = "<?php echo 'Message.php'; ?>" ><img src="images/cart.PNG" class="image position" alt="message"> </a>
				
				</div>
				
				</div>
				</div>
		
			</div>
		
		</div>

		<div class="column">
		
			<div class="card">
			
				<div class="productx"><img src="images/sample.PNG" class="card-img-top" alt="..."></div>
				
				<div class="container-fluid">
				<div class="row">
				
				<div>
				
					<h5 class="card-title">STATUS</h5>
				
				</div>
				
				<div class="text">
					
					<p class="card-text text">Product Name Product Name</p>
				
				</div>
				
				<div class="text-right bottom">
					
					<a href = "<?php echo 'Cart.php'; ?>" ><img src="images/cart.PNG" class="image position" alt="cart"> </a>
					<a href = "<?php echo 'Heart.php'; ?>" ><img src="images/like.PNG" class="image position" alt="heart"> </a>
					<a href = "<?php echo 'Message.php'; ?>" ><img src="images/cart.PNG" class="image position" alt="message"> </a>
				
				</div>
				
				</div>
				</div>
		
			</div>
		
		</div>
  
		<div class="column">
		
			<div class="card">
			
				<div class="productx"><img src="images/sample.PNG" class="card-img-top" alt="..."></div>
				
				<div class="container-fluid">
				<div class="row">
				
				<div>
				
					<h5 class="card-title">STATUS</h5>
				
				</div>
				
				<div class="text">
					
					<p class="card-text text">Product Name Product Name</p>
				
				</div>
				
				<div class="text-right bottom">
					
					<a href = "<?php echo 'Cart.php'; ?>" ><img src="images/cart.PNG" class="image position" alt="cart"> </a>
					<a href = "<?php echo 'Heart.php'; ?>" ><img src="images/like.PNG" class="image position" alt="heart"> </a>
					<a href = "<?php echo 'Message.php'; ?>" ><img src="images/cart.PNG" class="image position" alt="message"> </a>
				
				</div>
				
				</div>
				</div>
		
			</div>
		
		</div>
  
		<div class="column">
		
			<div class="card">
			
				<div class="productx"><img src="images/sample.PNG" class="card-img-top" alt="..."></div>
				
				<div class="container-fluid">
				<div class="row">
				
				<div>
				
					<h5 class="card-title">STATUS</h5>
				
				</div>
				
				<div class="text">
					
					<p class="card-text text">Product Name Product Name</p>
				
				</div>
				
				<div class="text-right bottom">
					
					<a href = "<?php echo 'Cart.php'; ?>" ><img src="images/cart.PNG" class="image position" alt="cart"> </a>
					<a href = "<?php echo 'Heart.php'; ?>" ><img src="images/like.PNG" class="image position" alt="heart"> </a>
					<a href = "<?php echo 'Message.php'; ?>" ><img src="images/cart.PNG" class="image position" alt="message"> </a>
				
				</div>
				
				</div>
				</div>
		
			</div>
		
		</div>
		</div>
		
<br>
	
	</div>
	
<br><br>

	<center>

	<!--To Shop-->

		<div class="container">
		<div class="contenttt">
		<div class="centerr">
	
			<h1> WANT MORE COLLECTIBLES <h1>
			<h2>VISIT OUR SHOP!</h2>
		
			<button type="button" style = "background-color: #7C7E82" class="btn btn-lg">CHECK NOW</button>
 
		</div>
		</div>
		</div>
	
		<br><br>

		<div class="container">
		<div class="contentttt">
		<div class="centerrr">

			<h3> DONT MISS OUT OUR <h3>
			<h3> OFFERED VOUCHER </h3>
			<h3> AND DISCOUNTS </h3>
	
		</div>
		</div>
		</div>

	</center>

	</div>
	</div>
	
<br><br><br>

<?php

include 'footer.php';

?>