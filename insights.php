<?php 

function showInsights(){
    $insight= new insights();
    $data=$insight->getInsights();
    

    echo '<style>';
    if(isset($data[0])){
    echo ' .image1{
    background-image: url("'.$data[0]['url'].'");}';
    }
     if(isset($data[1])){
    echo ' .image2{
    background-image: url("'.$data[1]['url'].'");}';
    }
    if(isset($data[2])){
        echo ' .image3{
        background-image: url("'.$data[2]['url'].'");}';
    }
     if(isset($data[3])){
    echo ' .image4{
    background-image: url("'.$data[3]['url'].'");}';
    }
    if(isset($data[4])){
        echo ' .image4{
        background-image: url("'.$data[4]['url'].'");}';
    }
   
    echo '</style>';
    echo '<div class="image1 left-part col-md-6">';

    if(isset($data[0])){
    
        echo '<div onclick="location.href=\'index.php\'"> 
        <h4 >
            '.$data[0]['heading'].'
            <br>
            <span id="date-section">
                July 17, 2019  Change & Crisis Leadership, Creativity & Innovation
            </span>
        </h4>
    
        <p>
        '.$data[0]['summary'].'   
        </p>
        <button id="button1">See more articles</button>
    </div>';
   
    }
    echo '</div>';
    echo '<div class="right-part col-md-6">';
    if(isset($data[1])){
        echo '<div  class="row" >
        <div class="col-md-3 col-sm-3 col-lg-3 image2">

        </div>
        <div class="col-md-9 col-sm-9 col-lg-9" style="background-color: #f5f2f2;">
            <h5> '.$data[1]['heading'].' </h5>
            <p>
            '.$data[1]['summary'].'   
            </p>  
        </div>  
    </div >';
    }
    
    if(isset($data[2])){
     echo    '<div class="row">
        <div class="col-md-3 col-sm-3 col-lg-3 image3">

        </div>
        <div class="col-md-9 col-sm-9 col-lg-9" >
        <h5>  '.$data[2]['heading'].'</h5>
        <p>
        '.$data[2]['summary'].'   
            </p>  
        </div> 
    </div>';
    }        

    if(isset($data[3])){
      echo   '<div class="row" >
        <div class="col-md-3 col-sm-3 col-lg-3 image4">

        </div>
        <div class="col-md-9 col-sm-9 col-lg-9" style="background-color: #f5f2f2;">
        <h5> '.$data[3]['heading'].' </h5>
        <p>
        '.$data[3]['summary'].'   
            </p>  
        </div> 
    </div>';

    }
             
    if(isset($data[4])){
       echo '<div class="row" >
        <div class="col-md-3 col-sm-3 col-lg-3 image5" >

        </div>
        <div class="col-md-9 col-sm-9 col-lg-9" >
        <h5>  '.$data[4]['heading'].'</h5>
        <p>
        '.$data[4]['summary'].'   
            </p>  
        </div> 
    </div>';
    
    }
               
    if(isset($data)){
        echo '<div class="row">
        <button id="button1">See more articles</button>
    </div>';
    }         
                
}


?>