<?php
// KDW: August 24th, 2019 10:52pm : DB Connection Class
class dbh{
    
    private $serverName;
    private $userName;
    private $password;
    private $dbName;
   public function connect()
   { 

//       $this->serverName="us-cdbr-iron-east-02.cleardb.net";
//       $this->userName="b2549a7be081f5";
//       $this->password="9777311d";
//       $this->dbName="heroku_3dffaa1b8ca65ff";
         $this->serverName="localhost";
        $this->userName="root";
        $this->password="";
        $this->dbName="cees";

      $conn=new mysqli($this->serverName, $this->userName,$this->password,$this->dbName);
      return $conn;
   
   }
}
?>
