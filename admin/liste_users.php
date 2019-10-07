<?php
include 'inc/admin-header.php';

  ?>
  
<!-- on doit inclure le header ici -->
<!-- ************************************************************************** -->
<!-- on doit inclure le header ici -->

        <!--body wrapper start-->
        <div class="wrapper">

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
                                            <th>Numéro</th>
                                            <th>Commune</th>
                                            <th>Date</th>
                                          
                                          
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
                      
                                      $results = liste_users();
                                      foreach ($results as $produit){?>

                                        <tr>
                                            <td><?= $produit->name ?></td>
                                            <td><?= $produit->numero ?></td>
                                            <td><?= $produit->commune ?></td>
                                            <td><?= $produit->date ?></td>
                                            
                                          
                                           
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
        <footer class="footer-main"> 2019 &copy; IvoireBetail.  </footer> 
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