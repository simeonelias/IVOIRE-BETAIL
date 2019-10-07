<?php
 include 'inc/admin-header.php';
 $Total = liste_de_produits();
 $users = liste_users();
 $Commandes = commande_a_livrer();
 $commande_non_valide = liste_de_commande_non_valider();


 // valider la Commande
  if (isset($_GET['valide'])) {
    $product = $db->prepare("UPDATE user_commande SET valider=1 WHERE id=:id");
    $product->execute(['id'=>$_GET['valide']]);

     ?>
      <meta http-equiv="refresh" content="2;url=index.php?id=<?=$admin_id?>" />;
    <?php
  }
   
  ?>
 
<!-- on doit inclure le header ici -->
<!-- ************************************************************************** -->
<!-- on doit inclure le header ici -->
        <!-- header section end-->


        <!--body wrapper start-->
        <div class="wrapper">
            
          <!--Start Page Title-->
           <div class="page-title-box">
                <h4 class="page-title">Tableau de bord </h4>
            
                <div class="clearfix"></div>
             </div>
              <!--End Page Title-->          
           
                 <!--Start row-->
                 <div class="row">
                     <div class="container">
                         <div class="analytics-box">
                             
                         </div>
                     </div>
                 </div>
                 <!--End row-->
           
                  <!--Start row-->
                  <div class="row">
                   <!--Start info box-->
                   <div class="col-md-3 col-sm-6">
                       <div class="info-box-main">
                          <div class="info-stats">
                              <p><?= count($commande_non_valide); ?></p>
                              <span>Commandes non validée(s) </span>
                          </div>
                          <div class="info-icon text-primary ">
                              <i class="mdi mdi-cart"></i>
                          </div>
                          <div class="info-box-progress">
                             <div class="progress">
                              <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100" style="width: 48%;">
                             </div>
                          </div>
                          </div>
                       </div>
                   </div>
                   <!--End info box-->
                   
                   <!--Start info box-->
                   <div class="col-md-3 col-sm-6">
                       <div class="info-box-main">
                          <div class="info-stats">
                              <p><?= count($Commandes); ?></p>
                              <span>Total commandes</span>
                          </div>
                          <div class="info-icon text-info">
                             <i class="mdi mdi-account-multiple"></i>	
                          </div>
                          <div class="info-box-progress">
                             <div class="progress">
                              <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100" style="width: 48%;">
                             </div>
                          </div>
                          </div>
                       </div>
                   </div>
                   <!--End info box-->
                
                   <!--Start info box-->
                   <div class="col-md-3 col-sm-6">
                       <div class="info-box-main">
                          <div class="info-stats">
                              <p><?= count($Total); ?></p>
                              <span>Article Total</span>
                          </div>
                          <div class="info-icon text-warning">
                              <i class="fa fa-archive"></i>
                          </div>
                          <div class="info-box-progress">
                             <div class="progress">
                              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100" style="width: 48%;">
                              </div>
                          </div>
                          </div>
                       </div>
                   </div>
                   <!--End info box-->
                
                   <!--Start info box-->
                   <div class="col-md-3 col-sm-6">
                       <div class="info-box-main">
                        <a href="liste_users.php?id=<?= $_SESSION['admin'];?>">
                          <div class="info-stats">
                              <p><?= count($users); ?></p>
                              <span>Utilisateurs</span>
                          </div>
                        </a>
                          <div class="info-icon text-danger">
                              <i class="mdi mdi-weight"></i>
                          </div>
                          <div class="info-box-progress">
                             <div class="progress">
                              <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100" style="width: 48%;">
                             </div>
                          </div>
                          </div>
                       </div>
                   </div>
                   <!--End info box-->
                
                  </div>
                  <!--End row-->
   
                     <!-- Start inbox widget-->
                     <div class="col-md-12">
                        <div class="white-box">
                          <h2 class="header-title"> Commandes en attente </h2>
                            <div class="table-responsive">
                              <table id="example" class="display table">
                                <thead>
                                  <tr>
                                    <th>#</th>
                                    <th>Client</th>
                                    <th >Téléphone</th>
                                    <th>Date de la commande</th>
                                    <th>Ville/Commune</th>
                                    <th>Quartier</th>
                                    <th>Code de la commande</th>
                                    
                                    <th>Valider la commande</th>
                                    
                                    
                                    
                                  </tr>
                                </thead>
                                <tbody>

                                  <?php 
                                  if (empty($commande_non_valide)) {?>

                                    <tr><h3>Pas de nouvelles commandes!</h3></tr>
                                  <?php

                                
                                  }else{

                                  foreach ($commande_non_valide as $key => $value) {?>
                                
                                  <tr>
                                    <td><?= $key+1 ?></td>
                                    <td><?= $value->name." ".$value->prenom ?></td>
                                    <td><?= $value->numero ?></td>
                                    <td><?= $value->date ?></td>
                                    <td><?=$value->ville." / ". $value->commune ?></td>
                                    <td>12/11/2016</td>
                                    <td><?= $value->code_commande ?></td>
                                    

                                    <td>
                                      <?php
                                      if ($value->valider != 1) {?>

                                        <a type="button" class="btn btn-primary" id="valider_commande" href="?id=<?= $_SESSION['admin'];?>&valide=<?= $value->id ?>">
                                        <i class="fa fa-shopping-cart">Valider</i>
              
                                    </a>
                                      <?php
                                    }else{?>
                                      
                                        <button type="button" class="btn btn-fefault cart">
                                        <i class="fa fa-check"></i>
              
                                    </button>

                                      <?php
                                    }
                                      ?>

                                    </td>
                                  
                                  </tr>
                                  <?php } }?>
                                  
                                </tbody>
                              </table>
                            </div>
                                
                        </div>
                       </div>
					<!-- Start inbox widget-->
                   </div>
                   <!--End row-->
			   
			    </div>
        <!-- End Wrapper-->


        <!--Start  Footer -->
        <footer class="footer-main"> 2017 &copy; iVORE BETAIL 2019.	</footer>	
         <!--End footer -->

       </div>
      <!--End main content -->
    


    <!--Begin core plugin -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/plugins/moment/moment.js"></script>
    <script  src="assets/js/jquery.slimscroll.js "></script>
    <script src="assets/js/jquery.nicescroll.js"></script>
    <script src="assets/js/functions.js"></script>
    <!-- End core plugin -->
    
    <!--Begin Page Level Plugin-->
	<script src="assets/plugins/morris-chart/morris.js"></script>
    <script src="assets/plugins/morris-chart/raphael-min.js"></script>
    <script src="assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script src="assets/pages/dashboard.js"></script>
    <!--End Page Level Plugin-->
   

</body>

</html>
