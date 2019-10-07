<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="assets/images/favicon.png" type="image/png">
  <title>Meter - Responsive Admin Dashboard Template</title>
    <link href="assets/css/icons.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
          <script src="js/html5shiv.min.js"></script>
          <script src="js/respond.min.js"></script>
    <![endif]-->

</head>

<body class="sticky-header">


    <!--Start left side Menu-->
    <div class="left-side sticky-left-side">

        <!--logo-->
        <div class="logo">
            <a href="index.html"><img src="assets/images/logo.png" alt=""></a>
        </div>

        <div class="logo-icon text-center">
            <a href="index.html"><img src="assets/images/logo-icon.png" alt=""></a>
        </div>
        <!--logo-->

        <div class="left-side-inner">
            <!--Sidebar nav-->
            <ul class="nav nav-pills nav-stacked custom-nav">
                <li class="menu-list nav-active"><a href="index.html"><i class="icon-home"></i> <span>Tableau de bord</span></a>
                </li>

                <li class="menu-list"><a href="#"><i class="icon-layers"></i> <span>Gestion des commandes</span></a>
                    <ul class="sub-menu-list">
                        <!--<li><a href="commandes.html"> commandes</a></li>-->
                        <li><a href="commandes_livrer.html">Commandes à livrer</a></li>
                        <li><a href="facture.html">Editer une facture</a></li>

                    </ul>
                </li>
                
                <li class="menu-list"><a href="#"><i class="icon-grid"></i> <span>Produits</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="liste_des_produits.html">Liste des produits</a></li>
                        <li><a href="ajouter_un_produit.html">Ajouter un Produit</a></li>
                    </ul>
                </li>

                <li class="menu-list"><a href="#"><i class="icon-envelope-open"></i> <span>Mail</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="inbox.html"> Inbox</a></li>
                        <li><a href="compose_mail.html"> Compose Mail</a></li>
                        <li><a href="view_mail.html"> View Mail</a></li>
                    </ul>
                </li>

                <li class="menu-list"><a href="#"><i class="icon-loop"></i> <span>Partenaires</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="liste_des_partenaires.html">Liste des partenaires</a></li>
                        <li><a href="ajouter_un_partenaire.html">Ajouter un partenaire</a></li>
                        <!--<li><a href="modifier.html">Modifier</a></li>-->
                    </ul>
                </li>          
                <li><a href="calendar.html"><i class="icon-note"></i> <span>Calendar</span></a></li>
                <li class="menu-list"><a href="#"><i class="icon-location-pin"></i> <span>Maps</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="google-map.html"> Google Map</a></li>
                        <li><a href="vector-map.html"> Vector Map</a></li>
                    </ul>
                </li>
                <li class="menu-list"><a href="#"><i class="icon-folder"></i> <span>Extra Pages</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="faq.html"> FAQ</a></li>
                        <li><a href="profile.html"> Profile</a></li>            
                    </ul>
                </li>
                <li class="menu-list"><a href="#"><i class="icon-lock"></i> <span>Login</span></a>
                    <ul class="sub-menu-list">
                       <li><a href="login.html"> Login </a></li>
                       <li><a href="forgot-password.html"> Forgot Password </a></li>
                        <li><a href="registration.html"> Registration </a></li>
                        <li><a href="lockscreen.html"> Lockscreen </a></li>
                    </ul>
                </li>

            </ul>
            <!--End sidebar nav-->

        </div>
    </div>
    <!--End left side menu-->
    
    
    <!-- main content start-->
    <div class="main-content" >

        <!-- header section start-->
        <div class="header-section">

            <a class="toggle-btn"><i class="fa fa-bars"></i></a>

            <form class="searchform">
                <input type="text" class="form-control" name="keyword" placeholder="Search here..." />
            </form>

            <!--notification menu start -->
            <div class="menu-right">
                <ul class="notification-menu">
                    <li>
                        <a href="#" class="btn btn-default dropdown-toggle info-number" data-toggle="dropdown">
                            <i class="fa fa-tasks"></i>
                            <span class="badge">8</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-head pull-right">
                            <h5 class="title">You have 8 pending task</h5>
                            <ul class="dropdown-list">
                            <li class="notification-scroll-list notification-list ">
                               <!-- list item-->
                               <a href="javascript:void(0);" class="list-group-item">
                                  <div class="media">
                                     <div class="pull-left p-r-10">
                                        <em class="fa  fa-shopping-cart noti-primary"></em>
                                     </div>
                                     <div class="media-body">
                                        <h5 class="media-heading">A new order has been placed.</h5>
                                        <p class="m-0">
                                            <small>29 min ago</small>
                                        </p>
                                     </div>
                                  </div>
                               </a>
                    
                               <!-- list item-->
                               <a href="javascript:void(0);" class="list-group-item">
                                  <div class="media">
                                     <div class="pull-left p-r-10">
                                        <em class="fa fa-check noti-success"></em>
                                     </div>
                                     <div class="media-body">
                                        <h5 class="media-heading">Databse backup is complete</h5>
                                        <p class="m-0">
                                            <small>12 min ago</small>
                                        </p>
                                     </div>
                                  </div>
                               </a>
                    
                               <!-- list item-->
                               <a href="javascript:void(0);" class="list-group-item">
                                  <div class="media">
                                     <div class="pull-left p-r-10">
                                        <em class="fa fa-user-plus noti-info"></em>
                                     </div>
                                     <div class="media-body">
                                        <h5 class="media-heading">New user registered</h5>
                                        <p class="m-0">
                                             <small>17 min ago</small>
                                        </p>
                                     </div>
                                  </div>
                               </a>
                    
                                <!-- list item-->
                               <a href="javascript:void(0);" class="list-group-item">
                                  <div class="media">
                                     <div class="pull-left p-r-10">
                                        <em class="fa fa-diamond noti-danger"></em>
                                     </div>
                                     <div class="media-body">
                                        <h5 class="media-heading">Database error.</h5>
                                        <p class="m-0">
                                             <small>11 min ago</small>
                                        </p>
                                     </div>
                                  </div>
                               </a>
                    
                               <!-- list item-->
                               <a href="javascript:void(0);" class="list-group-item">
                                  <div class="media">
                                     <div class="pull-left p-r-10">
                                        <em class="fa fa-cog noti-warning"></em>
                                     </div>
                                     <div class="media-body">
                                        <h5 class="media-heading">New settings</h5>
                                        <p class="m-0">
                                             <small>18 min ago</small>
                                        </p>
                                     </div>
                                  </div>
                               </a>
                             </li>
                             <li class="last"> <a href="#">View all notifications</a> </li>
							</ul>
                        </div>
                    </li>
                    
                    <li>
                        <a href="#" class="btn btn-default dropdown-toggle info-number" data-toggle="dropdown">
                            <i class="fa fa-bell-o"></i>
                            <span class="badge">4</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-head pull-right">
                         <h5 class="title">Notifications</h5>
                        <ul class="dropdown-list normal-list">
						 <li class="message-list message-scroll-list">
                          <a href="#">
                              <span class="photo"> <img src="assets/images/users/avatar-8.jpg" class="img-circle" alt="img"></span>
                              <span class="subject">John Doe</span>
                              <span class="message"> New tasks needs to be done</span>
                               <span class="time">15 minutes ago</span>
                          </a>
                          
                          <a href="#">
                              <span class="photo"> <img src="assets/images/users/avatar-7.jpg" class="img-circle" alt="img"></span>
                              <span class="subject">John Doe</span>
                              <span class="message"> New tasks needs to be done</span>
                               <span class="time">10 minutes ago</span>
                          </a>
                        
                          <a href="#">
                              <span class="photo"> <img src="assets/images/users/avatar-6.jpg" class="img-circle" alt="img"></span>
                               <span class="subject">John Doe</span>
                               <span class="message"> New tasks needs to be done</span>
                              <span class="time">20 minutes ago</span>
                          </a>
                         
                          <a href="#">
                              <span class="photo"> <img src="assets/images/users/avatar-6.jpg" class="img-circle" alt="img"></span>
                               <span class="subject">John Doe</span>
                               <span class="message"> New tasks needs to be done</span>
                              <span class="time">20 minutes ago</span>
                          </a>
                        
                          <a href="#">
                              <span class="photo"> <img src="assets/images/users/avatar-6.jpg" class="img-circle" alt="img"></span>
                               <span class="subject">John Doe</span>
                               <span class="message"> New tasks needs to be done</span>
                              <span class="time">20 minutes ago</span>
                          </a>
                          
                          <a href="#">
                              <span class="photo"> <img src="assets/images/users/avatar-6.jpg" class="img-circle" alt="img"></span>
                               <span class="subject">John Doe</span>
                               <span class="message"> New tasks needs to be done</span>
                              <span class="time">20 minutes ago</span>
                          </a>
						</li>
						<li class="last"> <a  href="#">All Messages</a> </li>
					</ul>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                            <img src="assets/images/users/avatar-6.jpg" alt="" />
                            John Doe
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                          <li> <a href="#"> <i class="fa fa-wrench"></i> Settings </a> </li>
                          <li> <a href="#"> <i class="fa fa-user"></i> Profile </a> </li>
                          <li> <a href="#"> <i class="fa fa-info"></i> Help </a> </li>
                          <li> <a href="#"> <i class="fa fa-lock"></i> Logout </a> </li>
                        </ul>
                    </li>

                </ul>
            </div>
            <!--notification menu end -->

        </div>
        <!-- header section end-->



        <!--body wrapper start-->
        <div class="wrapper">
              
              <!--Start Page Title-->
               <div class="page-title-box">
                    <h4 class="page-title">Chat</h4>
                    <ol class="breadcrumb">
                        <li>
                            <a href="#">Dashboard</a>
                        </li>
                        <li>
                            <a href="#">Pages</a>
                        </li>
                        <li class="active">
                            Chat
                        </li>
                    </ol>
                    <div class="clearfix"></div>
                 </div>
                  <!--End Page Title-->          
           
                 <!--Start row-->
                 <div class="row">
                     <div class="col-md-12">
                        <!-- Start cover-->
                         <div class="profile-cover">
                             <div class="overlay-profile"></div>
                              <div class="profile-inner">
                                  <div class="profile-info">
                                  
                                      <div class="profile-media">
                                         <img src="assets/images/profile-picture.png" alt="" />
                                      </div>
                                      
                                      <div class="profile-intro">
                                        <h4>Dave Gomache</h4>
                                        <p>Web & User Interface Designer</p>
                                        <ul>
                                           <li> <i class="fa fa-map-marker"></i> Melbourne, Australia   </li>
                                           <li> <i class="fa fa-envelope-o"></i> example@mail.com   </li>
                                        </ul>
                                      </div>
                                      
                                  </div> <!--/.profile-info-->
                                  
                                  <div class="profile-stats">
                                      <ul>
                                      
                                         <li>
                                            <h4>1032</h4>
                                            <p>Friends</p>
                                         </li>
                                      
                                         <li>
                                            <h4>1232</h4>
                                            <p>Photos</p>
                                         </li>

                                         <li>
                                            <h4>2345</h4>
                                            <p>Followers</p>
                                         </li>
                                         
                                      </ul>
                                  </div>
                                  
                                  
                              </div>
                         </div>    
                         <!-- End cover-->
                         
                     </div>
                 </div>
                 <!--End row-->
           

              <!--Start row-->
              <div class="row">
                  <div class="col-md-8">
                    <div class="white-box">
                        <form>
                           <div class="form-group">
                               <textarea rows="2" class="form-control" placeholder="Post a new message"></textarea>
                           </div>
                           
                           <input type="submit" value="Post" class="btn btn-primary pull-right">
                           
                            <ul class="nav nav-pills m-t-20 post-list">
                                <li>
                                    <a href="#"><i class="fa fa-user"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-location-arrow"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class=" fa fa-camera"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-smile-o"></i></a>
                                </li>
                            </ul>
                           
                        </form>
                    </div> <!--/.hite-box-->
                                      
                      <div class="white-box">
                          <div class="post-header">
                          <div class="post-author-media">
                              <img src="assets/images/profile-picture.png"  alt="">
                          </div>
                          
                          <div class="post-author">
                            <h4>Christopher palmer <span>Posted a Status</h4>
                            <p>5 hours ago</p>
                          </div>
                          </div> <!-- /.post-header-->
                          
                          <div class="post-desc">
                              <p>Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.</p>
                          </div>
                          
                          <div class="comment-info">
                              <ul>
                                <li> <a href="#"><i class="fa fa-thumbs-up"></i> Like (7)</a></li>
                                <li> <a href="#"><i class="fa fa-comment"></i> Comment (2)</a></li>
                                <li> <a href="#"><i class="fa fa-comment"></i> Share (4)</a></li>
                              </ul>
                          </div>
                         
                         
                         <div class="timeline-comment">
                             <img src="assets/images/profile-picture.png"  alt="">
                             <span>Jonathan Doe <small class="text-light">3 hours ago</small></span>
                             <div class="comment-text">
                                 <p>Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                             </div>
                         </div> <!--/.timeline-comment-->
                         
                         <div class="timeline-comment">
                             <img src="assets/images/profile-picture.png"  alt="">
                             <span>Jonathan Doe <small class="text-light">3 hours ago</small></span>
                             <div class="comment-text">
                                 <p>Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                             </div>
                         </div> <!--/.timeline-comment-->
                         
                          <textarea class="form-control" placeholder="Replay"></textarea>
                          
                      </div><!-- /.white-box-->
                      
                   
                      <div class="white-box">
                          <div class="post-header">
                          <div class="post-author-media">
                              <img src="assets/images/profile-picture.png"  alt="">
                          </div>
                          
                          <div class="post-author">
                            <h4>Christopher palmer <span>Posted a Status</h4>
                            <p>5 hours ago</p>
                          </div>
                          </div> <!-- /.post-header-->
                          
                          <div class="post-desc">
                              <p>Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.</p>
                          </div>
                          
                          <div class="comment-info">
                              <ul>
                                <li> <a href="#"><i class="fa fa-thumbs-up"></i> Like (7)</a></li>
                                <li> <a href="#"><i class="fa fa-comment"></i> Comment (2)</a></li>
                                <li> <a href="#"><i class="fa fa-comment"></i> Share (4)</a></li>
                              </ul>
                          </div>
                         
                         
                         <div class="timeline-comment">
                             <img src="assets/images/profile-picture.png"  alt="">
                             <span>Jonathan Doe <small class="text-light">3 hours ago</small></span>
                             <div class="comment-text">
                                 <p>Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                             </div>
                         </div> <!--/.timeline-comment-->
                         
                          <textarea class="form-control" placeholder="Replay"></textarea>
                          
                      </div><!-- /.white-box-->
                                            
                  </div> <!--/.col-md-8-->
                  
                  
                  <div class="col-md-4">
                      <div class="white-box">
                        <h2 class="header-title">Skills</h2>
                            <p>HTML5</p>
                            <div class="progress progress-xs">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                </div>
                            </div>
                            <p>PHP</p>
                            <div class="progress progress-xs">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                </div>
                            </div>
                            <p>Javascript</p>
                            <div class="progress progress-xs">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                </div>
                            </div>
                      </div> <!--/.white-box-->
                      
                      
                      <div class="white-box">
                        <h2 class="header-title">About</h2
                        ><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae neque incidunt cumque, dolore eveniet porro asperiores itaque! Eligendi minus cupiditate molestiae praesentium, facilis, neque saepe, soluta sapiente aliquid modi sunt.</p>
                      </div> <!--/.white-box-->
                      
                      <div class="white-box">
                        <h2 class="header-title">Team Members</h2>
                       <div class="friend-list">
                          <ul>
                            <li> <a href="" >  <img src="assets/images/users/avatar-1.jpg"  alt="friend"/> </a> </li>
                            <li> <a href="" >  <img src="assets/images/users/avatar-2.jpg"  alt="friend"/> </a> </li>
                            <li> <a href="" >  <img src="assets/images/users/avatar-3.jpg"  alt="friend"/> </a> </li>
                             <li> <a href="" >  <img src="assets/images/users/avatar-4.jpg"  alt="friend"/> </a> </li>
                             <li> <a href="" >  <img src="assets/images/users/avatar-5.jpg"  alt="friend"/> </a> </li>
                             <li> <a href="" >  <img src="assets/images/users/avatar-6.jpg"  alt="friend"/> </a> </li>
                             <li> <a href="" >  <img src="assets/images/users/avatar-7.jpg"  alt="friend"/> </a> </li>
                             <li> <a href="" >  <img src="assets/images/users/avatar-8.jpg"  alt="friend"/> </a> </li>
                          </ul>
                       </div>
                      </div> <!--/.white-box-->
                      
                      
                  </div> <!--/.col-md-4-->
                  
                  
                  
                  
              </div>
              <!--End row-->
           
           
           
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
    
    <!--Begin Page Level Plugin-->
    <!--End Page Level Plugin-->
   

</body>

</html>
<?php }else{ header('location:login.php');} ?>