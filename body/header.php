<?php
if (empty($_SESSION)) {
	session_start();

}
require 'functions/main.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>IVOIRE BETAIL</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/home/logo-ivoire.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href=""><i class="fa fa-phone"></i> +225 74 16 97 44</a></li>
								<li><a href=""><i class="fa fa-envelope"></i> contact@ivoirebetail.ci</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="https://www.facebook.com/Ivoire-b%C3%A9tail-2205045192850187/"><i class="fa fa-facebook"></i></a></li>
								<li><a href=""><i class="fa fa-twitter"></i></a></li>
								<li><a href=""><i class="fa fa-linkedin"></i></a></li>
								<li><a href=""><i class="fa fa-dribbble"></i></a></li>
								<li><a href=""><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container-fluid">
				<div class="row" style="margin: 2px; padding: 3px 5px 3px 5px">
					<div class="col-md-4 clearfix">
						<div class="logo pull-left">
							<a href="index.php" ><img src="images/home/logo.png" alt="" class="img-responsive"/></a>
						</div>
						
					</div>
					<div class="col-md-8 clearfix">
						<div class="shop-menu clearfix pull-right">
							<ul class="nav navbar-nav">

								
								<li><a id="notifications" href="cart.php"><i class="fa fa-shopping-cart"></i>
								


 									<span style="background-color: red" class="badge bg-red badge-corner" id="count"><?= $cart->count();  ?></span>
									
								</a></li>

								<?php 
								if (isset($_SESSION['admin'])) {?>
	

						<li>			
                      	
                                <li class="dropdown"><a href="#"><i class="fa fa-user"></i><?=$_SESSION['user_name']?><i class="fa fa-angle-down"></i></a>
                                  <ul role="menu" class="sub-menu">
                                   <li> <a href="profile.php?id=<?=$_SESSION['admin']?>" style="color: orange; background-color: inherit;" > <i class="fa fa-user"></i> Profile </a> </li>
                          <li> <a href="logout-user.php" style="color: orange; background-color: inherit;" > <i class="fa fa-lock"></i> Déconnexion </a> </li>
                                    </ul>
                                 
						
                    </li>



									<?php
								}else{?>

								<li><a href="login.php"><i class="fa fa-lock"></i> Connexion</a></li>
									<?php
								}

								 ?>

								

								
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom" id="navbarfixed"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-8">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index.php" class="active">Acceuil</a></li>
								<li class="dropdown"><a href="#">Articles<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop.php">Produits</a></li>
										<!-- <li><a href="product-details.php">Produits Details</a></li>  -->
										<li><a href=" <?= (isset($_SESSION['admin'])) ? 'profile.php?id='.$_SESSION['admin'] : 'login.php';?>">Historique</a></li> 
										<li><a href="cart.php">Panier</a></li> 
										
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Astuce élevage<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="">Liste d'astuce</a></li>
										<li><a href="">Conseils</a></li>
                                    </ul>
                                </li> 

								<li><a href="contact-us.php">Contact</a></li>

							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<form action="#" method="post">
							<div class="search_box pull-right">
							<input name="recherche" type="text" placeholder="Search"/>
							<button type="submit" class="btn btn-warning" name="search">Go</button>
						</div>
						</form>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom--> 
	</header><!--/header-->

	<style type="text/css">
		
		.fixer{
			background-color: white;
			box-shadow: 1px 3px 10px  #000;
			color: white;
			position: fixed;
			top: 0;
			width: 100%;
			padding-top: 10px;
			padding-bottom: 15px;
			margin-bottom: 7px;
			z-index: 100
		}

		.fixer{

		}
	</style>


<script>
window.onscroll = function(){fixer_nav()};
var nav = document.getElementById("navbarfixed");
var sticky = nav.offsetTop;
function fixer_nav(){

if(window.pageYOffset>=sticky){
	nav.classList.add('fixer');
}else{
	nav.classList.remove('fixer')
}
};


</script>

