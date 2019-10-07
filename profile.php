<?php
if(empty($_SESSION)){
	session_start();
}
if(isset($_SESSION['admin'])){
include 'body/header.php';
$historique = historique();
// var_dump($historique);


    $requete = $db->query("
        SELECT
            
            user_commande.date,
            user_commande.numero,
            user_commande.commune,
            user_commande.ville,

            commande.id,
            commande.prix,
            commande.prix_unitaire,
            commande.quantite,
            commande.user_id,
            commande.nom
         


        FROM commande
        JOIN user_commande ON commande.user_id = user_commande.id
        WHERE commande.user_id='{$_GET['id']}' 

        ");

        $results = [];

        while ($rows=$requete->fetchObject()) {
            $results[] = $rows;
        }

?>




<div class="container">

<div class="panel panel-default">
  <div class="panel-heading"><h3>Espace utilisateur</h3></div> 
  <div class="panel-body">
    
<div class="row">



<div class="col-sm-5">
<div class="panel panel-info">
  <div class="panel-heading">
    <h3 class="panel-title">Mon profile</h3>

  </div>
  <div class="panel-body">
    <div class="thumbnail">
      <img src="images/home/user.png" alt="..." style="height: 150px;">
      <div class="caption">
        <h3><i class="fa fa-user"></i>  <?= $historique->name ?> <?= $historique->prenom ?></h3>
        <h4><i class="fa fa-phone"></i>  <?= $historique->numero ?></h4>
        <h4><i class="fa fa-home"></i>  <?= $historique->commune ?></h4>
        <p><a href="#" class="btn btn-primary" role="button">Modifier mes informations</a></p>
      </div>
    </div>
  </div>
</div>
</div>


<div class="col-sm-7">
<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading"><h3> Historique de mes commandes</h3></div>
  <div class="panel-body">
    
  <div class="table-responsive">
                              <table id="example" class="display table">
                                <thead>
                                  <tr>
                                    <th>N°</th>
                                    <th>Date Commande</th>
                                    <th>Articles</th>
                                    <th >Nbre Articles</th>
                                    <th>Prix Total</th>
                                    
                                  </tr>
                                </thead>
                                <tbody>

                                  <?php
                                  if (isset($results)) {
                                foreach ($results as $key => $value) {?>
                              
                                  <tr>
                                    <td><?= $key +1 ?></td>
                                    <td><?= $value->date ?> </td>
                                    <td><?= $value->nom ?></td>
                                    <td><?= $value->quantite ?></td>
                                    <td><?= $value->prix ?></td> 
                                    
                                  </tr>

                                  <?php 
                                }

                                }else{?>

                                  <tr>
                                    Aucune commande effectuée
                                     
                                    
                                  </tr>

                                  <?php

                                } 
                                ?> 
                                
                                  
                                  

                                  
                                  
                                </tbody>
                              </table>
                            </div>

  </div>

  <!-- Table -->
  <table class="table">
  



  </table>





</div>
</div>

</div>



  </div>
</div>

</div>







     <!--Begin core plugin -->
    <script src="admin/assets/js/jquery.min.js"></script>
    <script src="admin/assets/js/bootstrap.min.js"></script>
    <script src="admin/assets/plugins/moment/moment.js"></script>
    <script  src="admin/assets/js/jquery.slimscroll.js "></script>
    <script src="admin/assets/js/jquery.nicescroll.js"></script>
    <script src="admin/assets/js/functions.js"></script>
    <!-- End core plugin -->
    
    <!--Begin Page Level Plugin-->
    <script src="admin/assets/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="admin/assets/pages/components-jqueryui-sliders.js"></script>
    <script src="admin/assets/js/jquery.app.js" type="text/javascript"></script>
     <!--Begin Page Level Plugin-->
  <script src="admin/assets/plugins/datatables/js/jquery.dataTables.min.js"></script>
    <script src="admin/assets/pages/table-data.js"></script>
    <!--End Page Level Plugin-->
</body>
</html>




		<?php
	}else{
		
		header('location: login.php');
	}
?>




