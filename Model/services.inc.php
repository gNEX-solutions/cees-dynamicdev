<?php
include 'php/dbh.inc.php';
class Services extends dbh{
    
  
   protected function getAllServices ()
   { 
      $sql="SELECT * FROM services";
      $result=$this->connect()->query($sql);
      $numRows=$result->num_rows;
      if($numRows>0){
          while($row=$result->fetch_assoc()){
             $data[]=$row;
          }
          return $data;
      }
    }
}
?>