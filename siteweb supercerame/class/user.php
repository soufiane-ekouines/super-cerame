<?php
class user{
  private string $cin;
  private string $email;
  private string $password;
  private string $nom;
  private string $prenom;
  private float $age;
  private string $adresse;
  private string $telephone;
  private string $sexe;
  private string $ville;
  private string $pays;
  private string $societe;

  public function getcin(){
    return $this->cin;
  }
  public function getemail(){
    return $this->email;
  }
  public function getpassword(){
    return $this->password;
  }
  public function getnom(){
    return $this->nom;
  }
  public function getprenom(){
    return $this->prenom;
  }
  public function getage(){
    return $this->age;
  }
  public function getadresse(){
    return $this->adresse;
  }
  public function gettelephon(){
    return $this->telephone;
  }
  public function getsexe(){
    return $this->sexe;
  }
  public function getville(){
    return $this->ville;
  }
  public function getpaye(){
    return $this->pays;
  }
  public function __construct($cin,$email,$password,$nom,$prenom,$Age,$adresse,$telephone,$sexe,$ville,$pays,$societe)
{
  $this->cin=$cin;
  $this->email=$email;
  $this->password=$password;
  $this->nom=$nom;
  $this->prenom=$prenom;
  $this->age=$Age;
  $this->adresse=$adresse;
  $this->telephone=$telephone;
  $this->sexe=$sexe;
  $this->ville=$ville;
  $this->pays=$pays;
  $this->societe=$societe;
}

public function ajouter()
{
  $con=new connecter("super_cerame");
  $query="select * from users where cin=".$this->cin;
  $select=mysqli_query($con->con,$query);

  if(mysqli_num_rows($select)>0)
        echo('ereur');
  else
  {
  $query="insert into pers values ('$this->email;','$this->password','$this->nom','$this->prenom',$this->age,'$this->adresse','$this->telephone','$this->sexe','$this->ville','$this->pays','$this->societe)";
   mysqli_query($con->con,$query);
  }
  }




}



?>