<?php
require 'body/header.php';
?>



	
	<section id="advertisement">
		<div class="container">
			<img src="images/shop/advertisement.jpg" alt="" />
		</div>
	</section>
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">

					<!-- le coté gauche a inclure ici -->

					<?php include 'body/leftsidebar.php';?>

					<!-- le coté gauche a inclure ici -->

					
				</div>
				
				<div class="col-sm-9 padding-right"> 
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Prochains articles</h2>
						
						<?php
						// var_dump($init->tri_par_type());

						$produits=$init->products();

						foreach ($produits as $product) {
							?>
							<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="images/home/<?= $product->img; ?>" alt="" />
										<h2><?= number_format($product->price, 2,',',' '); ?> fcfa</h2>
										<p><?= substr($product->description,0,50);?></p>
										<a href="product-details.php?id=<?= $product->id; ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Voir details</a>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2><?= $product->price; ?> fcfa</h2>
											<p><?= substr($product->description,0,50);?></p>
											<a href="product-details.php?id=<?= $product->id; ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Voir details</a>
										</div>
									</div>
									<!-- <img src="images/home/sale.png" class="new" alt="" /> -->
								</div>
								
							</div>
						</div>

							<?php
						}

						 ?>



						
						
						<div>

					</div><!--features_items-->
				</div>
<center>
<ul class="pagination">


<?php 
$comp = $init->compter();

if (!empty($produits)) {

	for ($i=1; $i <=$comp ; $i++) { 
		?>
	<li class="page-item <?php if($p<=1){echo 'disabled';}?>">
  <a class="page-link" href="<?php if($p<=1){echo '#';} else{ echo '?page=shop&p='.($p-1);};?>">&laquo;</a>
</li>
	<li class="<?php echo(($i==$_GET['p'])? 'active':'');?> page-item ">
  <a class="page-link" href="?page=shop&p=<?= $i ?>"><?= $i ?></a>
</li>
		

<li class="page-item"> 
  <a class="page-link" href="#">&raquo;</a>
</li>



<?php
	}
	}else{
		echo "<h4>Aucun article trouvé!</h4>";
	}

?>

</ul>
</center>
			</div>




		</div>
	</section>



<?php
require 'body/footer.php';
?>
