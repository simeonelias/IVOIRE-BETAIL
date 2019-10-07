<?php
include '../functions/base.php';
// $_SESSION['msg_error'] = "Vous devez vous connecter pour acceder a cette page";
$email = $password ="";

$emailEr=$passwordEr=$error="";


if(isset($_POST['submit'])){



    if(!empty($_POST['email'])){

        $email = $_POST['email'];

    }else{

        $error = "Votre email est requis!";

    }

    if(!empty($_POST['password'])){

        $password = $_POST['password'];

    }else{

        $error = "Veuillez entrer un mot de passe!";

    }





    $requete = $db->prepare("SELECT * FROM provider WHERE email=? AND password=?");

    $requete->execute([$email,$password]);

    $data = $requete->fetch();
    // var_dump($data);

    if($requete->rowCount()==1){
        if (!$_SESSION) {
           session_start();
        }

        $_SESSION['admin'] = $data['id'];
        $_SESSION['msg_success']="Vous etes connecté!"; 

        header('location:index.php?id='.$_SESSION['admin']);

    }else{

        $error ="ce compte n'existe pas!";

    }

}

?>