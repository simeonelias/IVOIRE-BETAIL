<?php
include 'panier.func.php';
require 'base.php';
$result=[];

if (isset($_GET['id'])) {
	$product = $db->prepare("SELECT id FROM product WHERE id=:id");
	$product->execute(['id'=>$_GET['id']]);
	$res=$product->fetchObject();

	if (empty($res)) {
		$result['err'] = 'aucun resultat';
	}else{
		$cart->add($res->id);
		
		$result['msg'] = 'le produit a été ajouté au panier avec succès!';
		$result['total'] = $cart->total();
		$result['count'] = $cart->count();
	}

}else{
	$result['err'] = 'vous n\'avez rien selectionné';
} 

echo json_encode($result);

?>






