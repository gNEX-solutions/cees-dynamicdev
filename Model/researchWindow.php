<?php

class researchWindow extends dbh{
    
  
   protected function getAllResearches ()
   { 
      $sql="SELECT r.heading, r.summary, r.idresearches, r.published_date, i.url, i.position FROM researches r INNER JOIN researches_images i ON r.idresearches = i.idresearches WHERE r.status = 1 AND i.status = 1 ORDER BY r.published_date DESC";
      $result=$this->connect()->query($sql);
      $numRows=$result->num_rows;
      if($numRows>0){
          while($row=$result->fetch_assoc()){
             $data[]=$row;
          }
          return $data;
      }
    }

}

?>