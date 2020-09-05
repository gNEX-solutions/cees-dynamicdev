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

                echo '
                
                <img src=' . $data1['image_url'] . ' style=" width: 100%; max-width: 300px; height: auto; " />

                ';
            
        }
    }
}

?>