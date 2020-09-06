<?php
//include 'dbh.inc.php';

class BusinessPartneringView extends businessPartneringService
{

    public function ShowTitle($artID)
    {
        $datas1 = $this->getSpecificBusinessPartner($artID);
        foreach ($datas1 as $key=>$data1) {

                echo '
                
                <div class="carousel-inner">
                <img style="  height: 100%;background-position: center;background-repeat: no-repeat;background-size: cover;" src="assets/images/blue-header-1.jpg" alt="" title="">
                <div class="carousel-caption">
                  <h5 style="color: white;">' . $data1['program_title'] . '</h5>
                  <p>' . $data1['summary'] . '</p>
                </div>
                </div>

                ';
            
        }
    }


    public function ShowContent($artID)
    {
        $datas1 = $this->getSpecificBusinessPartner($artID);
        foreach ($datas1 as $key=>$data1) {

                echo '
                
                <div class="content">'
                . $data1['description1'] . '
                </div>
                <div class="content">'
                . $data1['description2'] . '
                </div>
                <div class="content">'
                . $data1['description3'] . '
                </div>

                ';
            
        }
    }

    public function ShowImage($artID)
    {
        $datas1 = $this->getSpecificBusinessPartner($artID);
        foreach ($datas1 as $key=>$data1) {
            if(isset($data1['image_url'])){
                echo '
                <div class="container right-contents" style="padding-bottom: 20px;  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);">
                <img src=' . $data1['image_url'] . ' style=" width: 100%; max-width: 300px; height: auto; " />
                </div>
                ';
            }
              
            
        }
    }

    public function ShowImage2($artID)
    {
        $datas1 = $this->getSpecificBusinessPartner($artID);
        foreach ($datas1 as $key=>$data1) {
                if(isset($data1['image'])){
                    echo '
                    <div class="container right-contents" style="padding-bottom: 20px;  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);">
                    <img src=' . $data1['image'] . ' style=" width: 100%; max-width: 300px; height: auto; " />
                    </div>
                    ';
                }
               
            
        }
    }
}

?>