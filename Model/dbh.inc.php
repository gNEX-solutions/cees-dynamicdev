<?php
// KDW: August 24th, 2019 10:52pm : DB Connection Class
class dbh{
    
    private $serverName;
    private $userName;
    private $password;
    private $dbName;
   public function connect()
   { 

       $this->serverName="localhost";
       $this->userName="root";
       $this->password="";
       $this->dbName="cees";
    //     $this->serverName="sg2plcpnl0183.prod.sin2.secureserver.net";
    //    $this->userName="icees_dbadmin";
    //    $this->password="QLFR2T@aeSTRAYf";
    //    $this->dbName="iceesglobal";

      $conn=new mysqli($this->serverName, $this->userName,$this->password,$this->dbName);
      return $conn;
   
   }
}
?>
