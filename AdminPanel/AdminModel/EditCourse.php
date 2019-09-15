<?php 
include '../../Model/dbh.inc.php';

class EditCourse extends dbh{
  //Data That want tp show in Program Tile is get From EditSection.php

  //Search Course Data By ID To Show In Couse Title Select Box
  // To Show the Couser Oder Also Call to this Function
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

    //Search Course Data By ID To Show In Textboxes
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

    //Update the Change Data On Courses
    public function UpdateCourse($Title,$Summary,$status,$img,$programId)
    { 
     $location="dddd";
     if($img==""){
      
     }else{
        $this->saveImage();
        $filename = $_FILES['file']['name'];
        $location = "assets/images/consultancy/". $filename;
     }
 
      $sql="UPDATE courses SET course_heading='".$Title."',summary='".$Summary."',course_icon_url='". $location."',status=".$status." WHERE idcourses=".$programId;
      $result=$this->connect()->query($sql);
    
     // return $status;
      return $result?'ok':'err';
    
    }


    //Upload the Image Image To Folder
    function saveImage()
    {      
         /* Getting file name */
         $filename = $_FILES['file']['name'];
         $temp = explode(".", $filename);
         
 
         /* Location */
        $location = "../../assets/images/consultancy/". $filename;
        $uploadOk = 1;
        $imageFileType = pathinfo($location,PATHINFO_EXTENSION);
            /* Valid extensions */
        $valid_extensions = array("jpg","jpeg","png");
            /* Check file extension */
        if(!in_array(strtolower($imageFileType), $valid_extensions)) {
        $uploadOk = 0;
        }
        if($uploadOk == 0){
        echo 0;
        }else{
        /* Upload file */
        move_uploaded_file($_FILES['file']['tmp_name'],$location);
        }
        
    }

   
    public function  getCourseOder ($programId)
    { 
     $sql="SELECT * FROM courses WHERE idprogram=".$programId."ORDER BY course_order";
     $result=$this->connect()->query($sql);
     $numRows=$result->num_rows;
     if($numRows>0){
         while($row=$result->fetch_assoc()){
            $data[]=$row;
         }
         echo json_encode($data);
     }
    }
    //Reoder the Course list
    public function UpdateCourseOder($programList)
    {
         $datas = json_decode($programList,true);
          //return $datas ;
        foreach( $datas as $data){
            $sql="UPDATE courses  SET course_order='".$data['course_order']."' WHERE idcourses=".$data['courseID'];
            $this->connect()->query($sql);
        }
        return 'ok';
   
    }

}
?>