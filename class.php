<?php 






class Cookie{

public $db,$sql,$sorgu;

public function __construct(){
/*
    $this->db = new PDO('mysql:host=localhost;dbname=haber','root','');
  
    $this->db->exec("SET NAMES utf8");

*/
$this->db= new PDO('mysql:host=localhost; dbname=klasproje','root','flamenko86');
$this->db->exec("SET NAMES utf8");

}


public function sorgu($password,$username){

$this->sql= $this->db->prepare("SELECT*FROM person WHERE password='$password' AND '$username' ");
return $this->sql->execute();




}


}

?>
