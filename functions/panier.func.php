<?php

/**
 * 
 */
class panier
{
	
	public function __construct()
	{
		if(!isset($_SESSION)){
			session_start();
		}

		if(!isset($_SESSION['user'])){
			$_SESSION['user'] = array();
		}

		if(!isset($_SESSION['panier'])){
			$_SESSION['panier'] = array();
		}

		if(isset($_POST['panier']['quantity'])){
			$this->update();
		}


		// if (!isset($_GET['del'])) {
		// 	$this->del($_GET['del']);
		// }
	}


	public function update()
	{

		$_SESSION['panier']=$_POST['panier']['quantity'];
	}

	public function add($product_id)
	{	
		if (isset($_SESSION['panier'][$product_id])) {
			$_SESSION['panier'][$product_id]++;

		}else{
			$_SESSION['panier'][$product_id] = 1;
		}

	}



	public function total()
	{	
		global $db;
		$total = 0;
		$quantity=0;
		$id = array_keys($_SESSION['panier']);
		$ids = implode(',', $id);
		if (empty($ids)) {
	
			$res=array();
		}else{
			$product = $db->query("SELECT * FROM product WHERE id IN ($ids)");
			$res = $product->fetchAll(PDO::FETCH_OBJ);
		}

		foreach ($res as $product) {

			$total += $product->price * $_SESSION['panier'][$product->id];
		}


		return $total;
	}


	// enregistrement du panier en base de donnees

	public function commander($user_id, $nom, $qte, $prix_unitaire, $prix)
	{
		global $db;
		if (isset($_POST['envoi_commande'])) {
		
		
		// if ($user_id && $nom && $qte && $prix && $prix_total) {
			$requete = $db->prepare("INSERT INTO commande(user_id,nom,quantite,prix_unitaire,prix) VALUES(?,?,?,?,?)");
			$requete->execute([$user_id,$nom, $qte,$prix_unitaire, $prix]);
		// }
		
		}
	}





	public function count()
	{
		return array_sum($_SESSION['panier']);
	}

	public function del($product_id)
	{	
		unset($_SESSION['panier'][$product_id]);
	}




}

 $cart = new panier();

?>