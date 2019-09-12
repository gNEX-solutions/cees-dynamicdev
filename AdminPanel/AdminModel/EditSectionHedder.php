<?php
include 'EditSection.php';

$pageType=$_POST['PageType'];
$method=$_POST['method'];

$Edit=new Edit();

if($method=='searchTitle')
{
    $Edit->getTitles($pageType);
}


?>

