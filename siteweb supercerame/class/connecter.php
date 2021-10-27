<?php
class connecter{
  public string $hoste="localhost";
  public string $username="root";
  public string $database;
  public $con;

    public function __construct($database)
    {
   //   $this->hoste=$hoste;
     // $this->username=$username;
      $this->database=$database;
      try{
        $this->con=mysqli_connect($this->hoste,$this->username);
         mysqli_select_db($this->con,$this->database);
       
        }catch(Exception $x)
        {
          echo("<script>alert('erreur connecter')</script>");
        }
    }


}
?>