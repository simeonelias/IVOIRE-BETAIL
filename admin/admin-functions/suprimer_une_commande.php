<?php 
function suprimer_une_commande()
{

}  if (isset($_GET['suprimer'])) {
    $del = $db->prepare("DELETE FROM user_commande WHERE id=:id");
    $del->execute(['id'=>$_GET['suprimer']]);
  }


 ?>