
<?php
//KDW: 12-09-2019 
include 'EditSection.php';


$method=$_POST['method'];

$Edit=new Edit();

if($method=='searchTitle')
{
    $pageType=$_POST['PageType'];
   $data= $Edit->getTitles($pageType);
}
else if($method=='searchProgram')
{  
    
    $pageType=$_POST['pageType'];
    $programId=$_POST['PageId'];
  //  echo $pageType." ".$programId;
    $Edit->getProgram ($programId,$pageType);
}
else if($method=='save')
{
    $imgLocation="";
    $imgLocation1="";
    $imgLocation2="";
    $imgLocation3="";
    $imgLocation4="";

  
       $imgLocation=addslashes(file_get_contents($_FILES['file']['tmp_name']));
   
       $imgLocation2=addslashes(file_get_contents($_FILES['image2']['tmp_name']));
       $imgLocation3=addslashes(file_get_contents($_FILES['image3']['tmp_name']));
       $imgLocation4=addslashes(file_get_contents($_FILES['image4']['tmp_name']));
       $imgLocation5="";
       if($_POST['programType']=='BP')
       $imgLocation5=addslashes(file_get_contents($_FILES['image5']['tmp_name']));
       $imageProperties = getimageSize($_FILES['file']['tmp_name']);

       $imageProperties2 = getimageSize($_FILES['image2']['tmp_name']);
       $imageProperties3 = getimageSize($_FILES['image3']['tmp_name']);
      $imageProperties4 = getimageSize($_FILES['image4']['tmp_name']);
  
   // echo  $_POST['programType'];  
   $result=$Edit->UpdateProgram ($_POST['Title'],$_POST['Summary'],$_POST['status'], $imgLocation,$_POST['ID'],$_POST['Description1'],$_POST['inputLecturer'],$_POST['inputCourseDuration'],$_POST['inputCourseFee'], $imgLocation5,$imgLocation2,$imgLocation3,$imgLocation4,$_POST['Description2'],$_POST['Description3'],$_POST['programType'],$_POST['inputCourseSheets']);
   echo $result;
}
else if($method=='oder')
{   
    $programList=$_POST['oderlist_json'];
    $result=$Edit->UpdateProgramOder ($programList);
    echo json_encode($result);
}




?>

