<?php
include '../../Model/dbh.inc.php';
$newConnection= new dbh;
$conn=$newConnection->connect();

if(isset($_POST['title'])){

    $title=$_POST['title'];
    $content=$_POST['article'];
    $status=1;
    $target_dir = "../../articles/";
    $target_file = $target_dir.$title.'.php';

    if (file_exists($target_file)) {
        echo "Sorry, file already exists.<br>";
        $uploadOk = 0;
    }
    
    if(save_html_to_file($content,'../../articles/'.$title.'.php')){
        // $stmt= $conn->prepare("INSERT INTO blog_posts(html_string,status) VALUES (?,?)");
        // $stmt->bind_param("si",$title,$status);
        // $stmt->execute();
    }else{

    }
    

}
function save_html_to_file($content, $path){
    return (bool) file_put_contents($path, $content);
 }

$conn->close();


?>