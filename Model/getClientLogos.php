<?php

class getClientLogos extends dbh{
    
   public function getAllClientLogos()
   { 
      $sql="SELECT c.imageUrl FROM clients c WHERE c.status = 1";
      $result=$this->connect()->query($sql);
      $numRows=$result->num_rows;
      if($numRows>0){
          while($row=$result->fetch_assoc()){
             $data[]=$row;
          }
          return $data ;
      }
    }
}

?>