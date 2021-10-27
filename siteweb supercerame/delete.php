<?php 
  include 'class/connecter.php';
  include 'class/produit.php';
  $pr=new produit("","","","",0,0,0,0,"");
$id=$_REQUEST['title'];
if($id!=null)
$pr->supprimer($id);
echo("<script> alert('ee')';</script>");
echo("<script> window.location.href='voir-product.php';</script>");
?>