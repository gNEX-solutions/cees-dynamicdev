<?php 

function showInsights(){
    $insight= new insights();
    $data=$insight->getInsights();
    

    echo '<style>';
    if(isset($data[0])){
    echo ' .image1{
    background-image: url("assets/images/article-512.png");}';
    }
     if(isset($data[1])){
    echo ' .image2{
    background-image: url("assets/images/article-512.png");
    background-size: auto 100%;}';
    }
    if(isset($data[2])){
        echo ' .image3{
        background-image: url("assets/images/article-512.png");}';
    }
     if(isset($data[3])){
    echo ' .image4{
    background-image: url("assets/images/article-512.png");}';
    }
    if(isset($data[4])){
        echo ' .image5{
        background-image: url("assets/images/article-512.png");}';
    }
   
    echo '</style>';
    echo '<div class="image1 left-part col-md-6">';

    if(isset($data[0])){
        //onclick="location.href=\'index.php\'"
        echo '<div > 
        <br>
        <br>
        <h4 > 
            <a href="researchView.php?artID='.$data[0]['idblog_posts'].'" target="_blank">
            '.$data[0]['title'].'            
            <br>
            <span id="date-section">
                Published on - ' . $data[0]['modified_at'] . '
            </span>
        </h4>
    


        </a>
        <button id="button1"  onclick= "window.open(\'researchMore.php\',\'_blank\')">See more articles</button>
    </div>';
   
    }
    echo '</div>';
    echo '<div class="right-part col-md-6">';
    if(isset($data[1])){
        echo '<div  class="row" >
        <div class="col-md-3 col-sm-3 col-lg-3 image2">

        </div>
        <br>
        <br>
        <div class="col-md-9 col-sm-9 col-lg-9" style="background-color: #f5f2f2;">
            <a href="researchView.php?artID='.$data[1]['idblog_posts'].'" target="_blank">
            <h5> '.$data[1]['title'].' </h5>
            <p>
            Published on - ' . $data[1]['modified_at'] . '   
            </p> 
            </a> 
        </div>  
    </div >';
    }
    
    if(isset($data[2])){
     echo    '<div class="row">
        <div class="col-md-3 col-sm-3 col-lg-3 image3">

        </div>
        <div class="col-md-9 col-sm-9 col-lg-9" >
        <a href="researchView.php?artID='.$data[2]['idblog_posts'].'" target="_blank">
        <h5>  '.$data[2]['title'].'</h5>
        <p>
        Published on - ' . $data[2]['modified_at'] . '   
            </p>  
        </a>
        </div> 
    </div>';
    }        

    if(isset($data[3])){
      echo   '<div class="row" >
        <div class="col-md-3 col-sm-3 col-lg-3 image4">

        </div>
        <div class="col-md-9 col-sm-9 col-lg-9" style="background-color: #f5f2f2;">
        <a href="researchView.php?artID='.$data[3]['idblog_posts'].'" target="_blank">
        <h5> '.$data[3]['title'].' </h5>
        <p>
        Published on - ' . $data[3]['modified_at'] . '   
            </p>  
        </a>    
        </div> 
    </div>';

    }
             
    if(isset($data[4])){
       echo '<div class="row" >
        <div class="col-md-3 col-sm-3 col-lg-3 image5" >

        </div>
        <div class="col-md-9 col-sm-9 col-lg-9" >
        <a href="researchView.php?artID='.$data[4]['idblog_posts'].'" target="_blank">
        <h5>  '.$data[4]['title'].'</h5>
        <p>
        Published on - ' . $data[4]['modified_at'] . '   
        </p>
        </a>  
        </div> 
    </div>';
    
    }
    echo '</div>';
               
    if(isset($data)){

    }         
                
}


?>