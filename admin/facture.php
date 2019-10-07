<!-- on doit inclure le header ici -->
<!-- ************************************************************************** -->

<?php
include 'inc/admin-header.php';
$res = commande_a_livrer_detail();
$mtnt = [];


?>
<!-- on doit inclure le header ici -->

        <!--body wrapper start-->
        <div class="wrapper">
              
              <!--Start Page Title-->
               <div class="page-title-box">
                    <h4 class="page-title">FACTURE</h4>
                    <ol class="breadcrumb">
                        <li>
                            <a href="#">Dashboard</a>
                        </li>
                        <li>
                            <a href="#">Pages</a>
                        </li>
                        <li class="active">
                            Invoice
                        </li>
                    </ol>
                    <div class="clearfix"></div>
                 </div>
                  <!--End Page Title-->          
           
                  
                <!--Start row-->  
                <div class="row">
                   <div class="col-md-12" id='sectionAimprimer'>
                      <div class="white-box">
                          <h3><b>FACTURE IvoireBetail</b> <span class="pull-right">Numéro: <?=$res[0]->numero ?></span></h3>
                          <hr>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="pull-left">
                         
                          <h3> <strong> <img src="assets/images/logo.png"></strong></h3>
                          <p class="text-muted m-l-5"><br>
                          <i> Consommons mieux sans se déplacer</i><br>
                          </p>
                         
                        </div>
                        <div class="pull-right text-right">
                          
                          <h3>Mr/Mme</h3>
                          <h4 class="font-bold"><?=$res[0]->name." ". $res[0]->prenom ?> </h4>
                          <p class="text-muted m-l-30"><?=$res[0]->ville ?><br>
                            <?=$res[0]->commune ?> </p>
                            
                           
                         
                          
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class=" m-t-40">
                          <table class="table table-hover">
                            <thead>
                              <tr>
                                <th class="text-center">#</th>
                                <th>Description</th>
                                <th class="text-right">Quantité</th>
                                <th class="text-right">Prix Unitaire</th>
                                <th class="text-right">Total</th>
                              </tr>
                            </thead>
                            <tbody>

                              <?php foreach ($res as $key => $value) { $mtnt[]=$value->prix ?>
                               
                              <tr>
                                <td class="text-center"><?= $key +1 ?></td>
                                <td><?= $value->nom ?></td>
                                <td class="text-right"><?= $value->quantite ?> </td>
                                <td class="text-right"> <?= $value->prix_unitaire ?> </td>
                                <td class="text-right"> <?= $value->prix ?></td>
                              </tr>

                              <?php } ?>

                              
                            </tbody>
                          </table>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="pull-right m-t-30 text-right">
                          <!--<p>Sub - Total amount: $16,46</p>
                          <p>Tax : N/A </p>-->
                          <hr>
                          <h3><b>Total :</b> <?= array_sum($mtnt)?> Fcfa</h3>
                        </div>
                        <div class="clearfix"></div>
                        <hr>
                        <div class="text-right">
                          
                        </div>
                      </div>
                    </div>
          </div>
                    </div>
                </div>
                <!--End row-->
                  <button class="btn btn-primary" type="submit"><a href="#"> Modifier </a></button>
                          <button onClick="imprimer('sectionAimprimer')" class="btn btn-warning btn-outline" type="button"> <span><i class="fa fa-print"></i> Imprimer</span> </button>
			    </div>
        <!-- End Wrapper-->


        <!--Start  Footer -->
        <footer class="footer-main"> 2019 &copy; IvoireBetail	</footer>	
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

    <script>
function imprimer(divName) {
      var printContents = document.getElementById(divName).innerHTML;    
   var originalContents = document.body.innerHTML;      
   document.body.innerHTML = printContents;     
   window.print();     
   document.body.innerHTML = originalContents;
   }
</script>
    

</body>

</html>
