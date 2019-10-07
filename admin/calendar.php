<!-- on doit inclure le header ici -->
<!-- ************************************************************************** -->
<?php
include 'inc/admin-header.php';
?>
<!-- on doit inclure le header ici -->
        <!-- header section end-->



        <!--body wrapper start-->
        <div class="wrapper">
              
              <!--Start Page Title-->
               <div class="page-title-box">
                    <h4 class="page-title">Calendar</h4>
                    <ol class="breadcrumb">
                        <li>
                            <a href="#">Dashboard</a>
                        </li>
                        
                        <li class="active">
                            Calendar
                        </li>
                    </ol>
                    <div class="clearfix"></div>
                 </div>
                  <!--End Page Title-->          
           
           
               <!-- Start row-->
                <div class="row">
                    <div class="calendar-layout clearfix">
                      <div class="col-md-3">
                         <div class="white-box">
                           <div id='external-events'>
                           <h2 class="header-title">DRAGGABLE EVENTS</h2>
                          <div class='fc-event bg-primary'>Client Meeting 1</div>
                          <div class='fc-event bg-success'>Client Meeting 2</div>
                          <div class='fc-event bg-warning'>Client Meeting 3</div>
                          <div class='fc-event bg-danger'>Client Meeting 4</div>
                          <div class='fc-event bg-purple'>Client Meeting 5</div>
                          <div class='fc-event bg-success'>Client Meeting 6</div>
                          <div class='fc-event bg-danger'>Client Meeting 7</div>
                          <div class='fc-event bg-info'>Client Meeting 8</div>
                        </div>
                        </div>
                      </div>
                    
                      <div class="col-md-9">
                          <div class="white-box">
                             <div id='calendar'></div>
                        </div>
                      </div>
                    </div>      
                 </div>
               <!-- End row-->        
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
	<script type="text/javascript" src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="assets/plugins/moment/moment.js"></script>
    <script type="text/javascript" src="assets/plugins/full-calendar/fullcalendar.js"></script>
    <script type="text/javascript" src="assets/pages/calendar-custom.js"></script>
    <!-- END PAGE LEVEL SCRIPTS -->

</body>

</html>
