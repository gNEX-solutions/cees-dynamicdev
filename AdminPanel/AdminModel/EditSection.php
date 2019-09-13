<?php 
include '../../Model/dbh.inc.php';



class Edit extends dbh{
 
  public function getTitles ($pageType)
   { 
    $sql="SELECT * FROM program WHERE page_type='".$pageType."'";
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