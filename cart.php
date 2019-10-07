<?php 
require 'functions/main.php';

$tab = array();
$c_id =0;
$c_nom = $c_quantite = $c_prix="";

if(isset($_GET['del'])){
	$cart->del($_GET['del']);

}



$res = preparation_panier();

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!---Title-->
		<title>IVOIRE BETAIL - Panier</title>
		<!--Google Fonts-->
		<link href='https://fonts.googleapis.com/css?family=Raleway:400,300,500,600,800,700' rel='stylesheet' type='text/css'>
		<!--Favicon-->
		<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
		<!--Bootstrap CSS-->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!--Font awsome CSS-->
		<link href="css/font-awesome.min.css" rel="stylesheet">
		<!--Meanmenu CSS-->
		<link href="css/meanmenu.min.css" rel="stylesheet">
		<!--Rev Slider CSS-->
		<link href="rs-plugin/css/settings.css" rel="stylesheet">
		<!-- Owl Carousel CSS -->
		<link href="css/owl.carousel.css" rel="stylesheet">
		<link href="css/owl.theme.css" rel="stylesheet">
		<link href="css/owl.transitions.css" rel="stylesheet">
		<link href="css/animate.css" rel="stylesheet">
		<link href="css/main.css" rel="stylesheet">
		<link href="css/responsive.css" rel="stylesheet">
		<!--Jquery UI CSS-->
		<link href="css/jquery-ui.css" rel="stylesheet">

		<!--Normalize CSS-->
		<link href="css/normalize.css" rel="stylesheet">
		<!--Main Style CSS-->
		<link href="css/style.css" rel="stylesheet">
		<!--Responsive CSS-->
		<link href="css/responsive.css" rel="stylesheet">
		<!--Modernizr js-->
		<script src="js/vendor/modernizr-2.8.3.min.js"></script>
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body class="blog-main">
		
		<!--Blog Header Area Start-->
		<section class="blog-header-area">
			<div class="container">
				<div class="row" >
					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="b-header-text" style="background: url('images/home/cart.jpeg');">
							<h1>Panier</h1>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--End of Blog Header Area-->
		

		<?php
		if (empty($res)) {

			?>
			<div style="text-align: center; padding-top: 20px">
			<h3>
				Votre panier est vide!
			</h3>
			<a type="button" class="btn btn-warning btn-md" href="shop.php"><b>faites vos achats!</b></a>
		</div>


			<?php
		}else{

			?>




<!--Cart Main Area Start-->

		<section class="cart-main-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<form action="#" method="post">
							<div class="cart-table table-responsive">
								<table>
									<thead>
										<tr>
											<th class="p-image">Produits</th>
											<th class="p-name">Nom du Produit</th>
											<th class="p-amount">Prix</th>
											<th class="p-quantity">Quantités</th>
											<th class="p-total">Total</th>
											<th class="p-action">Action</th>
										</tr>
									</thead>
									<tbody>

										<?php
										// $res = preparation_panier();

										 foreach ($res as $product) {
						
		// $tab['prix_total']=$product->price * $_SESSION['panier'][$product->id];
		// $q = $tab['qte'][$product->id]=$_SESSION['panier'][$product->id];
		// $n = $tab['nom'][$product->id]=$product->name;
		// $p = $tab['prix'][$product->id]=$product->price * $q;
		
		// var_dump($_POST);
		// $cart->commander($n,$q, $p);
										?>

										<tr>
											<td class="p-image"><a href="product-details.html"><img style="height: 50px; width: 60px" src="images/home/<?= $product->img ?>" alt=""></a></td>
											<td class="p-name">
												<a href="#"><?= $product->name ?></a>
												<p><?= $product->description ?></p>
												<!-- <p class="c-p-size"><span>Size : </span> XXL</p> -->
											</td>
								
											<td class="p-amount"><span class="amount"><?= $product->price ?> fcfa</span></td>
								<td class="p-quantity"><input type="number" name="panier[quantity][<?=$product->id?>]" value="<?= $_SESSION['panier'][$product->id] ?>"></td>
								<td class="p-total"><?= $product->price * $_SESSION['panier'][$product->id] ?>fcfa</td>
								<td class="p-action"><a class="cart_quantity_delete" href="cart.php?del=<?= $product->id ?>"><i class="fa fa-times"></i></a></td>
									</tr>
								<?php
									}
	
				// var_dump($n);
				// $cart->commander($n,$q, $p);
								?>	
									  
									</tbody>
								</table>
							</div>
							<div class="row">
								<div class="col-lg-7 col-md-7 col-sm-6">
									<div class="cart-coupn-leftside">
										<a href="shop.php" class="continue-s">Continuer mes achats</a>
										<h4>CODE DE BON DE REMISE</h4>
										<div class="dis-coupn-code">
											<input type="text" placeholder="CODE DE BON DE REMISE ICI...">
											<input type="button" class="c-submit" value="Appliquer Coupon">
										</div>
										<p><span>NOTE :</span> Vos achats et taxes sont estimés et mis à jour lors de la commande en fonction de vos informations de facturation et d'expédition.</p>
									</div>
								</div>
								<div class="col-lg-5 col-md-5 col-sm-6">
									<div class="cart-coupon-rightside">
										<div class="r-c-btn">
											<a href="#" class="continue-s">Effacer le panier</a>
											<button type="submit"  class="btn btn-warning continue-s">Mettre à jour son panier</button> 
										</div>
										<div class="amount-table table-responsive">
											<table>
												<tbody>
													<tr class="s-total">
														<td>Sous-total</td>
														<td><?= $cart->total() ?> fcfa</td>
													</tr>
													<tr class="g-total">
														<td>Grand Total</td>
														<td><span><?= $cart->total() + 100 ?> fcfa</span></td>
													</tr>									

												</tbody>
											</table>
										</div>
										<!-- <button type="submit" name="commande" class="btn checkout">Passer à la validation</button> -->
										<a href="checkout.php" class="btn checkout">Passer à la validation</a>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>

			<?php
		}

		?>

		<!--End of Cart Main Area-->
		
		<!--End of Brand Area-->




