<?php

class Sections extends dbh{
    
  
   protected function getAllSections ()
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

   protected function getConsultingServicesPrograms ()
   { 
      $sql="SELECT * FROM program WHERE page_type=CS";
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