  
<?php

class ViewSections extends Sections {
    
 
  // DS: 10.09.2019: Show CA page sections list
  public function ShowCA_MENU()
   { 
       $programs=$this->getAllSections();
       $courses=$this->getAllCourses();
       $count=$this->getCardDesign(2);
       $classlen=12/$count;
       foreach($programs as $program){
         if($program['page_type']=='CA' && $program['status']==1){
          echo ' <div class="container">
                  <div class="row ">
                     <div class="col-12 general-title text-center">
                        <h2>'.$program['program_title'].'</h2>
                        <p>'.$program['summary'].'</p>
                        <hr>
                     </div>';
               foreach($courses as $course){
                  if($course['idprogram']==2 && $course['status']==1){
                     echo '<div class="col-lg-'.$classlen.' col-md-'.$classlen.' col-sm-12">
                        <div class="servicebox text-center">
                           <div class="service-icon">
                              <div class="dm-icon-effect-1" data-effect="slide-bottom">
                                 <a href="#" class=""> <i class="dm-icon fa fa-trophy fa-3x"></i> </a>
                              </div>
                           <div class="servicetitle">
                              <h4>'.$course['course_heading'].'</h4>
                              <hr>
                           </div>
                           <p>'.$course['summary'].'</p>
                        </div>
                     </div>
                     </div>';
                  }
               }
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

