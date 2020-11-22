<?php

class CoursesService extends dbh{

    public function getSpecificProgram($artID)
    { 
        
       $sql1="SELECT * FROM program p where p.idprogram =".$artID." AND p.status = 1 AND p.isDeleted=0";
       $result1=$this->connect()->query($sql1);
       $numRows1=$result1->num_rows;
       if($numRows1>0){
           while($row=$result1->fetch_assoc()){
              $data1[]=$row;
           }
           return $data1;
       
     }

}

public function getSpecificCourse($artID)
    { 
        
       $sql1="SELECT * FROM courses c where c.idprogram =".$artID;
       $result1=$this->connect()->query($sql1);
       $numRows1=$result1->num_rows;
       if($numRows1>0){
           while($row=$result1->fetch_assoc()){
              $data1[]=$row;
           }
           return $data1;
       
     }

}
}

?>