<?php
//include 'dbh.inc.php';

class BusinessPartneringView extends businessPartneringService
{

    private $data1;

    function __construct($artID)
    {
        $this->data1 =  $this->getSpecificBusinessPartner($artID);
    }


    public function ShowTitle()
    {

        foreach ($this->data1 as $key => $data1) {

            echo '<div class="carousel-inner">
                <img style="  height: 100%;background-position: center;background-repeat: no-repeat;background-size: cover;" src="assets/images/blue-header-1.jpg" alt="" title="">
                <div class="carousel-caption">';
            if (isset($data1['program_title'])) {
                echo '<h5 style="color: white;">' . $data1['program_title'] . '</h5>';
            }
            if (isset($data1['summary'])) {
                echo '<p>' . $data1['summary'] . '</p>';
            }
            echo '</div>
                </div>';
        }
    }


    public function ShowContent()
    {

        foreach ($this->data1 as $key => $data1) {


            if (isset($data1['description1'])) {
                echo '<div class="content">'
                    . $data1['description1'] . '
                </div>';
            }
            if (isset($data1['description2'])) {
                echo    '<div class="content">'
                    . $data1['description2'] . '
                </div>';
            }
            if (isset($data1['description3'])) {
                echo    '<div class="content">'
                    . $data1['description3'] . '
                </div>';
            }
        }
    }

    public function ShowMain_image()
    {

        foreach ($this->data1 as $key => $data1) {
            if (isset($data1['main_image'])) {
                echo '
                <div class="container right-contents" style="padding-bottom: 20px;  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);">
                <img src="data:image/jpg;charset=utf8;base64,' . base64_encode($data1['main_image']) . '" style=" width: 100%; max-width: 300px; height: auto; " />
                </div>
                ';
            }
        }
    }

    public function ShowImage1()
    {

        foreach ($this->data1 as $key => $data1) {
            if (isset($data1['image1'])) {
                echo '
                    <div class="container right-contents" style="padding-bottom: 20px;  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);">
                    <img src="data:image/jpg;charset=utf8;base64,' . base64_encode($data1['image1']) . '" style=" width: 100%; max-width: 300px; height: auto; " />
                    </div>
                    ';
            }
        }
    }

    public function ShowImages()
    {

        foreach ($this->data1 as $key => $data1) {

            if (isset($data1['image2'])) {
                echo '<div class="content"> <img src="data:image/jpg;charset=utf8;base64,' . base64_encode($data1['image2']) . '" style=" width: 100%;  height: auto; " />
            </div>';
            }
            if (isset($data1['image3'])) {
                echo '<div class="content"> <img src="data:image/jpg;charset=utf8;base64,' . base64_encode($data1['image3']) . '" style=" width: 100%;  height: auto; " />
            </div>';
            }
            if (isset($data1['image4'])) {
                echo '<div class="content"> <img src="data:image/jpg;charset=utf8;base64,' . base64_encode($data1['image4']) . '" style=" width: 100%;  height: auto; " />
            </div>';
            }
        }
    }
}
