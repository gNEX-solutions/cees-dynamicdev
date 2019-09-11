<?php
//include 'dbh.inc.php';

class researchService extends researchWindow
{

    public function ShowResearch_List()
    {
        $datas = $this->getAllResearches();
        foreach ($datas as $key=>$data) {

            //$url = explode("/", $data['url']);            

                // echo '<div class="grid-flex hideme">
                //     <div class="col col-image">
                //     <img src="assets/images/' . $url[2] . ' " alt="" class="mx-auto d-block"  style="max-height: 300px; max-width: 300px;"/>
                //     </div>
                //     <div class="col col-text">
                //     <div class="Aligner-item text-left">
                //         <h3 class="text-left display-2 font-weight-normal"><a href="researchView.php?artID='.$data['idresearches'].'">' . $data['heading'] . '</a></h3>
                //         <p> Published on - ' . $data['published_date'] . '</p>
                //         <br>
                //         <p class="text-justify">' . $data['summary'] . '</p>
                //     </div>
                //     </div>
                //     </div>
            
                //     <hr>';

                    echo '<div class="grid-flex hideme">
                    <div class="col col-image">
                    <img src="assets/images/article-512.png " alt="" class="mx-auto d-block"  style="max-height: 300px; max-width: 300px;"/>
                    </div>
                    <div class="col col-text">
                    <div class="Aligner-item text-left">
                        <h3 class="text-left display-2 font-weight-normal"><a href="researchView.php?artID='.$data['idblog_posts'].'">' . $data['title'] . '</a></h3>
                        <p> Published on - ' . $data['modified_at'] . '</p>
                        <br>
                        
                    </div>
                    </div>
                    </div>
            
                    <hr>';
            
        }
    }

    public function ShowResearch_Article($artID)
    {
        $datas1 = $this->getSpecificResearch($artID);
        foreach ($datas1 as $key=>$data1) {

            //$url1 = explode("/", $data1['url']);            

                echo '
                
                <div class="carousel-inner">
                <img style="  height: 100%;background-position: center;background-repeat: no-repeat;background-size: cover;" src="assets\images\blue-header-1.jpg" alt="" title="">
                <div class="carousel-caption">
                  <h5>' . $data1['title'] . '</h5>
                  <p>Published on - ' . $data1['modified_at'] . '</p>
                </div>
                </div>

                <section class="header1 cid-ruXI5S6ubv" id="header16-1l">

                <div class="container">

                    '. $data1['htmlString'] .'
                </div>
                </section>

                ';
            
        }
    }
}

?>