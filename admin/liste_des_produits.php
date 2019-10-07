<?php
include 'inc/admin-header.php';

// suprimer une commande
$admin_id = $_GET['id'];
$msg="";

  if (isset($_GET['sup'])) {
    $delc = $db->prepare("DELETE FROM product WHERE id=:id");
    $delc->execute(['id'=>$_GET['sup']]);
    $msg = "supression avec success";

    ?>
      <meta http-equiv="refresh" content="3;url=?id=<?=$admin_id?>" />;
    <?php
  }
  ?>
  
<!-- on doit inclure le header ici -->
<!-- ************************************************************************** -->
<!-- on doit inclure le header ici -->

        <!--body wrapper start-->
        <div class="wrapper">
            

            <?php
                        if ($msg) {?>
                        <div class="alert alert-success alert-dismissible">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <?= $msg?>
                      </div>
                        <?php }  
          ?>

          <!--Start Page Title-->
           <div class="page-title-box">
                <h4 class="page-title">PRODUITS</h4>
                <ol class="breadcrumb">
                    <li>
                        <a href="#">Dashboard</a>
                    </li>
                    <li>
                        <a href="#">Table</a>
                    </li>
                    <li class="active">
                        Data Table
                    </li>
                </ol>
                <div class="clearfix"></div>
             </div>
              <!--End Page Title-->          
           
           
               <!--Start row-->
               <div class="row">
                   <div class="col-md-12">
                       <div class="white-box">
                           <h2 class="header-title">Liste des Produits</h2>
                            <div class="table-responsive">
                             <table id="example" class="display table">
                                    <thead>                                         
                                        <tr>
                                            <th>Nom</th>
                                            <th>Description</th>
                                            <th>Fournisseur</th>
                                            <th>Type</th>
                                            <th>Prix</th>
                                            <th>Image</th>
                                            <th>Modifier</th>
                                            <th>Sup</th>
                                        </tr>
                                    </thead>
                                    <!--<tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </tfoot>-->
                                    <tbody>
                                      <?php
                                      $produits=liste_de_produits();
                                      
                                      
                                      foreach ($produits as $produit){?>

                                        <tr>
                                            <td><?= $produit->name ?></td>
                                            <td><?= $produit->description ?></td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td><?= $produit->price ?></td>
                                            <td><img style="height: 40px" src="../images/home/<?= $produit->img ?>"></td>
                                            <td><a class="btn btn-warning" href="modifier_produit.php?id=<?=$_SESSION['admin']?>&produit=<?= $produit->id ?>">Modifier</a></td>

                                            <td><a class="btn btn-danger" href="?id=<?=$_SESSION['admin']?>&sup=<?= $produit->id ?>">Suprimer</a></td>
                                            <!-- <td><button>suprimer</button></td> -->
                                        </tr>

                                      <?php } ?>
                                      
                                        
                                    </tbody>
                                   </table>  
                            </div>
                       </div>
                   </div>
               </div>
               <!--End row-->
       
               
               
               
			    </div>
        <!-- End Wrapper-->


        <!--Start  Footer -->        
        <footer class="footer-main"> 2019 &copy; IvoireBetail.	</footer>	
         <!--End footer -->

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
	<script src="assets/plugins/datatables/js/jquery.dataTables.min.js"></script>
    <script src="assets/pages/table-data.js"></script>
    <!--End Page Level Plugin-->

</body>
</html>