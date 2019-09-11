<?php 

class insights extends dbh{

    public function getInsights(){
        $sql="SELECT r.idresearches,r.heading,r.summary, i.url, r.published_date FROM researches r,researches_images i WHERE r.idresearches=i.idresearches ORDER BY r.published_date DESC LIMIT 5";
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