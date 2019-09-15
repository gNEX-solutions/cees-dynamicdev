<?php
 session_start();

 if(isset($_SESSION['User']))
 {
include '../../Model/dbh.inc.php';
$newConnection= new dbh;
$conn=$newConnection->connect();
$id=$_GET['id'];

      $stmt1= $conn->prepare("UPDATE blog_posts SET status=0 WHERE idblog_posts=?");
      $stmt1->bind_param("i",$id);
      $stmt1->execute();



$conn->close();
unset($newConnection);
}
else
{
    header("location:../login.php");
}
?>