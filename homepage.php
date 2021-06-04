<?php

    // Get the 4 most recently added products
    
    $stmt = $pdo->prepare('SELECT * FROM products ORDER BY date_added DESC LIMIT 4');
    $stmt->execute();
    
    $recently_added_products = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<?php

    include 'header.php';

?>

<head>

    <title>TAC Homepage </title>
    <link rel = "stylesheet" href = "css/homestyle.css">

</head>


<div class="featured">

    <h2>Gadgets</h2>
    <p>Essential gadgets for everyday use</p>

</div>

<div class="recentlyadded content-wrapper">
    
    <h2>Recently Added Products</h2>
    
    <div class="products">
    
    <?php foreach ($recently_added_products as $product): ?>
    
        <a href="home.php?page=product&id=<?=$product['id']?>" class="product">
            
            <img src="imgs/<?=$product['img']?>" width="200" height="200" alt="<?=$product['name']?>">
            
            <span class="name"><?=$product['name']?></span>
            <span class="price">&#8369;<?=$product['price']?>
            
            <?php if ($product['rrp'] > 0): ?>
                
                <span class="rrp">&#8369;<?=$product['rrp']?></span><?php endif; ?></span>
        </a>
        
        <?php endforeach; ?>
    
    </div>

</div>

<div class = "container">
	
    <div class = "center">
    <div class="recentlyadded content-wrapper">
    
        <h2>POPULAR</h2></div>
        
    </div>
	</div>
	
    <section class="pt-5 pb-5">
    
        <div class="container">
        <div class="row">
        <div class="col-6"></div>
        <div class="col-6 text-right">
        
            <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators3" role="button" data-slide="prev">
                
                <i class="fa fa-arrow-left"></i>
            
            </a>
            
            <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators3" role="button" data-slide="next">
            
                <i class="fa fa-arrow-right"></i>
           
            </a>
        
        </div>
        
        <div class="col-12">
        <div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
        <div class="carousel-item active">
        <div class="row">

                            <div class="col-md-4 mb-3">
                                <div class="card">
                                <a href="#" class="btn btn-primary stretched-link"> 
                                    <img class="img-fluid" style="width: 300px; height:300px;" alt="100%x280" src="images/product/10.png">
                                </a>
                                    <div class="card-body">
                                        <h4 class="card-title">PHP00.00</h4>
                                        <p class="card-text">Gintoki Sakata Banpresto Ichiban Kuji GINTAMA It 's summer festival!</p>

                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                <a href="#" class="btn btn-primary stretched-link"> 
                                    <img class="img-fluid" style="width: 300px; height:300px;" alt="100%x280" src="images/product/11.png">
                                </a>
                                    <div class="card-body">
                                        <h4 class="card-title">PHP00.00</h4>
                                        <p class="card-text">Gintoko sakata Banpresto Break time figure vol.1</p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                <a href="#" class="btn btn-primary stretched-link"> 
                                    <img class="img-fluid" style="width: 300px; height:300px;" alt="100%x280" src="images/product/12.png">
                                </a>
                                    <div class="card-body">
                                        <h4 class="card-title">PHP00.00</h4>
                                        <p class="card-text">Gintoko sakata jumping from gintama Banpresto 83608 DXF Figure Statue 14cm</p>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">

                            <div class="col-md-4 mb-3">
                                <div class="card">
                                <a href="#" class="btn btn-primary stretched-link"> 
                                    <img class="img-fluid" style="width: 300px; height:300px;" alt="100%x280" src="images/product/13.png">
                                </a>
                                    <div class="card-body">
                                        <h4 class="card-title">PHP00.00</h4>
                                        <p class="card-text">Gintoko Sakata Ready Banpresto Karaugeki DXF Figure</p>

                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                <a href="#" class="btn btn-primary stretched-link"> 
                                    <img class="img-fluid" style="width: 300px; height:300px;" alt="100%x280" src="images/product/14.png">
                                </a>
                                    <div class="card-body">
                                        <h4 class="card-title">PHP00.00</h4>
                                        <p class="card-text">Gintama Gintoki Sakata Banpresto DXF figure Shirogane no Tamashii Banpresto</p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                <a href="#" class="btn btn-primary stretched-link"> 
                                    <img class="img-fluid" style="width: 300px; height:300px;" alt="100%x280" src="images/product/15.png">
                                </a>
                                    <div class="card-body">
                                        <h4 class="card-title">PHP00.00</h4>
                                        <p class="card-text">Gintoki Sakata Banpresto Silver soul DX vol.1</p>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">

                            <div class="col-md-4 mb-3">
                                <div class="card">
                                <a href="#" class="btn btn-primary stretched-link"> 
                                    <img class="img-fluid" style="width: 300px; height:300px;" alt="100%x280" src="images/product/16.png">
                                </a>
                                    <div class="card-body">
                                        <h4 class="card-title">PHP00.00</h4>
                                        <p class="card-text">murasakibara atsushi DXF cross x players banpresto</p>

                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                <a href="#" class="btn btn-primary stretched-link"> 
                                    <img class="img-fluid" style="width: 300px; height:300px;" alt="100%x280" src="images/product/17.png">
                                </a>
                                    <div class="card-body">
                                        <h4 class="card-title">PHP00.00</h4>
                                        <p class="card-text">Shintaro Midorima  DXF cross x players banpresto</p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                <a href="#" class="btn btn-primary stretched-link"> 
                                    <img class="img-fluid" style="width: 300px; height:300px;" alt="100%x280" src="images/product/16.png">
                                </a>
                                    <div class="card-body">
                                        <h4 class="card-title">PHP00.00</h4>
                                        <p class="card-text">Akashi Seijuro Banpresto chibi kyun-chara kuroko no basuke</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<div class="container">
<div class = "contentu">
		<div class="center">
		
			<h1> TORI MERCH </h1>
			<P> keme keme keme <P>
		
		<br>
			<button type="button" style="background-color: #7C7E82" class="btn btn-lg">CHECK NOW</button>
 
		</div>
		</div>
		</div>
		
		<div class = "container">
		<div class = " align">
	
        <br><br>
<button type="button" class="btn btn-secondary btn-lg btn-block">HOT DEALS AND OFFERS</button>
<button type="button" class="btn btn-secondary btn-lg btn-block">VOUCHERS</button>
<button type="button" class="btn btn-secondary btn-lg btn-block">WELCOME GIFT FOR NEWBIES</button>

</div>
</div>

<div>
<div class ="contentuu">

<h1> WE GOCHA BRO </h1>

<p> Collecting anime, manga, and other figures is a popular pastime allowing aficionados to create miniature worlds inhabited by their favorite characters. Figures are not limited to pop culture.</p>
<br>
<br>
<h1> HAVE A QUESTION? </h1>
<br>

<button type="button" style="background-color: #7C7E82" class="btn btn-lg">CHECK NOW</button>



</div>
</div>

<div class = "container">
<div class = "contentuuu">

<h1> NEWS AND UPDATE </h1>

<div class="card-deck">
  <div class="card">
    <img src="images/product/22.png "style="width:50%; height:50%; object-fit:contain;" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img src="images/product/16.png "style="width:50%; height:50%; object-fit:contain;" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img src="images/product/17.png "style="width:50%; height:50%; object-fit:contain;" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>

</div>
</div>

<div>
<div class = "contentuuuu">
<div class = "center">

<p><b> Authenticity Guaranteed </b></p>
<p>Why</p>
<p>Tagline</p>
<p>Go</p>

</div>
</div>
</div>

<?php

include 'footer.php';

?>

