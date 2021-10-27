<?php
 
class produit{
  private string $title;
  private string $marque;
  private string $collection;
  private string $ajouter_par;
  private string $taille;
  private int $qte;
  private int $stock;
  private int $prix;
  private string $image;

 
  public function gettitle(){
    return $this->title;
  }
  public function getmarque(){
    return $this->marque;
  }
  public function getcollection(){
    return $this->collection;
  }
  public function getajouter_par(){
    return $this->ajouter_par;
  }
  public function gettaille(){
    return $this->taille;
  }
  public function getqte(){
    return $this->qte;
  }
 
  public function getstock(){
    return $this->stock;
  }

  public function getprix(){
    return $this->prix;
  }

  public function getimage(){
    return $this->image;
  }
  public function __construct($title,$marque,$collection,$ajouter_par,$taille,$qte,$stock,$prix,$image)
{
  $this->title=$title;
  $this->marque=$marque;
  $this->collection=$collection;
  $this->ajouter_par=$ajouter_par;
  $this->taille=$taille;
  $this->qte=$qte;
  $this->stock=$stock;
  $this->prix=$prix;
  $this->image=$image;
 }


 public function ajouter()
{
  $con=new connecter("super_cerame");
  $query="select * from produit where title='".$this->title."'";
  $select=mysqli_query($con->con,$query);
 if(mysqli_num_rows($select)>0)
         echo('<script> alert("dejat dans la liste")</script>');
   else
   {     
  $query="insert into produit (title,marque,collection_nom,ajouter_par,taille,qte,stock,prix,image) values ('$this->title','$this->marque','$this->collection','$this->ajouter_par','$this->taille',$this->qte,$this->stock,$this->prix,'$this->image')";
  // mysqli_query($con->con,$query);
   if($con->con->query($query))
   {
    echo("<script> alert('bien ajouter')</script>");
   }
   else
   echo("<script> alert('erreur')</script>");  
  }
  
 
  }


  public function lister($ferst,$laste)
  {
  $data=null;
  $con=new connecter("super_cerame");
  $query="select * from produit limit $ferst,$laste";
  if($sql=$con->con->query($query))
  {
  
    while($row=mysqli_fetch_assoc($sql))
    $data[]=$row;
  }
  return $data;
  }

  public function listerall()
  {
  $data=null;
  $con=new connecter("super_cerame");
  $query="select * from produit";
  if($sql=$con->con->query($query))
  {
  
    while($row=mysqli_fetch_assoc($sql))
    $data[]=$row;
  }
  return $data;
  }
  
  
  public function lister_objet($title)
  {
  $data=null;
  $con=new connecter("super_cerame");
  $query="select * from produit where title='".$title."'";
  if($sql=$con->con->query($query))
  {
  
    $row=mysqli_fetch_assoc($sql);
    $data=$row;
  }
  return $data;
  }
  
  public function nbrrws()
  {
  $con=new connecter("super_cerame");
  $query="select * from produit";
  $mysqlquery=mysqli_query($con->con,$query);
  $total=mysqli_num_rows($mysqlquery);
  return $total;
  }
    
  public function supprimer($title)
  {
  $con=new connecter("super_cerame");
  $query="delete from produit where title ='".$title."'";
  if(mysqli_query($con->con,$query))
  {
  
  }
  
  }
  
  public function update($title)
  {
    $con=new connecter("super_cerame");
  $query="update produit set marque='$this->marque',collection_nom='$this->collection',ajouter_par='$this->ajouter_par',taille='$this->taille',qte=$this->qte,stock=$this->stock,prix=$this->prix,image='$this->image' where title ='".$title."'";
  if(mysqli_query($con->con,$query))
  {
    echo 'rrr';
  }else
    echo 'no';
  }

}
  ?>