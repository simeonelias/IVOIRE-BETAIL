<?php

$nom=$description=$image=$type=$fournisseur=$prix="";

$nomEr=$descriptionEr=$imageEr=$prixEr=$fournisseurEr=$success="";
$error = array();


if(isset($_POST['modifier'])){

$id = $_GET['produit'];

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

                    $insert = $db->prepare("UPDATE product SET name=?,description=?,type_id=?,price=?,img=? WHERE id=?");

                    $insert->execute([$nom,$description,$type,$prix,$img_name,$id]);

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