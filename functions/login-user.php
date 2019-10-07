<?php
include 'base.php';

if(isset($_POST['connecter'])){

    $numero = $_POST['numero'];
    $password = sha1($_POST['password']);



if ($numero && $password) {
   

    $requete = $db->prepare("SELECT * FROM user WHERE numero=? AND password=?");

    $requete->execute([$numero,$password]);

    $data = $requete->fetch();
    // var_dump($data);

    if($requete->rowCount()==1){

        if (!$_SESSION) {
           session_start();
        }

        $_SESSION['admin'] = $data['id'];
        $_SESSION['user_name'] = ucfirst($data['prenom']);

        $_SESSION['msg_success']="Vous etes connecté!"; 

        header('location:profile.php?id='.$_SESSION['admin']);
   

    }else{

        $_SESSION['error'] ="ce compte n'existe pas!";

    } 
}else{
        $_SESSION['error'] ="tous les champs ne sont remplis!";

}



}

?>