  
<?php

class ViewSections extends Sections {
    
   
  // DS: 10.09.2019: Show CA page sections list
  public function ShowCA_MENU()
   { 
       $programs=$this->getAllSections();
       $courses=$this->getAllCourses();
       //$count=$this->getCardDesign(2);
      // $classlen=12/$count;
       foreach($programs as $program){
         if($program['page_type']=='CA' && $program['status']==1){
            
            //With courses columb view
            if($program['Menu_type']=='WCCV'){
               //echo "<script>alert(".$program['program_title'].");</script>";
               echo ' <div class="container">

                  <div class="row justify-content-md-center">
                     <div class="col-12 general-title text-center">
                        <h2>'.$program['program_title'].'</h2>
                        <p>'.$program['summary'].'</p>
                        <hr>
                     </div>';
               foreach($courses as $course){
                  if($course['idprogram']==$program['idprogram'] && $course['status']==1){
                     echo '<div class="col-lg-3 col-md-3 col-sm-12">

                        <div class="servicebox text-center">
                           <div class="service-icon">
                              <div class="dm-icon-effect-1" data-effect="slide-bottom">
                                 <a href="#" class=""> <img src="'.$course['course_icon_url'].'" style="width:30%"> </a>
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
            //With courses block view
            if($program['Menu_type']=='WCBV' && $program['status']==1){
               echo '<div class="container">
                        <div class="row justify-content-md-center ">
                           <div class="col-12 general-title text-center">
                              <h2>'.$program['program_title'].'</h2>
                              <p>'.$program['summary'].'</p>
                              <hr>
                           </div>';
                     foreach($courses as $course){
                        if($course['idprogram']==$program['idprogram'] && $course['status']==1){
                           echo '<div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="servicebox text-center">
                                       <div class="card">
                                          <div class="service-icon">
                                             <div class="dm-icon-effect-1" data-effect="slide-left">
                                                <img src='.$course['course_icon_url'].' alt="" title="" style="width:30%; margin-bottom:10px; margin-top:10px;"><br>
                                             </div>
                                          <div class="servicetitle">
                                          <h4>'.$course['course_heading'].'</h4>
                                          <hr>
                                       </div>
                                       <p>'.$course['summary'].'</p>
                                    </div>
                                 </div>
                              </div>
                           </div>';
                        }
                     }
            }
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
    
        
         if($program['page_type']=='CS' && $program['status']==1){
         
            if($program['Menu_type']=='NCIL' ){ 
               echo '<div class="container">

               <div class="grid-flex hideme">
               <div class="col col-image">
                  <img src="'.$program['image_url'].'" alt="" class="mx-auto d-block" />
               </div>
               <div class="col col-text">
                  <div class="Aligner-item text-left">
                     <h3 class="text-left display-2 font-weight-normal">'.$program['program_title'].'</h3>
                     <p class="text-justify">'.$program['summary'].'</p>
                  </div>
               </div>
               </div>
         
               <hr>
               </div><br>';
            }
           elseif($program['Menu_type']=='NCIR' ){ 
           
            echo' <div class="container">
            <div class="grid-flex hideme">
              <div class="col col-image">
                <img src="'.$program['image_url'].'" alt="" class="mx-auto d-block" />
              </div>
              <div class="col col-text col-left" style="margin-left:75px;">
                <div class="Aligner-item">
                  <h3 class="text-left display-2 font-weight-normal">'.$program['program_title'].'</h3>
                  <p class="text-justify">'.$program['summary'].'</p>
                 
                </div>
              </div>
            </div>
            <hr>
          </div><br>';
           }
           elseif($program['Menu_type']=='WCGV' ){ 
         
              echo '<div class="container">
              <div class="row ">
      
              <div class="text-center col-12 display-2 font-weight-normal">
                  <p>'.$program['program_title'].'</p>
              </div>
              <div class="col-12 general-title text-center">
                <!-- <h2>Focused Business Improvement</h2> -->
                <p>'.$program['summary'].'</p>
                <hr>
              </div><div class="container">
              <div class="row justify-content-md-center">';
              
              foreach($courses as $course){
               if($course['idprogram']==  $programid && $course['status']==1){
                      echo'
                      <div class="col-md-4">
                      <div class="servicebox text-center">
                        <div class="service-icon">
                          <div class="dm-icon-effect-1" data-effect="slide-right">
                            <a href="#" class=""> <i class="dm-icon '.$course['course_icon_url'].' fa-3x"></i> </a>
                          </div>
                          <div class="servicetitle">
                            <h4>'.$course['course_heading'].'</h4>
                            <hr>
                          </div>
                        
                        </div>
                        <!-- service-icon -->
                      </div>
                      <!-- servicebox -->
                    </div>';
                 }
               }

              echo'</div></div></div></div>';
           }
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
       $courses=$this->getAllCourses();
       $count=$this->getCardDesign(2);
       $classlen=12/$count;
       foreach($programs as $program){
         if($program['page_type']=='SL' && $program['status']==1){

            //With courses column view
            // if($program['Menu_type']=="card"){
               echo '<h1 class="mbr-title pt-2 mbr-fonts-style display-2" style="text-align:center">'.$program['program_title'].'</h1>
                      
                        <hr>
                        <div class="media-container-row">';

               foreach($courses as $course){


                  if($course['idprogram']==$program['idprogram'] && $course['status']==1){
                     
                     echo '
                             <div class="col-lg-4 col-md-4 col-sm-12">
                                <div class="widget" data-effect="slide-left">
                                  <div class="card text-black  mb-3" style="background-image: linear-gradient(-90deg ,#bdc7c7, #ebeded);">

                                  <div class="card-header"><h5 class="card-title">'.$course['course_heading'].'</h5></div>
                                    <div class="card-body" style="height: 450px;">
                                    <img src="'.$course['course_icon_url'].'"  width= 90% style="display: block; margin-left: auto; margin-right: auto;">

                                        <p style="color: black;">'.$course['summary'].'</p>
                                      </div>
                                    </div>
                                  </div>
                                <!-- end widget -->
                                </div>';
                  }
               }

             
            // }
            
      echo '</div>';

     }

      
   }
   // End of SL sections list
  }
}

?>


