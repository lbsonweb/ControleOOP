<?php
  class connect{
  
  private $servidor="localhost";
  private $database="gerenciamento";
  private $table="produtos";
  private $username="root";
  private $password="";
  private $errorConnect="Error connect";
  private $errorSelect="Error select";
    function connect(){
    
      $link=mysqli_connect(this->servidor,this->username,this->password) or die(this->errorConnect(mysqly_error($link)));
      return $link;
    }
   function selectBD(){
		$select=mysqli_select_db($link, $database)or die($this->errorSelect(mysqli_error($link)));
		return $select;
	}
}
?>
