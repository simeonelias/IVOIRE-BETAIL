<?php
include 'inc/admin-header.php';

$partenaires = liste_partenaire();
    ?>
  
<!-- on doit inclure le header ici -->
<!-- ************************************************************************** -->
<!-- on doit inclure le header ici -->



        <!--body wrapper start-->
        <div class="wrapper">
              
          <!--Start Page Title-->
           <div class="page-title-box">
                <h4 class="page-title">FOURNISSEURS</h4>
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
                           <h2 class="header-title">Liste des Fournisseurs</h2>
                            <div class="table-responsive">
                             <table id="example" class="display table">
                                    <thead>
                                        <tr>
                                            <th>Nom</th>
                                            <th>Lieu d'élevage</th>
                                            <th>Type d'éleveur</th>
                                            <th>Contact</th>
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
                                        <?php foreach ($partenaires as $key => $value) {?>
                                        <tr>
                                            <td><?= $value->nom ?></td>
                                            <td><?= $value->lieu ?></td>
                                            <td><?= $value->type ?></td>
                                            <td><?= $value->contact ?></td>
                                        </tr>

                                            <?php
                                            
                                        } ?>
                                        
                                        
                                    </tbody>
                                   </table>  
                            </div>
                       </div>
                   </div>
               </div>
               <!--End row-->
       
               <!--Start row-->
               <!--<div class="row">
                   <div class="col-md-12">
                       <div class="white-box">
                           <h2 class="header-title">Row Grouping</h2>
                             <table id="example2" class="display table">
                               <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Start date</th>
                                        <th>Salary</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Start date</th>
                                        <th>Salary</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <tr>
                                        <td>Thomsen</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                        <td>2011/04/25</td>
                                        <td>$320,800</td>
                                    </tr>
                                    
                                    <tr>
                                        <td>Poulsen</td>
                                        <td>Technical Support</td>
                                        <td>Ichae Semos</td>
                                        <td>27</td>
                                        <td>2011/01/25</td>
                                        <td>$112,000</td>
                                    </tr>
                                </tbody>
                           </table>
                       </div>
                   </div>
               </div>-->
               <!--End row-->
               
               
          </div>
        <!-- End Wrapper-->


        <!--Start  Footer -->
        <footer class="footer-main"> 2019 &copy; IvoireBetail.  </footer> 
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
  <script src="assets/plugins/datatables/js/jquery.dataTables.min.js"></script>
    <script src="assets/pages/table-data.js"></script>
    <!--End Page Level Plugin-->

</body>

</html>
