<?php

class Services extends dbh{
    
  // KDW: August 24th, 2019 10:52pm : get all services to show in nav bar
   protected function getAllServices ()
   { 
      $sql="SELECT * FROM program";
      $result=$this->connect()->query($sql);
      $numRows=$result->num_rows;
      if($numRows>0){
          while($row=$result->fetch_assoc()){
             $data[]=$row;
          }
          return $data;
      }
    }


    // August 25th, 2019 2:27am : get Data to show in Clicked Page
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
  // August 25th, 2019 2:27am : get Images to show in Clicked Page
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