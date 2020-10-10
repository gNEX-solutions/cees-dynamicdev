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

    public function getSeats($artID)
    {
        $datas1 = $this->getSpecificCourse($artID);
        foreach ($datas1 as $key=>$data1) {

            echo  $data1['sheets'] ;

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
        $datas1 = $this->getSpecificProgram($artID);
        foreach ($datas1 as $key => $data1) {
            if(isset($data1['main_image'])){
                echo '
                    <div class="container" style="background: #fff; box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);  margin-top: 40px; text-align: center; display: block; padding: 40px;">

                        <h2 style="padding-bottom: 30px;">Certificate Program Overview</h2>
                        <div class="imgview">
                            <img src="data:image/jpg;charset=utf8;base64,' . base64_encode($data1['main_image']) . '" style="max-height: 800px; max-width: 1000px;" />
                        </div>

                    </div>
                ';
            }
        }
    }

    public function ShowCertificateImage($artID)
    {
        $datas1 = $this->getSpecificCourse($artID);
        foreach ($datas1 as $key => $data1) {
            if(isset($data1['image1'])){
                echo '
                    <div class="container" style="background: #fff; box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);  margin-top: 40px; padding-bottom: 30px; text-align: center; display: block; padding: 20px;">

                        <h2 style="padding-bottom: 30px;">Receive and Share Your Certificate</h2>

                        <p>After completing the courses, you’ll receive your Collaborative Leadership certificate of completion via email as a downloadable PDF within 1-2 weeks of completing the final required course. Certificates are configured for uploading and sharing on LinkedIn.</p>
                        <br/>
                        <div class="imgview">
                            <img src="data:image/jpg;charset=utf8;base64,' . base64_encode($data1['image1']) . '" style="max-height: 800px; max-width: 1000px;" />
                        </div>
                    </div>
                ';
            }
        }
    }


    public function ShowEvaluationCriteriaImage($artID)
    {
        $datas1 = $this->getSpecificCourse($artID);
        foreach ($datas1 as $key => $data1) {
            if(isset($data1['image2'])){
                echo '
                    <div class="container" style="background: #fff; box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);  margin-top: 40px; padding-bottom: 30px; text-align: center; display: block; padding: 20px;">

                        <h2 style="padding-bottom: 30px;">Evaluation Criteria</h2>
                        <div class="imgview">
                            <img src="data:image/jpg;charset=utf8;base64,' . base64_encode($data1['image2']) . '" style="max-height: 800px; max-width: 1000px;" />
                        </div>
                    </div>
                ';
            }
        }
    }

    public function ShowLearningExperienceImage($artID)
    {
        $datas1 = $this->getSpecificCourse($artID);
        foreach ($datas1 as $key => $data1) {
            if(isset($data1['image3'])){
                echo '
                    <div class="container" style="background: #fff; box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);  margin-top: 40px; padding-bottom: 30px; text-align: center; display: block; padding: 20px;">

                        <h2 style="padding-bottom: 30px;">Learning Experience</h2>
                        <div class="imgview">
                            <img src="data:image/jpg;charset=utf8;base64,' . base64_encode($data1['image3']) . '" style="max-height: 800px; max-width: 1000px;" />
                        </div>
                    </div>
                ';
            }
        }
    }


    
}

?>