<?php
//KDW: 13-09-2019 
include 'EditCourse.php';

$method=$_POST['method'];

$EditCourse=new EditCourse();

if($method=='searchCourse')
{
    $proID=$_POST['proID'];
    $EditCourse->getCourseTitles($proID);
}


//call to get courseData
if($method=='courseData')
{
    $courseId=$_POST['courseId'];
    $EditCourse->getCourseData( $courseId);
}

else if($method=='save')
{
    $imgLocation="";
    if( !empty($_FILES['file']['name']))
    {
       $imgLocation=$_FILES['file']['name'];
    }
   // echo  $imgLocation;  
   $result= $EditCourse->UpdateCourse ($_POST['Title'],$_POST['Summary'],$_POST['status'], $imgLocation,$_POST['ID']);
   echo json_encode(trim( $result,"\""));
}

//callto getCourseOder
else if($method=='CoresOder')
{   
    $proID=$_POST['proID'];
    $EditCourse->getCourseTitles($proID);
}
//call ro Update Course Oder
else if($method=='oder')
{   
    $CourseList=$_POST['oderlist_json'];
    $result=$EditCourse->UpdateCourseOder ($CourseList);
    echo json_encode($result);
}



?>