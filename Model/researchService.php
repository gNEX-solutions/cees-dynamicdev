<?php
//include 'dbh.inc.php';

class researchService extends researchWindow
{

    public function ShowResearch_List()
    {
        $datas = $this->getAllResearches();
        foreach ($datas as $key=>$data) {

            $url = explode("/", $data['imageUrl']);

            if(isset($url[2])){
                
                }            
            else{
                $url[2] = "article-512.png"; 
            }

                // echo '<div class="grid-flex hideme">
                //     <div class="col col-image">
                //     <img src="assets/coverImages/' . $url[2] . ' " alt="" class="mx-auto d-block"  style="max-height: 300px; max-width: 300px;"/>
                //     </div>
                //     <div class="col col-text">
                //     <div class="Aligner-item text-left">
                //         <h3 class="text-left display-2 font-weight-normal"><a href="researchView.php?artID='.$data['idblog_posts'].'">' . $data['title'] . '</a></h3>
                //         <p> Published on - ' . $data['created_at'] . '</p>
                //         <br>
                //         <p class="text-justify">' . $data['summary'] . '</p>
                //     </div>
                //     </div>
                //     </div>
            
                //     <hr>';

                    echo '<div class="grid-flex hideme">
                    <div class="table-responsive">
                    <table class="table" style="width:100%">
                        <tr>
                            <th><img src="assets/coverImages/' . $url[2] . ' " alt="" class="mx-auto d-block"  style="padding:50px; max-height: 300px; max-width: 400px;"/> </th>
                            <th> <h3 class="text-left display-2 font-weight-normal"><a href="researchView.php?artID='.$data['idblog_posts'].'">' . $data['title'] . '</a></h3>
                            <p> Published on - ' . $data['created_at'] . '</p>
                            <br>
                            <p class="text-justify">' . $data['summary'] . '</p></th>
                        </tr>
                    </table>
                    </div>
                    </div>
                    ';
            
        }
    }

    public function ShowResearch_Article($artID)
    {
        $datas1 = $this->getSpecificResearch($artID);
        foreach ($datas1 as $key=>$data1) {

            $url1 = explode("/", $data1['imageUrl']);
            $displayImage = null;
            if(isset($url1[2])){
                $displayImage = "assets/images/blue-header-1.jpg";//$data1['imageUrl'];
            }            
            else{
                $url1[2] = "article-512.png"; 
                $displayImage = "assets/images/blue-header-1.jpg";
            }

               $modifedHTML  =  str_replace('articleImages','AdminPanel/blog/articleImages',$data1['htmlString']); //modifying as compatible with new research view page - **Rasitha**

                echo '
                
                <div class="carousel-inner">
                    
                    <div style="overflow:hidden; height: 350px;">
                    <img style="height: fit-content;width: 100%;background-position: center;background-repeat: no-repeat;background-size: cover;" src="'. $displayImage.'" alt="" title="">
                    </div>

                    <div class="carousel-caption">
                        <h5>' . $data1['title'] . '</h5>
                        <p>Published on - ' . $data1['created_at'] . '</p>
                        <br>
                    </div>
                </div>

                <section class="header1 cid-ruXI5S6ubv" id="header16-1l">

                <div class="container">


                    <p class="text-justify">' . $modifedHTML . '</p>
                </div>
                </section>

                ';
            
        }
    }
}

?>