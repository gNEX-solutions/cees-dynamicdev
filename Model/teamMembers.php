<?php
include 'dbh.inc.php';
class Member extends dbh{
    function getMembers(){
      $query ="SELECT * FROM team_members WHERE status = 1";
      $result =$this->connect()->query($query);   
      return $result;
  }
}
?>