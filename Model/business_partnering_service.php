<?php

class businessPartneringService extends dbh{

    public function getSpecificBusinessPartner($artID)
    { 
        
       $sql1="SELECT * FROM program p, business_partnering b WHERE p.idprogram=".$artID." AND p.status = 1 AND p.isDeleted=0 AND p.idprogram=b.idprogram";
       $result1=$this->connect()->query($sql1);
       $numRows1=$result1->num_rows;
       if($numRows1>0){
           while($row=$result1->fetch_assoc()){
              $data1[]=$row;
           }
           return $data1;
       
     }

}
}

?>