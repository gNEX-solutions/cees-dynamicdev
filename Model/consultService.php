<?php
//include 'dbh.inc.php';

class consultService extends consultWindow
{

    public function ShowConsult_List()
    {
        $datas = $this->getAllConsultations();
        foreach ($datas as $key=>$data) {

            $url = explode("/", $data['url']);

            $even = $key%2;

            if ($even == 0) {

                echo '<div class="grid-flex hideme">
                    <div class="col col-image">
                    <img src="assets/images/consultancy/' . $url[2] . ' " alt="" class="mx-auto d-block"  style="max-height: 450px; max-width: 450px;"/>
                    </div>
                    <div class="col col-text">
                    <div class="Aligner-item text-left">
                        <h3 class="text-left display-2 font-weight-normal">' . $data['heading'] . '</h3>
                        <p class="text-justify">' . $data['summary'] . '</p>
                    </div>
                    </div>
                    </div>
            
                    <hr>';
            } elseif ($even == 1) {
                echo '<div class="grid-flex hideme">
                    <div class="col col-image">
                    <img src="assets/images/consultancy/' . $url[2] . ' " alt="" class="mx-auto d-block" style="max-height: 450px; max-width: 450px;" />
                    </div>
                    <div class="col col-text col-left" style="margin-left:75px;">
                    <div class="Aligner-item">
                        <h3 class="text-left display-2 font-weight-normal">' . $data['heading'] . '</h3>
                        <p class="text-justify">' . $data['summary'] . '</p>
                    </div>
                    </div>
                    </div>

                    <hr>';
            } else {
                echo '<div class="grid-flex hideme">
                <div class="col col-image">
                <img src="assets/images/consultancy/' . $url[2] . ' " alt="" class="mx-auto d-block" style="max-height: 450px; max-width: 450px;" />
                </div>
                <div class="col col-text">
                <div class="Aligner-item text-left">
                    <h3 class="text-left display-2 font-weight-normal">' . $data['heading'] . '</h3>
                    <p class="text-justify">' . $data['summary'] . '</p>
                </div>
                </div>
                </div>
        
                <hr>';
            }
        }
    }
}
