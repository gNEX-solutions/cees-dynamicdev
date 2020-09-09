
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
    if( !empty($_FILES['file']['name']))
    {
       $imgLocation=$_FILES['file']['name'];
    }
   // echo  $imgLocation;  
   $result=$Edit->UpdateProgram ($_POST['Title'],$_POST['Summary'],$_POST['status'], $imgLocation,$_POST['ID'],$_POST['Description'],$_POST['inputLecturer'],$_POST['inputCourseDuration'],$_POST['inputCourseFee']);
   echo json_encode(trim( $result,"\""));
}
else if($method=='oder')
{   
    $programList=$_POST['oderlist_json'];
    $result=$Edit->UpdateProgramOder ($programList);
    echo json_encode($result);
}




?>

