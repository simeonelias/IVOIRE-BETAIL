<?php 

include 'inc/admin-header.php';

  $res = commande_a_livrer();
  $admin_id = $_GET['id'];

// valider la Commande
  if (isset($_GET['valide'])) {
    $product = $db->prepare("UPDATE user_commande SET valider=1 WHERE id=:id");
    $product->execute(['id'=>$_GET['valide']]);
     ?>
      <meta http-equiv="refresh" content="2;url=commandes_livrer.php?id=<?=$admin_id?>" />;
    <?php
  } 

// suprimer une commande

  if (isset($_GET['suprimer'])) {
    $delc = $db->prepare("DELETE FROM user_commande WHERE id=:id");
    $delc->execute(['id'=>$_GET['suprimer']]);

    ?>
      <meta http-equiv="refresh" content="3;url=commandes_livrer.php?id=<?=$admin_id?>" />;
    <?php
  }

?>
  
<!-- on doit inclure le header ici -->
<!-- ************************************************************************** -->
<!-- on doit inclure le header ici -->



        <!--body wrapper start-->
        <div class="wrapper">
              
          <!--Start Page Title-->
           <div class="page-title-box">
                <h4 class="page-title">GESTION DES COMMANDES</h4>
                <ol class="breadcrumb">
                    <li>
                        <a href="#">Dashboard</a>
                    </li>
                    <li>
                        <a href="#">UI Elements</a>
                    </li>
                    <li class="active">
                        Range Slider
                    </li>
                </ol>
                <div class="clearfix"></div>
             </div>
              <!--End Page Title-->          
           
               
                     <!-- Start inbox widget-->
                     <div class="col-md-12">
                        <div class="white-box">
                          <h2 class="header-title"> Commandes à livrer </h2> 
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
                                    <th>Voir les details</th>
                                    <th>Valider la commande</th>
                                    
                                    
                                    <th>Supprimer la commande</th>
                                  </tr>
                                </thead>
                                <tbody>

                                  <?php foreach ($res as $value) {?>
                                
                                  <tr>
                                    <td>1</td>
                                    <td><?= $value->name." ".$value->prenom ?></td>
                                    <td><?= $value->numero ?></td>
                                    <td><?= $value->date ?></td>
                                    <td><?=$value->ville." / ". $value->commune ?></td>
                                    <td>12/11/2016</td>
                                    <td><?= $value->code_commande ?></td>
                                    <td><button type="button" class="btn btn-info"><span><a href="facture.php?id=<?= $_SESSION['admin'];?>&commande=<?= $value->id ?>"> voir </a></span></button></td>

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
                                    <td>
                                  
                                    <a type="button" class="btn btn-danger" href="?id=<?= $_SESSION['admin'];?>&suprimer=<?= $value->id ?>"><span>Supprimer</span></a>

                                    </td>
                                    <td>
                                      

                                    </td>
                                  </tr>
                                  <?php } ?>
                                  
                                </tbody>
                              </table>
                            </div>
                                
                        </div>
                       </div>
                       <!-- Start inbox widget-->


               <!--Start row-->
               <!--<div class="row">
                  <div class="col-md-12">
                <div class="white-box">
                    <h2 class="header-title"> Range Slider</h2>
                     <form class="form-horizontal">
                        <div class="form-body">
                            <div class="form-group">
                                <label class="col-md-3">Basic</label>
                                <div class="col-md-9">
                                    <div class="slider slider-basic bg-red bg-danger">
                                    </div>
                                    <div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3">Range</label>
                                <div class="col-md-9">
                                    <div id="slider-range" class="slider bg-blue bg-primary">
                                    </div>
                                    <div>
                                         Value: <span id="slider-range-amount">
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3">Snap to increments</label>
                                <div class="col-md-9">
                                    <div id="slider-snap-inc" class="slider bg-green">
                                    </div>
                                    <div class="slider-value">
                                         Amount ($100 increments): <span id="slider-snap-inc-amount">
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3">Maximum</label>
                                <div class="col-md-9">
                                    <div id="slider-range-max" class="slider bg-purple">
                                    </div>
                                    <div class="slider-value">
                                         Maximum Value: <span id="slider-range-max-amount">
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3">Minimum</label>
                                <div class="col-md-9">
                                    <div id="slider-range-min" class="slider bg-yellow">
                                    </div>
                                    <div class="slider-value">
                                         Minimum Value: <span class="slider-value" id="slider-range-min-amount">
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3">Vertical</label>
                                <div class="col-md-4">
                                    <div class="slider-vertical-value">
                                         Value: <span class="slider-value" id="slider-vertical-amount">
                                        </span>
                                    </div>
                                    <div id="slider-vertical" class="slider bg-green" style="height: 200px;">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group last">
                                <label class="col-md-3">Range(Vertical)</label>
                                <div class="col-md-4">
                                    <div class="slider-vertical-value">
                                         Target(Millions): <span class="slider-value" id="slider-range-vertical-amount">
                                        </span>
                                    </div>
                                    <div id="slider-range-vertical" class="slider bg-grey" style="height: 200px;">
                                    </div>
                                </div>
                            </div>
                        </div>
								
				    </form>-->
                 </div>
               </div>
               </div>
               <!--End row-->         
               
               
			    </div>
          <!-- End Wrapper-->


        <!--Start  Footer -->
        <footer class="footer-main"> 2019 &copy; IvoireBetail.	</footer>	
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
    <script src="assets/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="assets/pages/components-jqueryui-sliders.js"></script>
    <script src="assets/js/jquery.app.js" type="text/javascript"></script>
     <!--Begin Page Level Plugin-->
  <script src="assets/plugins/datatables/js/jquery.dataTables.min.js"></script>
    <script src="assets/pages/table-data.js"></script>
    <!--End Page Level Plugin-->

     <!--End Page Level Plugin-->


</body>

</html>
