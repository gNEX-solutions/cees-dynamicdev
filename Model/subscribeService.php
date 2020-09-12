<?php

	include 'dbh.inc.php';

	$dbh = new dbh();


	$conn = $dbh->connect();
	$method;

	//setting method
    if(!empty($_POST['method']))
    {
        $method = $_POST['method'];

        $email = $_POST['email'];

        if($method == "subscribe"){
        		$query = "INSERT INTO subscribers (email) values ('" . $email ."')";
        		try{
        			mysqli_query($conn, $query);
                    //$statement = $conn->prepare($query);
                   // $statement->execute();
                }catch (PDOException $ex){
                    echo $ex;
                }
            
		}
    }

	
?>