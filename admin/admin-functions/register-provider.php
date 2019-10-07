<?php

function enregistrement_partenaire(){

global $db;
global $error_user;
global $success_user;
$nom=$lieu=$contact=$type="";


if(isset($_POST['submit'])){
    


    if(!empty($_POST['lieu'])){
        
        $lieu = htmlspecialchars(trim($_POST['lieu']));
    }else{

        $error_user = "Veuillez votre  nom!";
    }

    if(!empty($_POST['nom'])){

        $nom = htmlspecialchars(trim($_POST['nom']));
    }else{

        $error_user = "Veuillez saisir le nom!";
    }

    if(!empty($_POST['contact'])){

        $contact = htmlspecialchars(trim($_POST['contact']));
    }else{

        $error_user = "Veuillez saisir votre contact!";
    }


    if(!empty($_POST['type'])){

        $type = htmlspecialchars(trim($_POST['type']));

    }else{

        $error_user = "Veuillez saisir le type!";
    }    


    if ($nom && $lieu && $contact && $type) {
        
               $insert = $db->prepare("INSERT INTO partenaire(nom,lieu,contact,type) VALUES(?,?,?,?)");
        
       $insert->execute([$nom,$lieu,$contact,$type]);
        
       if($insert){

           $success_user ="enregistrement effectué avec succes!";
           

       }else{

           echo "echec"; 

       }
    
    }else{
        $error_user = "tous les chmaps doivent être remplis";
    }

    

}

}

?>