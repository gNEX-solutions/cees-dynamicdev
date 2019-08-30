<?php

//upload.php

if(isset($_POST["image"]))
{
	$data = $_POST["image"];

	
	$image_array_1 = explode(";", $data);

	
	$image_array_2 = explode(",", $image_array_1[1]);

	
	$data = base64_decode($image_array_2[1]);

	$imageName = time() . '.jpg';

	$path = "../../assets/images/members/".$imageName;

	file_put_contents($path, $data);

	$imgpath = "assets/images/members/".$imageName;

	echo '<img id="image_uploaded" src="../assets/images/members/'.$imageName.'" class="img-thumbnail" />';
	echo '<input id="path" name="path" type="hidden" value="'.$imgpath.'">';
	//echo $path;

}

?>