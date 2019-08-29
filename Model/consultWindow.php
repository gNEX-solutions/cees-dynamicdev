<?php

class consultWindow extends dbh{
    
  
   protected function getAllConsultations ()
   { 
      $sql="SELECT c.heading, c.summary, i.url, i.position FROM consultancies c INNER JOIN consultancies_images i ON c.idconsultancies= i.idConsultancies WHERE c.status = 1 AND i.status = 1 AND c.type = 'CS'";
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