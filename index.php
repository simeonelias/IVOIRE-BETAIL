
	<?php
	require 'body/header.php';
	?>
	<section id="slider"><!--slider-->
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active" style="padding: 2px;">
      <img src="images/home/slide.jpg" alt="mouton" style="width: 100%">
      <div class="carousel-caption">
        <h3>Un mouton</h3>
        <p>un gros mouton blanc</p>
      </div>
    </div>

    <div class="item" style="padding: 2px;">
      <img src="images/home/slide2.jpg" alt="pintade" style="width: 100%">
      <div class="carousel-caption">
        <h3>Une pintade</h3>
        <p>une pintade africaine!</p>
      </div>
    </div>

    <div class="item" style="padding: 2px;">
      <img src="images/home/slide1.jpg" alt="lapin" style="width: 100%">
      <div class="carousel-caption">
        <h3>lapin</h3>
        <p>de beaux lapin</p>
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
	</section><!--/slider-->
	
	<section>
	<div class="container">
	<div class="row">
	<div class="col-sm-3">
	
	<!-- le coté gauche a inclure ici -->
	
	
	<?php include 'body/leftsidebar.php'; ?>
	
	
	<!-- /le coté gauche a inclure ici -->
	
	</div>
	
	<div class="col-sm-9 padding-right">
	<div class="features_items"><!--features_items-->
	<h2 class="title text-center">Articles</h2>
	
	
	

	
	
	<?php
	$products = get_products();
	
	
	
	foreach ($products as $product) {
		?>
		
		<div class="col-sm-4">
		<div class="product-image-wrapper">
		<div class="single-products">
		<div class="productinfo text-center">
		<img src="images/home/<?=$product->img;?>" alt="" />
		<h2><?= $product->price;?> Fcfa</h2>
		<p><?= substr($product->description,0,50);?></p>
		<a href="product-details.php?id=<?= $product->id ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Ajouter au panier</a>
		</div>
		<div class="product-overlay">
		<div class="overlay-content">
		<h2><?= $product->name;?></h2>
		<p><?= substr($product->description,0,15);?></pid>
		<a href="product-details.php?id=<?= $product->id ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Ajouter au panier</a>
		</div>
		</div>
		</div>
		
		</div>
		</div>
		
		
		<?php
	}
	
	?>
	
	
	</div><!--features_items-->
	
	<div class="category-tab"><!--category-tab-->
	
	</div>
	<!--/category-tab-->
	
	
	
	<div class="recommended_items"><!--recommended_items-->
	<h2 class="title text-center">Articles récommandés</h2>
	
	<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
	<div class="carousel-inner">
	<div class="item active">	
	<div class="col-sm-4">
	<div class="product-image-wrapper">
	<div class="single-products">
	<div class="productinfo text-center">
	<img src="images/home/lapin1_2.jpeg" alt="" />
	<h2>10000 Fcfa</h2>
	<p>Lapin blanc</p>
	<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Ajouter au panier</a>
	</div>
	
	</div>
	</div>
	</div>
	<div class="col-sm-4">
	<div class="product-image-wrapper">
	<div class="single-products">
	<div class="productinfo text-center">
	<img src="images/home/boeuf.jpg" alt="" />
	<h2>450000 fcfa</h2>
	<p>Boeuf rouge</p>
	<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Ajouter au panier</a>
	</div>
	
	</div>
	</div>
	</div>
	<div class="col-sm-4">
	<div class="product-image-wrapper">
	<div class="single-products">
	<div class="productinfo text-center">
	<img src="images/home/lapin.jpg" alt="" />
	<h2>6000 fcfa</h2>
	<p>Lapin gris</p>
	<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Ajouter au panier</a>
	</div>
	
	</div>
	</div>
	</div>
	</div>
	<div class="item">	
	<div class="col-sm-4">
	<div class="product-image-wrapper">
	<div class="single-products">
	<div class="productinfo text-center">
	<img src="images/home/m2.jpg" alt="" />
	<h2>110000 fcfa</h2>
	<p>Mouton</p>
	<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Ajouter au panier</a>
	</div>
	
	</div>
	</div>
	</div>
	<div class="col-sm-4">
	<div class="product-image-wrapper">
	<div class="single-products">
	<div class="productinfo text-center">
	<img src="images/home/Mouton.jpg" alt="" />
	<h2>110000 fcfa</h2>
	<p>Mouton blanc/noir</p>
	<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Ajouter au panier</a>
	</div>
	
	</div>
	</div>
	</div>
	<div class="col-sm-4">
	<div class="product-image-wrapper">
	<div class="single-products">
	<div class="productinfo text-center">
	<img src="images/home/boeuf.jpg" alt="" />
	<h2>450000 fcfa</h2>
	<p>Boeuf rouge</p>
	<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Ajouter au panier</a>
	</div>
	
	</div>
	</div>
	</div>
	</div>
	</div>
	<a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
	<i class="fa fa-angle-left"></i>
	</a>
	<a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
	<i class="fa fa-angle-right"></i>
	</a>			
	</div>
	</div><!--/recommended_items-->
	
	</div>
	</div>
	</div>
	</section>
	
	
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
	<script src="js/jquery.prettyPhoto.js"></script>
	<script src="js/main.js"></script>
	<?php
	require 'body/footer.php';
	?>


