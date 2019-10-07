
<?php
include 'inc/admin-header.php';
require 'admin-functions/ajout_produit.php'; 
  $row = []; 
    $req = $db->query("SELECT * FROM type");
    while ($result = $req->fetch()) {
      $row[] = $result;
    } 
?>
  

<!-- on doit inclure le header ici -->
<!--**************************************************************** -->
<!-- on doit inclure le header ici -->


        <!--body wrapper start-->
        <div class="wrapper">
              
          <!--Start Page Title-->
           <div class="page-title-box">
                <h4 class="page-title">Table</h4>
                <ol class="breadcrumb">
                    <li>
                        <a href="#">Dashboard</a>
                    </li>
                    <li>
                        <a href="#">Table</a>
                    </li>
                    <li class="active">
                        Responsive Table
                    </li>
                </ol>
                <div class="clearfix"></div>
             </div>
              <!--End Page Title-->          
           
           
                  <!--Start row-->
               <div class="row" >
                   <div class="col-md-12">
                       <div class="white-box">  
                       <h2 class="header-title">Ajouter un produit</h2>


                        <!-- affichage des messages d'erreur  ou de succes -->
                        <div>                     
                        <?php
                        if ($error) {?>
                        <div class="alert alert-danger alert-dismissible">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <?= $error?>
                      </div>
                        <?php }
                        else if ($success) {?>
                          <div class="alert alert-success alert-dismissible">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <?= $success?>
                      </div>
                        <?php } ?>

                        
                      </div>
                        <!-- affichage des messages d'erreur  ou de succes -->

                         <form class="js-validation-bootstrap form-horizontal" action="" method="post" enctype="multipart/form-data">
                          <div class="form-group">
                            <label class="col-md-3 control-label" for="nom">Nom animal <span class="text-danger">*</span></label>
                            <div class="col-md-9">
                              <input class="form-control" type="text" id="nom" name="nom" placeholder="Entrer le nom du produit">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-md-3 control-label" for="description">Description <span class="text-danger">*</span></label>
                            <div class="col-md-9">
                              <input class="form-control" type="text" id="description" name="description" placeholder="Décrire le produit">
                            </div>
                          </div>
                          <!-- <div class="form-group">
                            <label class="col-md-3 control-label" for="type">Type <span class="text-danger">*</span></label>
                            <div class="col-md-9">
                              <input class="form-control" type="text" id="type" name="type" placeholder="Type">
                            </div>
                          </div> -->
                          
                          <div class="form-group">
                            <label class="col-md-3 control-label" for="type">Type <span class="text-danger">*</span></label>
                            <div class="col-md-9">
                              <select class="form-control" id="type" name="type">
                              <?php foreach ($row as $value) {?>
                              <option value="<?= $value['id'] ?>"><?= $value['type'] ?></option>
                              <?php } ?>                      
                              
                                
                         <!--        <option value="demo2">Demo 2</option>
                                <option value="demo3">Demo 3</option>
                                <option value="demo4">Demo 4</option>
                                <option value="demo5">Demo 5</option> -->
                              </select>
                            </div>
                            </div>

                          <div class="form-group">
                            <label class="col-md-3 control-label" for="prix">Prix <span class="text-danger">*</span></label>
                            <div class="col-md-9">
                              <input class="form-control" type="text" id="prix" name="prix" placeholder="le prix">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-md-3 control-label" for="image">Image <span class="text-danger">*</span></label>
                            <div class="col-md-9">
                              <input class="form-control" name="image" type="file" placeholder="image">
                            </div>
                          </div>
                          <!--<div class="form-group">
                            <label class="col-md-3 control-label" for="val-range">Range [1, 10] <span class="text-danger">*</span></label>
                            <div class="col-md-9">
                              <input class="form-control" type="text" id="val-range" name="val-range" placeholder="3">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-md-3 control-label" for="val-suggestions">About <span class="text-danger">*</span></label>
                            <div class="col-md-9">
                              <textarea class="form-control" id="val-suggestions" name="val-suggestions" rows="14" placeholder="About"></textarea>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-md-3 control-label"> Terms <span class="text-danger">*</span></label>
                            <div class="col-md-9">
                              <div class="checkbox primary">
                                <input type="checkbox" id="val-terms" name="val-terms" value="1">
                                <label  class="css-input css-checkbox css-checkbox-primary" for="val-terms" >
                                I agree to the terms
                                </label>
                              </div>
                            </div>
                          </div>-->
                          <div class="form-group">
                            <div class="col-md-8 col-md-offset-3">
                              <button class="btn  btn-primary" name="ajouter" type="submit">Ajouter</button>
                            </div>
                          </div>
                        </form>
                       </div>
                    </div>
                </div>
                 <!-- end row --> 

			    </div>
        <!-- End Wrapper-->


        <!--Start  Footer -->
        <footer class="footer-main"> 2017 &copy; Meter admin Template.	</footer>	
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

</body>

</html>