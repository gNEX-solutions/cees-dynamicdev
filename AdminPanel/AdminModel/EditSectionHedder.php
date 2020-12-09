
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
    $imgLocation1="";
    $imgLocation2="";
    $imgLocation3="";
    $imgLocation4="";
    $imgLocation5="";

     if($_FILES['file']['error'] !=4)
       $imgLocation1=addslashes(file_get_contents($_FILES['file']['tmp_name']));
    if($_FILES['image2']['error'] !=4)
       $imgLocation2=addslashes(file_get_contents($_FILES['image2']['tmp_name']));
    if($_FILES['image3']['error'] !=4)
       $imgLocation3=addslashes(file_get_contents($_FILES['image3']['tmp_name']));
    if($_FILES['image4']['error'] !=4)
       $imgLocation4=addslashes(file_get_contents($_FILES['image4']['tmp_name']));

       if($_POST['programType']=='BP'){
           if($_FILES['image5']['error'] !=4)
       $imgLocation5=addslashes(file_get_contents($_FILES['image5']['tmp_name']));
       }
       $imageProperties = $_FILES['file']['size'];
       $imageProperties2 = $_FILES['image2']['size'];
       $imageProperties3 = $_FILES['image3']['size'];
       $imageProperties4 = $_FILES['image4']['size'];

   // echo  $_POST['programType'];  
   $result=$Edit->UpdateProgram ($_POST['Title'],$_POST['Summary'],$_POST['status'], $imgLocation1,$_POST['ID'],$_POST['Description1'],$_POST['inputLecturer'],$_POST['inputCourseDuration'],$_POST['inputCourseFee'], $imgLocation5,$imgLocation2,$imgLocation3,$imgLocation4,$_POST['Description2'],$_POST['Description3'],$_POST['programType'],$_POST['inputCourseSheets'],$_POST['currency']);
   echo $result;
}
else if($method=='oder')
{   
    $programList=$_POST['oderlist_json'];
    $result=$Edit->UpdateProgramOder ($programList);
    echo json_encode($result);
}




?>