<!-- formulaire de renseignements d'informations du client -->

	<section id="cart_items" style="display: none;">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Acceuil</a></li>
				  <li class="active">Retour</li>
				</ol>
			</div><!--/breadcrums-->

			<div class="step-one">
				<h2 class="heading">Etape1</h2>
			</div>
			<div class="checkout-options">
				<h3>Nouveau utilisateur</h3>
				<p>opition de déconnexions</p>
				<ul class="nav">
					<li>
						<label><input type="checkbox"> S'enregister</label>
					</li>
					<li>
						<label><input type="checkbox"> Quitter</label>
					</li>
					<li>
						<a href=""><i class="fa fa-times"></i>Annuler</a>
					</li>
				</ul>
			</div><!--/checkout-options-->

			<div class="register-req">
				<p>Veuillez vous enregistrer et passer au panier pour accéder facilement à l'historique de vos commandes, ou utilisé le panier en tant qu'invité</p>
			</div><!--/register-req-->

			<div class="shopper-informations">
				<div class="row">
					<div class="col-sm-3">
						<div class="shopper-info">
							<p>Informations utilisateur</p>
							<form>
								<input type="text" placeholder="Entrer vôtre prénoms">
								<input type="text" placeholder="Entrer vôtre nom">
								<input type="password" placeholder="Pass">
								<input type="password" placeholder="Confirmer Pass">
							</form>
							<a class="btn btn-primary" href="">Obtenir un devis</a>
							<a class="btn btn-primary" href="">Continuer</a>
						</div>
					</div>
					<div class="col-sm-5 clearfix">
						<div class="bill-to">
							<p>Facturer</p>
							<div class="form-one">
								<form>
									<input type="text" placeholder="Nom de la compagnie">
									<input type="text" placeholder="Email*">
									<input type="text" placeholder="Title">
									<input type="text" placeholder="Numéro de télephone *">
									<input type="text" placeholder="Address 1 *">
									<input type="text" placeholder="Address 2">
								</form>
							</div>
							<div class="form-two">
								<form>
									<input type="text" placeholder="Zip / Postal Code *">
									<select>
										<option>Pays</option>
										<option>Côte d'ivoire</option>
										<option>Burkina fasso</option>
										<option>Mali</option>
										<option>Ghana</option>
										<option>Togo</option>
										<option>Guinée</option>
										<option>Senegal</option>
										<option>Benin</option>
									</select>
									<select>
										<option>Ville/commune</option>
										<option>Cocody</option>
										<option>Yopougon</option>
										<option>Adjamé</option>
										<option>Abobo</option>
										<option>Koumassi</option>
										<option>Port-Bouet</option>
										<option>Marcory</option>
									</select>
									<input type="password" placeholder="Confirm Pass">
									<input type="text" placeholder="Numéro de télephone *">
									<input type="text" placeholder="Fax">
								</form>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="order-message">
							<p>Envoi de la commande</p>
							<textarea name="message"  placeholder="Notes about your order, Special Notes for Delivery" rows="16"></textarea>
							<label><input type="checkbox"> Expédition à l'adresse de validation</label>
						</div>	
					</div>					
				</div>
			</div>
			<div class="payment-options">
					<span>
						<label><input type="checkbox"> payer à la livraison</label>
					</span>
					<span>
						<label><input type="checkbox"> Payer par chèque</label>
					</span>
					<span>
						<label><input type="checkbox"> Paypal</label>
					</span>
				</div>
		</div>
	</section> <!--/#cart_items-->

