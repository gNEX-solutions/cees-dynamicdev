<?php

class EventWindow extends dbh{
    
  
   protected function getAllEvents ()
   { 
      $sql="SELECT e.name,e.date,e.start_time,e.location,i.url,i.status FROM events e INNER JOIN events_images i ON event_id= idEvent WHERE e.status = 1";
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
