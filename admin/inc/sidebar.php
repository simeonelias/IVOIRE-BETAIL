<ul class="nav nav-pills nav-stacked custom-nav">
                <li class="nav-active"><a href="index.php?id=<?= $_SESSION['admin'];?>"><i class="icon-home"></i> <span>Tableau de bord</span></a>
                </li>

                <li class="menu-list"><a href="#"><i class="icon-layers"></i> <span>Gestion des commandes</span></a>
                    <ul class="sub-menu-list">
                        <!--<li><a href="commandes.php"> commandes</a></li>-->
                        <li><a href="commandes_livrer.php?id=<?= $data['id']?>">Commandes à livrer</a></li>
                        <!-- <li><a href="facture.php?id=<?= $_SESSION['admin'];?>">Editer une facture</a></li> -->

                    </ul>
                </li>
                
                <li class="menu-list"><a href="#"><i class="icon-grid"></i> <span>Produits</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="liste_des_produits.php?id=<?= $_SESSION['admin'];?>">Liste des produits</a></li>
                        <li><a href="ajouter_un_produit.php?id=<?= $_SESSION['admin'];?>">Ajouter un Produit</a></li>
                    </ul>
                </li>

                <li class="menu-list"><a href="#"><i class="icon-envelope-open"></i> <span>Mail</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="inbox.php?id=<?= $_SESSION['admin'];?>"> Inbox</a></li>
                        <li><a href="compose_mail.php?id=<?= $_SESSION['admin'];?>"> Compose Mail</a></li>
                        <li><a href="view_mail.php"> View Mail</a></li>
                    </ul>
                </li>

                <li class="menu-list"><a href="#"><i class="icon-loop"></i> <span>Partenaires</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="liste_des_partenaires.php?id=<?= $_SESSION['admin'];?>">Liste des partenaires</a></li>
                        <li><a href="ajouter_un_partenaire.php?id=<?= $_SESSION['admin'];?>">Ajouter un partenaire</a></li>
                        <!--<li><a href="modifier.html">Modifier</a></li>-->
                    </ul>
                </li>          
                <li><a href="calendar.php?id=<?= $_SESSION['admin'];?>"><i class="icon-note"></i> <span>Calendar</span></a></li>
                <li class="menu-list"><a href="#"><i class="icon-location-pin"></i> <span>Maps</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="google-map.php"> Google Map</a></li>
                        <li><a href="vector-map.php"> Vector Map</a></li>
                    </ul>
                </li>
                <li class="menu-list"><a href="#"><i class="icon-folder"></i> <span>Extra Pages</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="faq.php"> FAQ</a></li>
                        <li><a href="profile.php?id=<?= $_SESSION['admin'];?>"> Profile</a></li>            
                    </ul>
                </li>
                <li class="menu-list"><a href="#"><i class="icon-lock"></i> <span>Login</span></a>
                    <ul class="sub-menu-list">
                       <li><a href="login.php"> Login </a></li>
                       <li><a href="forgot-password.php"> Forgot Password </a></li>
                        <li><a href="registration.php"> Registration </a></li>
                        <!-- <li><a href="lockscreen.php"> Lockscreen </a></li> -->
                    </ul>
                </li>

            </ul>