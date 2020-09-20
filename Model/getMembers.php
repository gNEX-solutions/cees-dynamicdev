<?php

class getMembers extends dbh{
    
   public function getAllMembers()
   { 
      $sql="SELECT idTeam_members,first_name,last_name,role FROM team_members WHERE status=1";
      $result=$this->connect()->query($sql);
      $numRows=$result->num_rows;
      if($numRows>0){
          while($row=$result->fetch_assoc()){
             $data[]=$row;
          }
          return $data ;
      }
    }


  }

?>