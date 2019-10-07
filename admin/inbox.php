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
                    <h4 class="page-title">Inbox</h4>
                    <ol class="breadcrumb">
                        <li>
                            <a href="#">Dashboard</a>
                        </li>
                        <li>
                            <a href="#">Email</a>
                        </li>
                        <li class="active">
                            Inbox
                        </li>
                    </ol>
                    <div class="clearfix"></div>
                 </div>
                  <!--End Page Title-->          
           
           
                  <!--Start row-->
                  <div class="row">
                      <div class="col-md-12">
                          
                          <div class="row">  
                          <div class="col-md-3">
                              <a href="compose.html" class="btn btn-primary outline-btn btn-block m-b-10">Compose</a>
                              <ul class="list-unstyled mailbox-nav">
                                <li class="active"><a href="inbox.html"><i class="fa fa-inbox"></i>Inbox 
                                <span class="badge badge-success">4</span></a></li>
                                <li><a href="#"><i class="fa fa-sign-out"></i>Sent</a></li>
                                <li><a href="#"><i class="fa fa-file-text-o"></i>Draft</a></li>
                                <li><a href="#"><i class="fa fa-exclamation-circle"></i>Spam</a></li>
                                <li><a href="#"><i class="fa fa-trash"></i>Trash</a></li>
                              </ul>
                        </div>
                        
                         <div class="col-md-9">
                         <div class="white-box">
                            <div class="mailbox-content">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th colspan="1" class="hidden-xs">
                                          <div class="checkbox">
                                             <input type="checkbox" class="check-mail-all">
                                              <label></label>
                                            </div>
                                        </th>
                                        <th class="text-right" colspan="5">
                                            <a class="btn btn-primary outline-btn m-r-10"  title="Refresh"><i class="fa fa-refresh"></i></a>
                                            
                                            <div class="btn-group m-r-sm mail-hidden-options">
                                                <div class="btn-group">
                                                    <a class="btn btn-primary outline-btn  m-r-10 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-folder"></i> <span class="caret"></span></a>
                                                    <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                                        <li><a href="#">Social</a></li>
                                                        <li><a href="#">Forums</a></li>
                                                        <li><a href="#">Updates</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="#">Spam</a></li>
                                                        <li><a href="#">Trash</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="#">New</a></li>
                                                    </ul>
                                                </div>
                                                <div class="btn-group">
                                                    <a class="btn btn-primary outline-btn dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tags"></i> <span class="caret"></span></a>
                                                    <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                                        <li><a href="#">Work</a></li>
                                                        <li><a href="#">Family</a></li>
                                                        <li><a href="#">Social</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="#">Primary</a></li>
                                                        <li><a href="#">Promotions</a></li>
                                                        <li><a href="#">Forums</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="unread">
                                        <td class="hidden-xs">
                                           <div class="checkbox">
                                             <input type="checkbox" class="checkbox-mail" >
                                              <label></label>
                                            </div>
                                        </td>
                                        <td class="hidden-xs">
                                            <i class="fa fa-star icon-state-warning"></i>
                                        </td>
                                        <td class="hidden-xs">
                                            Jacob
                                        </td>
                                        <td>
                                            There are many variations of passages of Lorem Ipsum </td>
                                        <td>
                                        </td>
                                        <td>
                                            21 march
                                        </td>
                                    </tr>
                                    <tr class="unread">
                                        <td class="hidden-xs">
                                           <div class="checkbox">
                                             <input type="checkbox" class="checkbox-mail" >
                                              <label></label>
                                            </div>
                                        </td>
                                        <td class="hidden-xs">
                                            <i class="fa fa-star icon-state-warning"></i>
                                        </td>
                                        <td class="hidden-xs">
                                            Mark Doe
                                        </td>
                                        <td>
                                            Lorem Ipsum is simply dummy text of the and typesetting
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                            20 march
                                        </td>
                                    </tr>
                                    <tr class="unread">
                                        <td class="hidden-xs">
                                           <div class="checkbox">
                                             <input type="checkbox" class="checkbox-mail" >
                                              <label></label>
                                            </div>
                                        </td>
                                        <td class="hidden-xs">
                                            <i class="fa fa-star icon-state-warning"></i>
                                        </td>
                                        <td class="hidden-xs">
                                            Adobe
                                        </td>
                                        <td>
                                            There are many variations of passages of Lorem Ipsum </td>
                                        <td>
                                            <i class="fa fa-paperclip"></i>
                                        </td>
                                        <td>
                                            18 march
                                        </td>
                                    </tr>
                                    <tr class="unread">
                                        <td class="hidden-xs">
                                           <div class="checkbox">
                                             <input type="checkbox" class="checkbox-mail" >
                                              <label></label>
                                            </div>
                                        </td>
                                        <td class="hidden-xs">
                                            <i class="fa fa-star icon-state-warning"></i>
                                        </td>
                                        <td class="hidden-xs">
                                            Apple
                                        </td>
                                        <td>
                                            Lorem Ipsum is simply dummy text of the and typesetting
                                        </td>
                                        <td>
                                            <i class="fa fa-paperclip"></i>
                                        </td>
                                        <td>
                                            16 Oct</td>
                                    </tr>
                                    <tr class="read">
                                        <td class="hidden-xs">
                                           <div class="checkbox">
                                             <input type="checkbox" class="checkbox-mail" >
                                              <label></label>
                                            </div>
                                        </td>
                                        <td class="hidden-xs">
                                            <i class="fa fa-star"></i>
                                        </td>
                                        <td class="hidden-xs">
                                            Marry
                                        </td>
                                        <td>
                                            There are many variations of passages of Lorem Ipsum </td>
                                        <td>
                                            <i class="fa fa-paperclip"></i>
                                        </td>
                                        <td>
                                            12 June</td>
                                    </tr>
                                    <tr class="unread">
                                        <td class="hidden-xs">
                                           <div class="checkbox">
                                             <input type="checkbox" class="checkbox-mail" >
                                              <label></label>
                                            </div>
                                        </td>
                                        <td class="hidden-xs">
                                            <i class="fa fa-star"></i>
                                        </td>
                                        <td class="hidden-xs">
                                            Marry
                                        </td>
                                        <td>
                                            Lorem Ipsum is simply dummy text of the and typesetting
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                            12 June</td>
                                    </tr>
                                    <tr class="read">
                                        <td class="hidden-xs">
                                           <div class="checkbox">
                                             <input type="checkbox" class="checkbox-mail" >
                                              <label></label>
                                            </div>
                                        </td>
                                        <td class="hidden-xs">
                                            <i class="fa fa-star"></i>
                                        </td>
                                        <td class="hidden-xs">
                                            Marry
                                        </td>
                                        <td>
                                            There are many variations of passages of Lorem Ipsum </td>
                                        <td>
                                        </td>
                                        <td>
                                            20 April</td>
                                    </tr>
                                    <tr class="read">
                                        <td class="hidden-xs">
                                           <div class="checkbox">
                                             <input type="checkbox" class="checkbox-mail" >
                                              <label></label>
                                            </div>
                                        </td>
                                        <td class="hidden-xs">
                                            <i class="fa fa-star"></i>
                                        </td>
                                        <td class="hidden-xs">
                                            Marry
                                        </td>
                                        <td>
                                            Lorem Ipsum is simply dummy text of the and typesetting
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                            20 April</td>
                                    </tr>
                                    <tr class="unread">
                                        <td class="hidden-xs">
                                           <div class="checkbox">
                                             <input type="checkbox" class="checkbox-mail" >
                                              <label></label>
                                            </div>
                                        </td>
                                        <td class="hidden-xs">
                                            <i class="fa fa-star icon-state-warning"></i>
                                        </td>
                                        <td class="hidden-xs">
                                            Marry
                                        </td>
                                        <td>
                                            Lorem Ipsum is simply dummy text of the and typesetting
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                            20 April</td>
                                    </tr>
                                    <tr class="read">
                                        <td class="hidden-xs">
                                           <div class="checkbox">
                                             <input type="checkbox" class="checkbox-mail" >
                                              <label></label>
                                            </div>
                                        </td>
                                        <td class="hidden-xs">
                                            <i class="fa fa-star icon-state-warning"></i>
                                        </td>
                                        <td class="hidden-xs">
                                            Mark Doe
                                        </td>
                                        <td>
                                            There are many variations of passages of Lorem Ipsum </td>
                                        <td>
                                        </td>
                                        <td>
                                            20 April</td>
                                    </tr>
                                    <tr class="read">
                                        <td class="hidden-xs">
                                           <div class="checkbox">
                                             <input type="checkbox" class="checkbox-mail" >
                                              <label></label>
                                            </div>
                                        </td>
                                        <td class="hidden-xs">
                                            <i class="fa fa-star"></i>
                                        </td>
                                        <td class="hidden-xs">
                                            Mark Doe
                                        </td>
                                        <td>
                                            Lorem Ipsum is simply dummy text of the and typesetting
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                            20 April</td>
                                    </tr>
                                    <tr class="unread">
                                        <td class="hidden-xs">
                                           <div class="checkbox">
                                             <input type="checkbox" class="checkbox-mail" >
                                              <label></label>
                                            </div>
                                        </td>
                                        <td class="hidden-xs">
                                            <i class="fa fa-star"></i>
                                        </td>
                                        <td class="hidden-xs">
                                            Mark Doe
                                        </td>
                                        <td>
                                            There are many variations of passages of Lorem Ipsum </td>
                                        <td>
                                        </td>
                                        <td>
                                            20 April</td>
                                    </tr>
                                    <tr class="read">
                                        <td class="hidden-xs">
                                           <div class="checkbox">
                                             <input type="checkbox" class="checkbox-mail" >
                                              <label></label>
                                            </div>
                                        </td>
                                        <td class="hidden-xs">
                                            <i class="fa fa-star"></i>
                                        </td>
                                        <td class="hidden-xs">
                                            Zorita Serrano
                                        </td>
                                        <td>
                                            Lorem Ipsum is simply dummy text of the and typesetting
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                            20 April</td>
                                    </tr>
                                    <tr class="read">
                                        <td class="hidden-xs">
                                           <div class="checkbox">
                                             <input type="checkbox" class="checkbox-mail" >
                                              <label></label>
                                            </div>
                                        </td>
                                        <td class="hidden-xs">
                                            <i class="fa fa-star"></i>
                                        </td>
                                        <td class="hidden-xs">
                                            Zorita Serrano
                                        </td>
                                        <td>
                                            There are many variations of passages of Lorem Ipsum </td>
                                        <td>
                                        </td>
                                        <td>
                                            20 April</td>
                                    </tr>
                                    <tr class="uread">
                                        <td class="hidden-xs">
                                           <div class="checkbox">
                                             <input type="checkbox" class="checkbox-mail" >
                                              <label></label>
                                            </div>
                                        </td>
                                        <td class="hidden-xs">
                                            <i class="fa fa-star"></i>
                                        </td>
                                        <td class="hidden-xs">
                                            Williams
                                        </td>
                                        <td>
                                            Lorem Ipsum is simply dummy text of the and typesetting
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                            20 April</td>
                                    </tr>
                                    <tr class="read">
                                        <td class="hidden-xs">
                                           <div class="checkbox">
                                             <input type="checkbox" class="checkbox-mail" >
                                              <label></label>
                                            </div>
                                        </td>
                                        <td class="hidden-xs">
                                            <i class="fa fa-star"></i>
                                        </td>
                                        <td class="hidden-xs">
                                            Williams
                                        </td>
                                        <td>
                                            There are many variations of passages of Lorem Ipsum </td>
                                        <td>
                                        </td>
                                        <td>
                                            20 April</td>
                                    </tr>
                                    <tr class="read">
                                        <td class="hidden-xs">
                                           <div class="checkbox">
                                             <input type="checkbox" class="checkbox-mail" >
                                              <label></label>
                                            </div>
                                        </td>
                                        <td class="hidden-xs">
                                            <i class="fa fa-star icon-state-warning"></i>
                                        </td>
                                        <td class="hidden-xs">
                                            Williams
                                        </td>
                                        <td>
                                            Lorem Ipsum is simply dummy text of the and typesetting
                                        </td>
                                        <td>
                                            <i class="fa fa-paperclip"></i>
                                        </td>
                                        <td>
                                            20 April</td>
                                    </tr>
                                    <tr class="unread">
                                        <td class="hidden-xs">
                                           <div class="checkbox">
                                             <input type="checkbox" class="checkbox-mail" >
                                              <label></label>
                                            </div>
                                        </td>
                                        <td class="hidden-xs">
                                            <i class="fa fa-star"></i>
                                        </td>
                                        <td class="hidden-xs">
                                            Williams
                                        </td>
                                        <td>
                                            There are many variations of passages of Lorem Ipsum </td>
                                        <td>
                                        </td>
                                        <td>
                                            20 April</td>
                                    </tr>
                                    <tr class="read">
                                        <td class="hidden-xs">
                                           <div class="checkbox">
                                             <input type="checkbox" class="checkbox-mail" >
                                              <label></label>
                                            </div>
                                        </td>
                                        <td class="hidden-xs">
                                            <i class="fa fa-star"></i>
                                        </td>
                                        <td class="hidden-xs">
                                            Mark Doe
                                        </td>
                                        <td>
                                            Lorem Ipsum is simply dummy text of the and typesetting
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                            20 April</td>
                                    </tr>
                                    <tr class="read">
                                        <td class="hidden-xs">
                                           <div class="checkbox">
                                             <input type="checkbox" class="checkbox-mail" >
                                              <label></label>
                                            </div>
                                        </td>
                                        <td class="hidden-xs">
                                            <i class="fa fa-star"></i>
                                        </td>
                                        <td class="hidden-xs">
                                            Mark Doe
                                        </td>
                                        <td>
                                            There are many variations of passages of Lorem Ipsum </td>
                                        <td>
                                        </td>
                                        <td>
                                            20 April</td>
                                    </tr>
                                </tbody>
                            </table>
                            </div>
                            
                            <div class="col-md-12">    
                             <div class="row">
                              <div class="col-md-7"> Showing 1 - 15 of 200 </div>
                              <div class="col-md-5">
                                <div class="btn-group pull-right">
                                  <button type="button" class="btn btn-primary outline-btn m-r-5"><i class="fa fa-angle-left"></i></button>
                                  <button type="button" class="btn btn-primary outline-btn"><i class="fa fa-angle-right"></i></button>
                                </div>
                              </div>
                            </div>
                            </div>
                        
                        </div>
                        </div>
                      </div>
                      </div>
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

    <!-- BEGIN PAGE LEVEL SCRIPTS -->
	<script src="assets/pages/inbox.js"></script>
    <!-- BEGIN PAGE LEVEL SCRIPTS -->

</body>

</html>
