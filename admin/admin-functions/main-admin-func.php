<?php
include '../functions/base.php';

function liste_de_produits(){
	global $db; 
	$results = [];

	$req = $db->query("SELECT * FROM product");
	while($rows = $req->fetchObject()){
		$results[]=$rows;
	}

	return $results;
}



function liste_users(){
	global $db; 
	$results = [];

	$req = $db->query("SELECT * FROM user");
	while($rows = $req->fetchObject()){
		$results[]=$rows;
	}

	return $results;
}



function liste_partenaire(){
	global $db; 
	$results = [];

	$req = $db->query("SELECT * FROM partenaire");
	while($rows = $req->fetchObject()){
		$results[]=$rows;
	}

	return $results;
}


function is_login()

{

	if(isset($_SESSION['admin']) && $_GET['id']){
		return true; 
	}else{
		
		header('location: login.php');
	}
}

function commande_a_livrer()
{
	global $db;
	$results = array();	
		
	$requete = $db->query("SELECT * FROM user_commande");
	

	while ($rows=$requete->fetchObject()) {
		$results[] = $rows;
	}
	return $results;
}

function liste_de_commande_non_valider()
{
	global $db;
	$results = array();	
		
	$requete = $db->query("SELECT * FROM user_commande WHERE valider=0");
	

	while ($rows=$requete->fetchObject()) {
		$results[] = $rows;
	}
	return $results;
}


function commande_a_livrer_detail()
{
			global $db;
			
			
		$requete = $db->query("
		SELECT
			
			user_commande.id,
			user_commande.name,
			user_commande.prenom,
			user_commande.numero,
			user_commande.commune,
			user_commande.date,
			user_commande.ville,
			user_commande.code_commande,
			commande.id,
			commande.user_id,
			commande.nom,
			commande.quantite,
			commande.prix,
			commande.prix_unitaire
			
		FROM user_commande
		JOIN commande ON user_commande.id=commande.user_id
		WHERE user_commande.id='{$_GET['commande']}' ");
		


	$results = array();

	while ($rows=$requete->fetchObject()) {
		$results[] = $rows;
	}
	return $results;
}






?>