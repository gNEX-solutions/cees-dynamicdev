<?php

$programs=$this->getAllSections();
$courses=$this->getAllCourses();

if($program['Menu_type']=='WCCV')
            {  
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
            //With Courses Block View
            elseif($program['Menu_type']=='WCBV' && $program['status']==1){
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
            //No Courses Image Left
            elseif($program['Menu_type']=='NCIL' && $program['status']==1)
            { 
               echo '<div class="container">
                  <div class="grid-flex">
                     <div class="col col-image img-div">
                        <img src="'.$program['image_url'].'" alt="" class="mx-auto d-block proimg" />
                     </div>
                  <div class="col col-text ">
                     <div class="Aligner-item text-left">
                        <h3 class="text-left display-2 font-weight-normal">'.$program['program_title'].'</h3>
                        <p class="text-justify">'.$program['summary'].'</p>
                     </div>
                  </div>
               </div>     
               <hr>
               <br>';
            }
            //No Courses Image Right
            elseif($program['Menu_type']=='NCIR' && $program['status']==1){ 
               echo' <div class="container">
                  <div class="grid-flex hideme">
                     <div class="col col-image img-div">
                        <img src="'.$program['image_url'].'" alt="" class="mx-auto d-block proimg" />
                     </div>
                     <div class="col col-text col-left">
                        <div class="Aligner-item">
                           <h3 class="text-left display-2 font-weight-normal">'.$program['program_title'].'</h3>
                           <p class="text-justify">'.$program['summary'].'</p>        
                        </div>
                     </div>
                  </div>
                  <hr>
               </div><br>';
            }
            //With Courses Grid View
            elseif($program['Menu_type']=='WCGV' && $program['status']==1)
            {         
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
              
               foreach($courses as $course)
               {
                  if($course['idprogram']==$program['idprogram'] && $course['status']==1)
                  {
                     echo'
                     <div class="col-md-4">
                        <div class="servicebox text-center">
                           <div class="service-icon">
                              <div class="dm-icon-effect-1" data-effect="slide-right">
                              <a href="#" class=""> <img class="proimg" src="'.$course['course_icon_url'].'" style="width:100px;height:100px;border-radius: 50%;"></img> </a>
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
            //No Courses Image Card View DS: 15.09.2019 
            elseif($program['Menu_type']=='NCICV' && $program['status']==1)
            {
               echo '<div class="container">
                        <div class="row justify-content-md-center">
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="widget" data-effect="slide-left">
                                    <div class="card text-black mb-3" style="background-image: linear-gradient(-90deg ,#bdc7c7, #ebeded);">
                                        <div class="card-header"><h5 class="card-title">'.$program['program_title'].'</h5></div>
                                            <div class="card-body" style="height: 450px;">
                                                <img src="'.$program['image_url'].'"  width= 90% style="display: block; margin-left: auto; margin-right: auto;">
                                                <p style="color: black;">'.$program['summary'].'</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                     </div>';
            
            }
?>