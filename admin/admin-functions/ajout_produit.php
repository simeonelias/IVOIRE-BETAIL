<?php

$nom=$description=$image=$type=$fournisseur=$prix="";

$nomEr=$descriptionEr=$imageEr=$prixEr=$fournisseurEr=$success="";
$error = array();
$id = $_GET['id'];

if(isset($_POST['ajouter'])){

    // $id=$_GET['id'];

    // if(!empty($_POST['fournisseur'])){
        
    //     $fournisseur = $_POST['fournisseur'];

    // }else{

    //     $error = "Veuillez votre  nom!";

    // }

    if(!empty($_POST['nom'])){

        $nom = $_POST['nom'];

    }else{

        $error = "Veuillez saisir le nom!";

    }

    if(!empty($_POST['description'])){

        $description = $_POST['description'];

    }else{

        $error = "Veuillez saisir votre description!";

    }

    if(!empty($_POST['type'])){

        $type = $_POST['type'];

    }else{

        $errorr = "Veuillez saisir le type!";

    }

    if(!empty($_POST['prix'])){

        $prix = $_POST['prix'];

    }else{

        $error = "Veuillez saisir le prix!";

    }

    if(!empty($_FILES['image'])){

        $image = $_FILES['image'];

    }else{

        $error = "Veuillez selectionner une image";

    }

  

    $repertoire ="../images/home/";

    

    if(!file_exists($repertoire)){

        mkdir($repertoire);

    }

    $target_file =basename($_FILES["image"]["name"]);

    $img_name= strtolower($_FILES['image']['name']);

    $img_tmp = $_FILES['image']['tmp_name'];

    $img_ext = strchr($img_name,'.');

    $img_ext_aut = array('.jpeg','.png','.gif','.jpg');

  



    if(in_array($img_ext,$img_ext_aut)){



                if(move_uploaded_file($img_tmp,$repertoire.$target_file)){

                    $insert = $db->prepare("INSERT INTO product(name,description,type_id,price,provider_id,date,img) VALUES(?,?,?,?,?,now(),?)");

                    $insert->execute([$nom,$description,$type,$prix,$id,$img_name]);

                    if($insert){

                        $success ="enregistrement effectué avec succes!";

                    }else{

                        echo "echec";

                    }

                }

  

    }else{

        $error = "Seules les extensions jgp, jpeg, gif et pnp sont autorisée!";

    }







}

?>