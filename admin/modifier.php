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
                    <h4 class="page-title">Form Editors</h4>
                    <ol class="breadcrumb">
                        <li>
                            <a href="#">Dashboard</a>
                        </li>
                        <li>
                            <a href="#">Form</a>
                        </li>
                        <li class="active">
                            Form Editors
                        </li>
                    </ol>
                    <div class="clearfix"></div>
                 </div>
                  <!--End Page Title-->          
           
           
               <!--Start row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                          <h2 class="header-title">Bootstrap wysihtml5 </h2>
                          <form>
                          <div class="form-group">
                            <textarea class="textarea form-control wysihtml5-textarea" placeholder="Enter text ..."  style="height:200px; width:100%;"></textarea>
                         </div>
                         
                            <button class="btn btn-primary">Submit</button>
                          </form>
                        </div><!-- /.white-box-->
                        
                        
                        <div class="white-box">
                         <h2 class="header-title">Summernote </h2>
                          <form>
                          <div class="form-group">
                            <div id="summernote">Hello Summernote</div>
                          </div>
                          <button class="btn btn-primary">Submit</button>
                          </form>
                        </div><!-- /.white-box-->
                        
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

    <!-- BEGIN PAGE LEVEL SCRIPTS -->
	<script type="text/javascript" src="assets/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.min.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
    <script type="text/javascript" src="assets/plugins/summernote-master/summernote.min.js"></script>
    
    <script>
      $('.textarea').wysihtml5(); 
      $(document).ready(function() {
      $('#summernote').summernote();
    });
    </script>
 <!-- BEGIN PAGE LEVEL SCRIPTS -->


</body>

</html>