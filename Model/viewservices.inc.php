    
<?php
include 'php/services.inc.php';
class ViewServices extends Services {
    
 
  public function ShowAllServices()
   { 
       $datas=$this->getAllServices();
       foreach($datas as $data){
        echo '<a class="atag" onclick="return check()" value='. $data['idservices'].' id="idServices" href="services.php">'. $data['service_name']."</a>";   
       }
      
   }
}
?>