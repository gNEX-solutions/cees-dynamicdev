<?php
//KDW: 13-09-2019 
include 'EditCourse.php';

$method=$_POST['method'];

$EditCourse=new EditCourse();

if($method=='searchCourse')
{
    $proTitle=$_POST['proTitle'];
    $EditCourse->getCourseTitles($proTitle);
}


//call to get courseData
if($method=='courseData')
{
    $courseId=$_POST['courseId'];
    $EditCourse->getCourseData( $courseId);
}


?>