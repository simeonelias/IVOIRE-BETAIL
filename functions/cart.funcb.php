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

		if(!isset($_SESSION['panier'])){
			$_SESSION['panier'] = array();
		}

		// if (!isset($_GET['del'])) {
		// 	$this->del($_GET['del']);
		// }
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