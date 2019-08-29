<?php
//include 'dbh.inc.php';

class researchService extends researchWindow
{

    public function ShowResearch_List()
    {
        $datas = $this->getAllResearches();
        foreach ($datas as $key=>$data) {

            $url = explode("/", $data['url']);            

                echo '<div class="grid-flex hideme">
                    <div class="col col-image">
                    <img src="assets/images/consultancy/' . $url[2] . ' " alt="" class="mx-auto d-block"  style="max-height: 300px; max-width: 300px;"/>
                    </div>
                    <div class="col col-text">
                    <div class="Aligner-item text-left">
                        <h3 class="text-left display-2 font-weight-normal">' . $data['heading'] . '</h3>
                        <p> Published on - ' . $data['published_date'] . '</p>
                        <br>
                        <p class="text-justify">' . $data['summary'] . '</p>
                    </div>
                    </div>
                    </div>
            
                    <hr>';
            
        }
    }
}

?>