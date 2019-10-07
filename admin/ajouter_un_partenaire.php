<?php 
include 'inc/admin-header.php';
require 'admin-functions/register-provider.php';
enregistrement_partenaire();
  ?>

<!-- on doit inclure le header ici -->
<!-- ************************************************************************** -->


<!-- on doit inclure le header ici -->
        <!-- header section end-->

        <!--body wrapper start-->
        <div class="wrapper">
              
              <!--Start Page Title-->
               <div class="page-title-box">
                    <h4 class="page-title">PARTENAIRES</h4>





                    <ol class="breadcrumb">
                        <li>
                            <a href="#">Dashboard</a>
                        </li>
                        <li>
                            <a href="#">Form</a>
                        </li>
                        <li class="active">
                            Form Validation
                        </li>
                    </ol>
                    <div class="clearfix"></div>
                 </div>
                  <!--End Page Title-->          
           
           
               <!--Start row-->
               <div class="row">
                   <div class="col-md-12">
                       <div class="white-box">  
                       <h2 class="header-title">Ajouter un partenaire</h2>


<!-- affichage des messages d'erreur  ou de succes -->
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
                        <!-- affichage des messages d'erreur  ou de succes -->


                       
                         <form class="js-validation-bootstrap form-horizontal" action="" method="post">
                          <div class="form-group">
                            <label class="col-md-3 control-label" for="nom">Nom <span class="text-danger">*</span></label>
                            <div class="col-md-9">
                              <input class="form-control" type="text" id="nom" name="nom" placeholder="Entrer le nom">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-md-3 control-label" for="type">Type d'élévage <span class="text-danger">*</span></label>
                            <div class="col-md-9">
                              <input class="form-control" type="text" id="type" name="type" placeholder="le type d'animaux">
                            </div>
                          </div>

                          <!--<div class="form-group">
                            <label class="col-md-3 control-label" for="val-username">Type d'élevage <span class="text-danger">*</span></label>
                            <div class="col-md-9">
                              <input class="form-control" type="text" id="val-username" name="val-username" placeholder="le type d'élevage">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-md-3 control-label" for="val-username">Commune d'élevage <span class="text-danger">*</span></label>
                            <div class="col-md-9">
                              <input class="form-control" type="text" id="val-username" name="val-username" placeholder="la commune d'élevage">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-md-3 control-label" for="val-suggestions">About <span class="text-danger">*</span></label>
                            <div class="col-md-9">
                              <textarea class="form-control" id="val-suggestions" name="val-suggestions" rows="14" placeholder="About"></textarea>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-md-3 control-label" for="val-skill">Best Skill <span class="text-danger">*</span></label>
                            <div class="col-md-9">
                              <select class="form-control" id="val-skill" name="val-skill">
                                <option value="">Please select</option>
                                <option value="demo1">Demo 1</option>
                                <option value="demo2">Demo 2</option>
                                <option value="demo3">Demo 3</option>
                                <option value="demo4">Demo 4</option>
                                <option value="demo5">Demo 5</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-md-3 control-label" for="val-website">Website <span class="text-danger">*</span></label>
                            <div class="col-md-9">
                              <input class="form-control" type="text" id="val-website" name="val-website" placeholder="http://example.com">
                            </div>
                          </div>-->
                          <div class="form-group">
                            <label class="col-md-3 control-label" for="lieu">Lieu d'élevage <span class="text-danger">*</span></label>
                            <div class="col-md-9">
                              <input class="form-control" type="text" id="lieu" name="lieu" placeholder="le lieu d'élevage">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-md-3 control-label" for="contact">Contact <span class="text-danger">*</span></label>
                            <div class="col-md-9">
                              <input class="form-control" type="text" id="contact" name="contact" placeholder="le contact">
                            </div>
                          </div>
                          <!--<div class="form-group">
                            <label class="col-md-3 control-label" for="val-range">Range [1, 10] <span class="text-danger">*</span></label>
                            <div class="col-md-9">
                              <input class="form-control" type="text" id="val-range" name="val-range" placeholder="3">
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
                              <button class="btn  btn-primary" type="submit" name="submit">Ajouter</button>
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

    <!-- BEGIN PAGE LEVEL SCRIPTS -->
	<script src="assets/plugins/jquery-validation/jquery.validate.min.js"></script>
    <script src="assets/pages/validation-custom.js"></script>
    <!-- BEGIN PAGE LEVEL SCRIPTS -->


</body>

</html>