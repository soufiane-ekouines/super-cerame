<?php
class commande{
  private string $id;
  private int $qte;
  private DateTime $date;
  private string $cin;
  private string $title_produit;
  public function __construct($qte,$cin,$title_produit)
  {
    $this->qte=$qte;
    $this->cin=$cin;
    $this->title_produit=$title_produit;
  }

public function delete($id)
{
  $con=new connecter("super_cerame");
  $query="delete from commande where idCommande=".$id;
  if(mysqli_query($con->con,$query))
  {

  }
}

  public function select()
  {
    $rows=null;
    $con=new connecter("super_cerame");
    $query="select * from commande";
    if($sql=$con->con->query($query))
    {
      while($row=mysqli_fetch_assoc($sql))
        $rows[]=$row;
    }
      return $rows;
  }

  
  public function cherche($id)
  {
    $rows=null;
    $con=new connecter("super_cerame");
    $query="select * from commande where idCommande like'$id%'";
    if($sql=$con->con->query($query))
    {
      while($row=mysqli_fetch_assoc($sql))
        $rows[]=$row;
    }
      return $rows;
  }


}
?>