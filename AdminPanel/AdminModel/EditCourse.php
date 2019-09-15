<?php 
include '../../Model/dbh.inc.php';

class EditCourse extends dbh{

    public function getCourseTitles ($ProgramID)
    { 
     $sql="SELECT * FROM courses WHERE idprogram='".$ProgramID."'ORDER BY course_order";
     $result=$this->connect()->query($sql);
     $numRows=$result->num_rows;
     if($numRows>0){
         while($row=$result->fetch_assoc()){
            $data[]=$row;
         }
         echo json_encode($data);
     }
    }

    public function getCourseData ( $courseId)
    { 
     $sql="SELECT * FROM  courses WHERE idcourses=". $courseId;
     $result=$this->connect()->query($sql);
     $numRows=$result->num_rows;
     if($numRows>0){
         while($row=$result->fetch_assoc()){
            $data[]=$row;
         }
         echo json_encode($data);
     }
    }

}
?>