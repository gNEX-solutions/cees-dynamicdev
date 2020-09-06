    
<?php

class ViewServices extends Services {
    
   
  public function ShowID_MENU()
   { 
       $datas=$this->getAllServices();
       foreach($datas as $data){
         if($data['page_type']=='ID'&& $data['status']==1){
          echo '<div class="col-md-3"><h4 class="dropdown-heading"><a  href="course-details.php?artID='.$data['idprogram'].'" >'. $data['program_title'].'</a></h4><ul class="dropdown-list"><li>'. $data['summary'].' </li></ul></div>';
         }
      

      }
      
   }
   public function ShowBP_MENU()
   { 
       $datas=$this->getAllServices();
       foreach($datas as $data){
         if($data['page_type']=='BP'&& $data['status']=='1'){
          echo '<div class="col-md-3"><h4 class="dropdown-heading"><a  href="business_partnering.php?artID='.$data['idprogram'].'">'. $data['program_title'].'</a></h4><ul class="dropdown-list"><li>'. $data['summary'].' </li></ul></div>';
         }
      

   }
      
   }
   public function ShowSL_MENU()
   { 
       $datas=$this->getAllServices();
       foreach($datas as $data){
         if($data['page_type']=='SL'&& $data['status']=='1'){
          echo '<div class="col-md-3"><h4 class="dropdown-heading"><a href="solutionslab.php#'.$data['idprogram'].'" >'. $data['program_title'].'</a></h4><ul class="dropdown-list"><li>'. $data['summary'].' </li></ul></div>';
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



   public function ShowBPMOB_MENU()
   {   
       $datas=$this->getAllServices();
       foreach($datas as $data){
         if($data['page_type']=='BP'&& $data['status']=='1'){
         
          echo '<li><a href="#">'. $data['program_title'].'</a></li>';
         }
      }
   }
   public function ShowSLMOB_MENU()
   { 
       $datas=$this->getAllServices();
       foreach($datas as $data){
         if($data['page_type']=='SL' && $data['status']=='1'){
          echo '<li><a href="#">'. $data['program_title'].'</a></li>';
         }
      

      }
      
   }
   public function ShowCAMOB_MENU()
   { 
       $datas=$this->getAllServices();
       foreach($datas as $data){
         if($data['page_type']=='CA' && $data['status']=='1' ){
          echo '<li><a href="#">'. $data['program_title'].'</a></li>';
         }
      

      }
      
   }
   
}
?>

