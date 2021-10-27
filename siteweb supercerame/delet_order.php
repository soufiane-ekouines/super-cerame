<?php 
  include 'class/connecter.php';
  include 'class/commande.php';
  $cmd=new commande(22,"","");
$id=$_REQUEST['id'];
 if($id!=null)
$cmd->delete($id);
echo("<script> alert('ee')';</script>");
echo("<script> window.location.href='orders.php';</script>");
?>