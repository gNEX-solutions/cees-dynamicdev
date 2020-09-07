<?php

class ViewSections extends Sections {

  // DS: 10.09.2019: All the types of courses (WCCV/ WCBV/ WCGV/ NCIL/ NCIR/ NCICV)
  public function ShowCA_MENU()
   { 
       $programs=$this->getAllSections();
       $courses=$this->getAllCourses();
       
      foreach($programs as $program)
      {
         if($program['page_type']=='CA' && $program['status']==1)
         {
            //DS: 15.09.2019: Include all course types
            include "courseTypes.inc.php";
         }

      }
      
   }
   // End of CA sections list

   // KDW: 11.09.2019: Show CS page sections list
   public function ShowCS_MENU()
   { 
      $programs=$this->getAllSections();
      $courses=$this->getAllCourses();
     
      foreach($programs as $program){
         $programid= $program['idprogram'];
    
        

         if($program['page_type']=='CS' && $program['status']==1)
         {
            //DS: 15.09.2019: Include all course types
            include "courseTypes.inc.php";

         }
      }
      
   }
   // End of CS sections list
 // KDW: 11.09.2019: Show CS page Slider
  public function ShowCS_Slider()
   {
      $programs=$this->getAllSections();
      foreach($programs as $program){
         
         if($program['page_type']=='CS' && $program['status']==1){
            echo'<li class="anim'.$program['program_order'].'">
            <div class="quote">'.$program['program_title'].'</div>
            <div class="source">'.$program['summary'].'....</div>
          </li>';
         }
      }

   }
 
  // End of CS sections list
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

   // BW: 12.09.2019: Show SL page sections list
  public function ShowSL_MENU()
  { 
      $programs=$this->getAllSections();
       
      echo '<div class="media-container-row">';
       
      foreach($programs as $program)
      {
         if($program['page_type']=='SL' && $program['status']==1)
         {
             //DS: 15.09.2019: Include all course types
             include "courseTypes.inc.php";     
         }
      }
      
      echo '</div>';
   // End of SL sections list
  }


  //creating html elements for Solution.php page contents
  public function ShowSL_CONTENT($idSolutionsLab)
  { 
      $datas=$this->getRequestedSolutionsData ($idSolutionsLab);
      
      echo '<div class="media-container-row">';
   
      foreach($datas as $data)
      {
         echo $data['description1'];
         echo $data['description2'];
      }
      
      echo '</div>';
  }


  

}

?>