<!-- formulaire de renseignements d'informations du client/ -->


		<!--Service Area Start-->
		<section class="service-area">
			<div class="container">
				<div class="row">
					<div class="single-service">
						<div class="service-icon">
							<div class="service-tablecell">
								<img src="img/serv-1.png" alt="">
							</div>
						</div>
						<h4>Haute qualité</h4>
						<p>Lorem ipsum dolor sit amet, conseetur adipiscing elit </p>
					</div>
					<div class="single-service">
						<div class="service-icon">
							<div class="service-tablecell">
								<img src="img/serv-2.png" alt="">
							</div>
						</div>
						<h4>Rapidité de livraison élevée</h4>
						<p>Lorem ipsum dolor sit amet, conseetur adipiscing elit </p>
					</div>
					<div class="single-service">
						<div class="service-icon">
							<div class="service-tablecell">
								<img src="img/serv-3.png" alt="">
							</div>
						</div>
						<h4>Assistance 24/7</h4>
						<p>Lorem ipsum dolor sit amet, conseetur adipiscing elit </p>
					</div>
					<div class="single-service">
						<div class="service-icon">
							<div class="service-tablecell">
								<img src="img/serv-4.png" alt="">
							</div>
						</div>
						<h4>Retours 14 jours</h4>
						<p>Lorem ipsum dolor sit amet, conseetur adipiscing elit </p>
					</div>
					<div class="single-service">
						<div class="service-icon">
							<div class="service-tablecell">
								<img src="img/serv-5.png" alt="">
							</div>
						</div>
						<h4>Paiement sécurisé</h4>
						<p>Lorem ipsum dolor sit amet, conseetur adipiscing elit </p>
					</div>
				</div>
			</div>
		</section>
		<!--End of Service Area-->
		<!--Social Area Start-->
		<section class="social-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<div class="about-text">
							<h2>À propos de nous</h2>
							<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et. </p>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<div class="social-text">
							<h2>Suivez nous</h2>
							<div class="social-icons">
								<a href="www.facebook.com/Ivoire-b%C3%A9tail-2205045192850187/"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-linkedin"></i></a>
								<a href="#"><i class="fa fa-google-plus"></i></a>
								<a href="#"><i class="fa fa-dribbble"></i></a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<div class="news-text">
							<h2>Newsletter</h2>
							<div class="news-form">
								<form action="#" id="news-form">
									<input type="text" name="s" placeholder="">
									<button type="submit">SOUSCRIRE!</button>
								</form>                                
							</div>
						</div>
					</div>
				</div>    
			</div>
		</section>
		<!--End of Social Area-->


		<!-- jQuery js-->
		<script src="js/vendor/jquery-1.11.3.min.js"></script>

		<!--Bootsrap-->
		<script src="js/bootstrap.min.js"></script>
		<!--Owl Carousel js-->
		<script src="js/owl.carousel.min.js"></script>
		<!--Meanmenu js-->
		<script src="js/meanmenu.js"></script>
		<!--Rev Slider-->
		<script src="rs-plugin/js/jquery.themepunch.tools.min.js"></script>
		<script src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
		<script src="rs-plugin/js/jquery.themepunch.activate.js"></script>
		<!--Scroll Up js-->
		<script src="js/jquery.scrollUp.min.js"></script>
		<!--Price Slider js-->
		<script src="js/price-slider.js"></script>
		<!--Countdown js-->
		<script src="js/jquery.countdown.min.js"></script>
		<!--jQuery Knob js-->
		<script src="js/jquery.knob.js"></script>
		<!--jQuery Throttle js-->
		<script src="js/jquery.throttle.js"></script>
		<!--Classi Caountdown js-->
		<script src="js/jquery.classycountdown.js"></script>
		<!-- Google Map js -->
		<script src="https://maps.googleapis.com/maps/api/js"></script>	
		<!--Active js-->        
		<script src="js/main.js"></script>
		<script src="js/cart.js"></script>


	</body>
</html>