<?php require 'admin-functions/login-func.php';
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="assets/images/logo-ivoire.png" type="image/png">
  <title>Admin Dashboard </title>
   <link href="assets/css/icons.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
          <script src="js/html5shiv.min.js"></script>
          <script src="js/respond.min.js"></script>
    <![endif]-->

</head>

<body class="sticky-header">

 
 <!--Start login Section-->
  <section class="login-section">
       <div class="container">
           <div class="row">
               <div class="login-wrapper">
                   <div class="login-inner">

                    <!-- message error en cas de non connexion -->

                   
                  <h3>Veuillez-vous connecter!</h3>
                       
                       <div class="logo">
                         <img style="height: 70px" src="assets/images/key.png"  alt="logo"/>
                       </div>
                   		
                   		<h2 class="header-title text-center">Login</h2>

                      <!-- affichage des messages d'erreur -->
                      <div>
                        <?php
                        if ($error) {?>
                        <div class="alert alert-danger alert-dismissible">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <?= $error ?>
                      </div>
                        <?php } ?>
                        
                      </div>
                      <!-- affichage des messages d'erreur -->
                        
                       <form method="post" action="">
                           <div class="form-group">
                               <input type="text" name="email" class="form-control"  placeholder="Username" >
                           </div>
                           
                           <div class="form-group">
                               <input type="password" name="password" class="form-control"  placeholder="Password" >
                           </div>

						<div class="form-group">
                           <div class="pull-left">
                            <div class="checkbox primary">
                              <input  id="checkbox-2" type="checkbox">
                              <label for="checkbox-2">Remember me</label>
                            </div>
                           </div>
                           
                           <div class="pull-right">
                           	   <a href="reset-password.html" class="a-link">
                               <i class="fa fa-unlock-alt"></i> Forgot password?
                               </a>
                           </div>
                         </div>
                          
                           <div class="form-group">
                               <input type="submit" name="submit" value="Login" class="btn btn-primary btn-block" >
                           </div>
                           
                           <div class="form-group text-center">
                            Don't have an account?  <a href="registration.html">Sign Up </a>
                           </div>
                           
                       </form>
                       
                        <div class="copy-text"> 
                         <p class="m-0">2019 &copy;  Administrateur</p>
                        </div>
                    
                   </div>
               </div>
               
           </div>
       </div>
  </section>
 <!--End login Section-->




    <!--Begin core plugin -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- End core plugin -->

</body>

</html>
