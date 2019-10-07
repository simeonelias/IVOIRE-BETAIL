<?php

function enregistrement_visiteur(){

global $db;

$nom=$prenom=$numero=$commune=$password=$confirm_password="";

// $nomEr=$prenomEr=$numeroEr=$communeEr=$passwordEr=="";
global $error_user;
global $success_user;

if(isset($_POST['envoyer'])){
     $serie = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyzO123456789";
    $code = date("his")."-".substr(str_shuffle(str_repeat($serie,2)), 0,2);

    // $id=$_GET['id'];

    if(!empty($_POST['prenom'])){
        
        $prenom = htmlspecialchars(trim($_POST['prenom']));
    }else{

        $error_user = "Veuillez votre  nom!";
    }

    if(!empty($_POST['nom'])){

        $nom = htmlspecialchars(trim($_POST['nom']));
    }else{

        $error_user = "Veuillez saisir le nom!";
    }

    if(!empty($_POST['numero'])){

        $numero = htmlspecialchars(trim($_POST['numero']));
    }else{

        $error_user = "Veuillez saisir votre numero!";
    }


    if(!empty($_POST['commune'])){

        $commune = htmlspecialchars(trim($_POST['commune']));

    }else{

        $error_user = "Veuillez saisir le commune!";
    }    

    if(!empty($_POST['password'])){

        $password = sha1($_POST['password']);

    }else{

        $error_user = "Veuillez saisir le password!";
    }    

    if(!empty($_POST['confirm_password'])){

        $confirm_password = sha1($_POST['confirm_password']);

    }else{

        $error_user = "Veuillez saisir le confirm_password!";
    }

    if ($nom && $prenom && $numero && $commune && $password && $confirm_password) {
        if ($password == $confirm_password) {
               $insert = $db->prepare("INSERT INTO user(name,prenom,numero,commune,date,password) VALUES(?,?,?,?,now(),?)");
        
       $insert->execute([$nom,$prenom,$numero,$commune,$password]);
        // $last_id = $db->lastInsertId();

       if($insert){

           $success_user ="enregistrement effectué avec succes!";
           

       }else{

           echo "echec"; 

       }
    }else{
        $error_user = "les mots de passes ne sont pas identiques!";
    }
    }else{
        $error_user = "tous les chmaps doivent être remplis";
    }

    

}

}

?>