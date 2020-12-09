<?php

include '../Model/dbh.inc.php';

class CurrencyRepository  extends dbh
{
 public function getCurrency()
 {
     $sql="SELECT * FROM currency";
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