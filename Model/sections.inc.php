<?php

class Sections extends dbh{
    
  // DS: 10.09.2019: getAllSections
   protected function getAllSections ()
   { 
      $sql="SELECT * FROM program ORDER BY program_order";
      $result=$this->connect()->query($sql);
      $numRows=$result->num_rows;
      if($numRows>0){
          while($row=$result->fetch_assoc()){
             $program[]=$row;
          }
          return $program;
      }
    }
    // End of getAllSections
    // DS: 10.09.2019: getAllCourses
    protected function getAllCourses ()
   { 
      $sql="SELECT * FROM courses ORDER BY course_order";
      $result=$this->connect()->query($sql);
      $numRows=$result->num_rows;
      if($numRows>0){
          while($row=$result->fetch_assoc()){
             $course[]=$row;
          }
          return $course;
      }
    }    
    // End of getAllCourses
    // DS: 11.09.2019: get card count
    protected function getCardDesign ($id)
   { 
      $sql="SELECT * FROM courses WHERE idprogram = '$id'";
      $result=$this->connect()->query($sql);
      $numRows=$result->num_rows;
          return $numRows;
    }
    //End of get card count
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