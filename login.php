<?php 
// include 'body/header.php';


include 'functions/register-user.php';
include 'functions/login-user.php';
enregistrement_visiteur();
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
	
	<section  id="form" style="margin: auto;"><!--form-->
		<div class="container"> 
			<div class="row">
			



				<div class="col-sm-4">

			

					<div class="signup-form"><!--sign up form-->
						<h2>Nouveau Utilisateur </h2>


					<center>
  	 				<div>                     
                        <?php
                        if ($error_user) {?>
                        <div class="alert alert-danger alert-dismissible">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <?= $error_user?>
                      </div>
                        <?php }
                        else if ($success_user) {?>
                          <div class="alert alert-success alert-dismissible">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <?= $success_user?>
                      </div>
                        <?php } ?>

                        
                      </div>
					</center>






						<form action="" method="post">
							<input type="text" name="nom" placeholder="Nom"/>
							<input type="text" name="prenom" placeholder="Prenom"/>
							<input type="text" name="commune" placeholder="commune"/>
							<input type="number" name="numero" placeholder="numero téléphone"/>
							<input type="password" name="password" placeholder="Password"/>
							<input type="password" name="confirm_password" placeholder="Confirm Password"/>
							<button type="envoyer" name="envoyer" class="btn btn-default">S'inscrire</button>
						</form>
					</div><!--/sign up form-->
				</div>



	
				<div class="col-sm-1">
					<h2 class="or">OU</h2>
				</div>


				<div class="col-sm-4 col-sm-offset-1">



					<div class="login-form"><!--login form-->
						<h2>Connectez-vous à votre compte</h2>


					<!-- affichage des eventuelles erreurs ici -->
					<?php
					if (isset($_SESSION['error'])) {?>
						
						<div class="alert alert-danger alert-dismissible">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <?= $_SESSION['error']?>
                      </div>
						<?php
					}
					?> 
					<!-- affichage des eventuelles erreurs ici -->



						
						<form action="" method="post">
							<input type="text" name="numero" placeholder="Numero de téléphone" />
							<input type="password" name="password" placeholder="mot de passe" />
							<span>
								<input type="checkbox" class="checkbox"> 
								Rester connecté
							</span>
							<button type="submit" name="connecter" class="btn btn-default">Connexion</button>
						</form>
					</div><!--/login form-->
				</div>



			</div>
		</div>
	</section><!--/form-->
	
	
	<!-- <footer id="footer"> --><!--Footer-->

		<!-- <div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2016 Ivoire bétail Sarl. Tous droits reservés.</p>
					
				</div>
			</div>
		</div>
		
	</footer> --><!--/Footer-->
	

  
    <script src="js/jquery.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>