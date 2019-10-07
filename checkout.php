<?php
require 'body/header.php';

enregistrement_user();
$stmt = $db->query("SELECT LAST_INSERT_ID()");
$last_id = $stmt->fetchColumn();
if (!$error_user) {
  $res = preparation_panier();


  foreach ($res as $product) {
            
    // $tab['prix_total']=$product->price * $_SESSION['panier'][$product->id];
    $q = $tab['qte'][$product->id]=$_SESSION['panier'][$product->id];
    $n = $tab['nom'][$product->id]=$product->name;
    $p_unitaire = $tab['prix'][$product->id]=$product->price;
    $p = $tab['prix'][$product->id]=$product->price * $q;
    

    $cart->commander($last_id,$n,$q,$p_unitaire,$p);
    
  }
}

?>


<section id="form"><!--form-->
    <div class="container">
      <div class="row" style="background-color: #e7cff1; padding: 15px;margin: 20px;">

        <div class="col-sm-4 col-sm-offset-1">

              <div class="product-information"><!--/product-information-->
                <img src="images/home/" class="newarrival" alt="" />
                <h2>Mon panier</h2>
                <p><?= $q ?> articles dans le panier</p>
                <img src="images/product-details/rating.png" alt="" />
                <span>
                  <span><?= $p ?>Fcfa</span>
                  <!-- <label>Quantité:</label>
                  <input type="text" value="3" /> -->
                  <a type="button" href="shop.php" class="btn btn-fefault cart">
                    <i class="fa fa-shopping-cart"></i>
                    Retour à la boutique
                  </a>


                </span>
                <!-- <p><b>Disponibilité:</b> En Stock</p> -->
                <p><b>Condition:</b> Nouveau</p>
                <p><b>Marque:</b> IVOIRE BETAIL</p>
                <a href=""><img src="images/product-details/share.png" class="share img-responsive"  alt="" /></a>
              </div><!--/product-information-->
       





          <!-- <img src="images/home/Hariana_01.png" style="height: 100%; width: 100%"> -->
        </div>


        

        <div class="col-sm-5 ">

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
                     
                  <meta http-equiv="refresh" content="3;url=shop.php" />;
    
                        <?php } ?>

                        
                      </div>
                  </center>
                  
          <div class="signup-form"><!--sign up form-->
                      
            <h2>Nouveau Utilisateur </h2>
                  
            <form action="" method="post">
              <input type="text" name="nom" placeholder="Nom"/>
              <input type="text" name="prenom" placeholder="Prenom"/>
              <input type="text" name="ville" placeholder="Ville"/>
              
               <select class="" name="commune" id="commune">
              <option value="">Ville/commune</option>
              <option value="Cocody">Cocody</option>
              <option value="Yopougon">Yopougon</option>
              <option value="Adjamé">Adjamé</option>
              <option value="Abobo">Abobo</option>
              <option value="Koumassi">Koumassi</option>
              <option value="Port-Bouet">Port-Bouet</option>
              <option value="Marcory">Marcory</option>
              </select> 
              <hr style="">
              <input type="number" name="contact" placeholder="numero téléphone"/>
              <input type="password" name="password" placeholder="Password"/>
              <input type="password" name="confirm_password" placeholder="Confirm Password"/>
              <button type="submit" name="envoi_commande" class="btn btn-default">Envoyer la commande</button>
            </form>
          </div><!--/sign up form-->
        </div>



      </div>
    </div>
  </section><!--/form-->








<?php
require 'body/footer.php';
?>