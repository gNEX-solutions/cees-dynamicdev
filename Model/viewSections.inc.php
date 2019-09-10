  
<?php

class ViewSections extends Sections {
    
 
  // DS: 10.09.2019: Show CA page sections list
  public function ShowCA_MENU()
   { 
       $datas=$this->getAllSections();
       foreach($datas as $data){
         if($data['page_type']=='CA'){
          echo '<div class="col-md-3"><h4 class="dropdown-heading"><a  href="program_template.php?idconsultancies='.$data['idconsultancies'].'&heading='.$data['heading'].'" >'. $data['heading'].'</a></h4><ul class="dropdown-list"><li>'. $data['summary'].' </li></ul></div>';
         }
      

      }
      
   }
   // End of CA sections list
   public function ShowCS_MENU()
   { 
       $datas=$this->getAllServices();
       foreach($datas as $data){
         if($data['type']=='CS'){
          echo '<div class="col-md-3"><h4 class="dropdown-heading"><a  href="program_template.php?idconsultancies='.$data['idconsultancies'].'&heading='.$data['heading'].'">'. $data['heading'].'</a></h4><ul class="dropdown-list"><li>'. $data['summary'].' </li></ul></div>';
         }
      

      }
      
   }
   public function ShowSL_MENU()
   { 
       $datas=$this->getAllServices();
       foreach($datas as $data){
         if($data['type']=='SL'){
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

 
}
?>

