<?php

class Sections extends dbh{
    
  // DS: 10.09.2019: getAllSections
   protected function getAllSections ()
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
    // End of getAllSections
    // DS: 10.09.2019: getAllCourses
    protected function getAllCourses ()
   { 
      $sql="SELECT * FROM courses";
      $result=$this->connect()->query($sql);
      $numRows=$result->num_rows;
      if($numRows>0){
          while($row=$result->fetch_assoc()){
             $data[]=$row;
          }
          return $data;
      }
    }
    // End of getAllCourses
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