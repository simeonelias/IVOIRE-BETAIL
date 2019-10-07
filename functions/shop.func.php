<?php


 class shop
{


	private $nbre_par_page=18;
	private $p = 0;
	private $type;
	function __construct()
	{
		
	}

	public function products(){
		global $db;
		global $mot;

		if (isset($_GET['p'])) {
			$this->p=$_GET['p'];
		}else{
			$this->p=1;
		}
		 $offset =($this->nbre_par_page * ($this->p-1));

		$data =[];
		if (isset($_POST['search'])) {
			$mot = trim($_POST['recherche']);
		  $requete = $db->query("SELECT * FROM product WHERE name LIKE '%$mot%' ");

		}

		elseif (isset($_GET['type']) && !empty($_GET['type'])) {
			$this->type = $_GET['type'];
			
			
			$requete = $db->query("
		SELECT
			
			product.id,
			product.name,
			product.img,
			product.price,
			product.type_id,
			product.provider_id,
			product.description,
			type.id,
			type.category_id,
			type.type,
			provider.id,
			provider.name,
			provider.ville,
			provider.contact
			
		FROM product
		JOIN type ON product.type_id=type.id
		JOIN provider ON provider.id = product.provider_id
		WHERE type.type='{$_GET['type']}' ");
}

		else{
			$requete = $db->query("SELECT * FROM product LIMIT $offset,$this->nbre_par_page");

		}
			
		while ($results = $requete->fetchObject()) {
		$data[] = $results;
		}
		return $data;
	  
    }

    public function compter(){
    	global $db;
    	$requete = $db->query("SELECT name FROM product ");
    	$res=$requete->rowCount();

    	$nbre_page = (int) round($res/$this->nbre_par_page);
    	return $nbre_page;
    }




}



$init = new shop();

 ?>