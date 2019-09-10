    
<?php

class ViewServices extends Services {
    
 
  public function ShowCA_MENU()
   { 
       $datas=$this->getAllServices();
       foreach($datas as $data){
         if($data['type']=='CA'&& $data['status']==1){
          echo '<div class="col-md-3"><h4 class="dropdown-heading"><a  href="program_template.php?idconsultancies='.$data['idconsultancies'].'&heading='.$data['heading'].'" >'. $data['heading'].'</a></h4><ul class="dropdown-list"><li>'. $data['summary'].' </li></ul></div>';
         }
      

      }
      
   }
   public function ShowCS_MENU()
   { 
       $datas=$this->getAllServices();
       foreach($datas as $data){
         if($data['type']=='CS'&& $data['status']=='1'){
          echo '<div class="col-md-3"><h4 class="dropdown-heading"><a  href="program_template.php?idconsultancies='.$data['idconsultancies'].'&heading='.$data['heading'].'">'. $data['heading'].'</a></h4><ul class="dropdown-list"><li>'. $data['summary'].' </li></ul></div>';
         }
      

   }
      
   }
   public function ShowSL_MENU()
   { 
       $datas=$this->getAllServices();
       foreach($datas as $data){
         if($data['type']=='SL'&& $data['status']=='1'){
          echo '<div class="col-md-3"><h4 class="dropdown-heading"><a  href="program_template.php?idconsultancies='.$data['idconsultancies'].'&heading='.$data['heading'].'" >'. $data['heading'].'</a></h4><ul class="dropdown-list"><li>'. $data['summary'].' </li></ul></div>';
         }
      

      }
      
   }

   public function ShowCA_CONTENT($idconsultancies)
   { 
       $datas=$this->  getRequestedServiceData ($idconsultancies);
       return  $datas;  
   }
   public function showCA_IMAGES($idconsultancies)
   {
      $datas=$this->  getRequestedServiceImages ($idconsultancies);
      return  $datas;  
   }



   public function ShowCSMOB_MENU()
   {   
       $datas=$this->getAllServices();
       foreach($datas as $data){
         if($data['type']=='CS'&& $data['status']=='1'){
         
          echo '<li><a href="program_template.php?idconsultancies='.$data['idconsultancies'].'&heading='.$data['heading'].'">'. $data['heading'].'</a></li>';
         }
      }
   }
   public function ShowSLMOB_MENU()
   { 
       $datas=$this->getAllServices();
       foreach($datas as $data){
         if($data['type']=='SL' && $data['status']=='1'){
          echo '<li><a href="program_template.php?idconsultancies='.$data['idconsultancies'].'&heading='.$data['heading'].'">'. $data['heading'].'</a></li>';
         }
      

      }
      
   }
   public function ShowCAMOB_MENU()
   { 
       $datas=$this->getAllServices();
       foreach($datas as $data){
         if($data['type']=='CA' && $data['status']=='1' ){
          echo '<li><a href="program_template.php?idconsultancies='.$data['idconsultancies'].'&heading='.$data['heading'].'">'. $data['heading'].'</a></li>';
         }
      

      }
      
   }
   
}
?>

