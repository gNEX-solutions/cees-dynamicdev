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

      foreach($datas as $data)
      {
         $titleimage = '';
         // var_dump($data);

         if($data['main_image'] == '' || $data['main_image'] == null  || $data['main_image'] == ' '){
            //$titleimage  = "assets/images/blue-header-1.jpg" ;
         }
         else{
            $titleimage  = $data['main_image'];
         }
         echo '
         <section style="" >  
            <div class="carousel-inner" >
               <div style = "overflow:hidden; height: 350px;">
                <img style="width: 100%;background-position: center;background-repeat: no-repeat;background-size: cover;" src="data:image/jpg;charset=utf8;base64,'.base64_encode($titleimage).'" alt="" title="">
               </div>
               <div class="carousel-caption">
                  <h5 style="color: white;">'.$data['program_title'].'</h5>
                  <p>'.$data['summary'].'</p>
               </div>
            </div>
         </section>
         ';

         echo '
         <section class="course_details_area" style="background: lightgrey;">
         <div class="container" style="background: #fff; box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);">
             <div class="row">
                 <div class="col-lg-8 course_details_left">
 
                     <div class="content_wrapper" style="padding-left:50px; padding-right: 80px;">
                        <div class="content" style="margin-bottom:-50px;margin-top: 50px;">'
                        .$data['description1'].'
                        </div>
                        <div class="content" >'
                        .$data['description2'].'
                        </div>
                     </div>
 
                 </div>
                 <div class="col-lg-4 right-contents" style="margin-top:50px;">

                     <div class="container">
                         <div class="content"> <img src="data:image/jpg;charset=utf8;base64,' . base64_encode($data['image1']) . '" style=" width: 100%;  height: auto; " /> </div>
                     </div>

                     <div class="container"> 
                        <div class="content"> <img src="data:image/jpg;charset=utf8;base64,' . base64_encode($data['image2']) . '" style=" width: 100%;  height: auto; " /> </div>
                     </div>

                     <div class="container"> 
                        <div class="content"> <img src="data:image/jpg;charset=utf8;base64,' . base64_encode($data['image3']) . '" style=" width: 100%;  height: auto; " /> </div>
                     </div>

                 </div>
             </div>
         </div>
     </section>
         
         ';
      }
      
  }


  

}

?>


