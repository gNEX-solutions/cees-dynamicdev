<?php
//include 'dbh.inc.php';

class CoursesView extends CoursesService
{

    public function ShowTitle($artID)
    {
        $datas1 = $this->getSpecificProgram($artID);
        foreach ($datas1 as $key=>$data1) {

                echo $data1['program_title'] ;
              
               

            
            
        }
    }

    public function ShowSummary($artID)
    {
        $datas1 = $this->getSpecificProgram($artID);
        foreach ($datas1 as $key=>$data1) {

                echo $data1['summary']  ;

        }
    }

    public function ShowContent($artID)
    {
        $datas1 = $this->getSpecificCourse($artID);
        foreach ($datas1 as $key=>$data1) {

                echo 
                
               
                 $data1['description1'] . '<br/> <br/>'
               
                . $data1['description2'] ;
            
        }
    }

    public function getFee($artID)
    {
        $datas1 = $this->getSpecificCourse($artID);
        foreach ($datas1 as $key=>$data1) {

                echo 'Rs.'. $data1['course_fee'] ;
            
        }
    }
    
    public function getcourseDuration($artID)
    {
        $datas1 = $this->getSpecificCourse($artID);
        foreach ($datas1 as $key=>$data1) {

                echo  $data1['course_duration'] ;
            
        }
    }
    
    public function getLecturer($artID)
    {
        $datas1 = $this->getSpecificCourse($artID);
        foreach ($datas1 as $key=>$data1) {

                echo  $data1['lecturer'] ;
            
        }
    }
    public function ShowImage($artID)
    {
        $datas1 = $this->getSpecificProgram($artID);
        foreach ($datas1 as $key=>$data1) {
            if(isset($data1['image_url'])){
                echo '
                
                <img src=' . $data1['image_url'] . ' style=" width: 100%; max-width: 300px; height: auto; " />

                ';
            }
              
            
        }
    }

    public function checkOverviewImage($artID)
    {
        $datas1 = $this->getSpecificCourse($artID);
        foreach ($datas1 as $key => $data1) {
            if(isset($data1['image1'])){
                return true;
            }
            else {
                return false;
            }
        }
    }


    public function ShowProgramOverviewImage($artID)
    {
        $datas1 = $this->getSpecificCourse($artID);
        foreach ($datas1 as $key => $data1) {
            if(isset($data1['image1'])){
                echo '
                    <div class="imgview">
                        <img src="data:image/jpg;charset=utf8;base64,' . base64_encode($data1['image1']) . '" style="max-height: 800px; max-width: 1000px;" />
                    </div>
                ';
            }
        }
    }

    public function ShowCertificateImage($artID)
    {
        $datas1 = $this->getSpecificCourse($artID);
        foreach ($datas1 as $key => $data1) {
            if(isset($data1['image2'])){
                echo '
                    <div class="imgview">
                        <img src="data:image/jpg;charset=utf8;base64,' . base64_encode($data1['image2']) . '" style="max-height: 800px; max-width: 1000px;" />
                    </div>
                ';
            }
        }
    }


    public function ShowEvaluationCriteriaImage($artID)
    {
        $datas1 = $this->getSpecificCourse($artID);
        foreach ($datas1 as $key => $data1) {
            if(isset($data1['image3'])){
                echo '
                    <div class="imgview">
                        <img src="data:image/jpg;charset=utf8;base64,' . base64_encode($data1['image3']) . '" style="max-height: 800px; max-width: 1000px;" />
                    </div>
                ';
            }
        }
    }

    public function ShowLearningExperienceImage($artID)
    {
        $datas1 = $this->getSpecificCourse($artID);
        foreach ($datas1 as $key => $data1) {
            if(isset($data1['image4'])){
                echo '
                    <div class="imgview">
                        <img src="data:image/jpg;charset=utf8;base64,' . base64_encode($data1['image4']) . '" style="max-height: 800px; max-width: 1000px;" />
                    </div>
                ';
            }
        }
    }


    
}

?>