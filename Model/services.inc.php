<?php

class Services extends dbh{
    
  
   protected function getAllServices ()
   { 
      $sql="SELECT * FROM consultancies";
      $result=$this->connect()->query($sql);
      $numRows=$result->num_rows;
      if($numRows>0){
          while($row=$result->fetch_assoc()){
             $data[]=$row;
          }
          return $data;
      }
    }

   protected function getRequestedServiceData ($idconsultancies)
   { 
      $sql="SELECT * FROM consultaies_descriptions WHERE idconsultancies=".$idconsultancies;
      $result=$this->connect()->query($sql);
      $numRows=$result->num_rows;
      if($numRows>0){
          while($row=$result->fetch_assoc()){
             $data[]=$row;
          }
          return $data;
      }
    }

    protected function getRequestedServiceImages ($idconsultancies)
   { 
      $sql="SELECT * FROM consultancies_images WHERE idconsultancies=".$idconsultancies;
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