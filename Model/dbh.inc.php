<?php
// KDW: August 24th, 2019 10:52pm : DB Connection Class
class dbh{
    
    private $serverName;
    private $userName;
    private $password;
    private $dbName;
   public function connect()
   { 
    //    $this->serverName="us-cdbr-iron-east-02.cleardb.net";
    //    $this->userName="b2549a7be081f5";
    //    $this->password="9777311d";
    //    $this->dbName="heroku_3dffaa1b8ca65ff";

 //   changing the db server from server addres to the localhost
   //  $this->serverName="138.128.162.194";  commented by : dj
      $this->serverName="127.0.0.1";
       $this->userName="ceesinte_developer";
       $this->password="1v_UJ8]QYtoL";
       $this->dbName="ceesinte_demo";

      $conn=new mysqli($this->serverName, $this->userName,$this->password,$this->dbName);
      return $conn;
   
   }
}
?>