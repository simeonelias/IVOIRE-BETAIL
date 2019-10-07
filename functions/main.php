<?php
require 'base.php';
require 'shop.func.php';
require 'panier.func.php';


function get_products(){
	global $db;
	$results = [];
 
	$req = $db->query("SELECT * FROM product ORDER BY date DESC limit 6");
	while($rows = $req->fetchObject()){
		$results[]=$rows;
	}

	return $results;
}

function product_detail()
	{
        global $db;
		$requete = $db->query("SELECT * FROM product WHERE id = {$_GET['id']}");
		$results=$requete->fetchObject();

		return $results;
		
	}

function preparation_panier()
{
    global $db;

	$id = array_keys($_SESSION['panier']);
	$ids = implode(',', $id);
	if (empty($ids)) {
		
	$res=array();
	}else{
	$products = $db->query("SELECT * FROM product WHERE id IN ($ids)");
	$res=$products->fetchAll(PDO::FETCH_OBJ);
	}

	return $res;
}


function enregistrement_user(){

global $db;

$nom=$prenom=$contact=$ville=$commune=$password=$confirm_password="";

// $nomEr=$prenomEr=$contactEr=$communeEr=$passwordEr=="";
global $error_user;
global $success_user;

if(isset($_POST['envoi_commande'])){
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

    if(!empty($_POST['contact'])){

        $contact = htmlspecialchars(trim($_POST['contact']));
    }else{

        $error_user = "Veuillez saisir votre contact!";
    }

    if(!empty($_POST['ville'])){

        $ville = htmlspecialchars(trim($_POST['ville']));
    }else{

        $error_user = "Veuillez saisir le ville!";

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

    if ($nom && $prenom && $contact && $ville && $commune && $password && $confirm_password) {
    	if ($password == $confirm_password) {
    	       $insert = $db->prepare("INSERT INTO user_commande(name,prenom,numero,ville,commune,date,code_commande,password) VALUES(?,?,?,?,?,now(),?,?)");
		
       $insert->execute([$nom,$prenom,$contact,$ville,$commune,$code,$password]);
		// $last_id = $db->lastInsertId();
       if($insert){

           $success_user ="enregistrement effectué avec succes! VOUS SEREZ CONTACTE PAR UN SERVICE CLIENT";

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




// function is_login()
// {
//     if(isset($_SESSION['user']) && $_GET['user']){
//         return true;
//     }else{
        
//         header('location: login.php');
//     }
// }

function historique(){
    global $db;
        $requete = $db->query("SELECT * FROM user WHERE id = {$_GET['id']}");
        $results=$requete->fetchObject();

        return $results;
}




    
?>