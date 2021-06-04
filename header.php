<!DOCTYPE html>

<html>

<head>

	<link rel = "icon" type = "image/logo.png" href = "images/logo.png" sizes = "1000x1000"/>

	<meta name = "viewport" content = "width=device-width, initial-scale=1.0">
	<link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity "sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src = 'https://kit.fontawesome.com/a076d05399.js' crossorigin = 'anonymous'></script>
	
	<link rel = "stylesheet" href = "css/navbarstyle.css">
	<link type="text/css" rel="stylesheet" href="css/accountbtn.css"/>

	<link href="style.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">

</head>

<body>

<!-- Header -->
<header>

	<div id = "main">
		
		<div>
			<a class = "navbar-brand" href = "index.php">
			<img src = "images/logo.png" width = "100px" height = "80px"></a>
		</div>	
	
		<div>
		
			<form class="form-inline my-2 my-lg-0">
				
				<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" style ="width: 80%; height: 30px;">
				<button style = "width: 80px; font-size: 14px;" class = "btn" class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
				
			</form>
		
		</div>

		<div>
			
			<button class = "btn"><i class = "fas fa-comments"></i></button>
			<button class = "btn"><i class = "fas fa-heart"></i></button>
			<?=template_header('Home')?>

			<a  href = "account.php" style = "color: #FFFFFF; "><button class = "btn"> My Account </a></button>

		</div>
	
	</div>
		
</header>

<!-- Navigation Bar -->

<nav class = "navbar navbar-expand-lg navbar-light navbar-custom sticky-top">
		
	<a style = "margin-left: 20px; color: #ffffff;" class = "navbar-brand" href = "home.php"> TORI ANIME COLLECTIBLES </a>
		
	<button class = "navbar-toggler" type = "button" data-toggle = "collapse" data-target = "#navbarSupportedContent"aria-controls = "navbarSupportedContent" aria-expanded = "false" aria-label = "Toggle navigation">
			
		<span class = "navbar-toggler-icon"></span>
	
	</button>

	<div class = "collapse navbar-collapse" id = "navbarSupportedContent">
	<div class = "navbar-nav ml-auto">
			
		<a class = "nav-link" href = "home.php"> Home <span class = "sr-only">(current)</span></a>
		<a class = "nav-link" href = "home.php?page=products"> Product </a>
		<a class = "nav-link" href = "home.php?page=about"> About </a>
		<a class = "nav-link" href = "home.php?page=merch"> Merch </a>
		<a class = "nav-link" href = "home.php?page=nau"> News and Updates </a>
		<a class = "nav-link" href = "home.php?page=helpcenter"> Help Center </a>
			
	</div>
	</div>
	
</nav>

<main>