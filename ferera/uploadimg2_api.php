<?php 
	//define folder to keep to picture or image
	$product_id = $_POST["product_id"];

	include "conn.php";

	$target_folder = "img/";
	$target_fileName = $target_folder.basename($_FILES["fileToUpload"]["name"]);
	echo $target_fileName;

	$imageFileType = pathinfo($target_fileName.PATHINFO_EXTENSION);

	$uploadStatus = 0;
	print_r($imageFileType);
	
	if($imageFileType == "jpg" || $imageFileType == "gif" || $imageFileType == "jpg4"){
		$uploadStatus = 1;

	}else{
		$uploadStatus = 0;
		echo "Only JPG can be upload";
	}

	if($_FILES["fileToUpload"]["size"] <= 800000){
		$uploadStatus = 1;
	}else{
		$uploadStatus = 0;
	}


	if(isset($_POST["submit"]) && $uploadStatus == 1){
		$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
		if($check !== false) {
	        // echo "File is an image."."<br>";
	        // echo $_FILES["fileToUpload"]["name"]."<br>";
	        // echo $target_folder."<br>";

	        if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_fileName)){
	        	echo "This file was uploaded.";

	        	echo "<img src=".$target_fileName.">";

	        	include "conn.php"; 
				$sql = "UPDATE product SET product_img='".$target_fileName."' WHERE product_id='".$_POST["product_id"]."'";
				echo $sql;

				
				$result = $conn->query($sql);
				header("Location:uploadimg.php");

	        }else{
	        	echo "This file was not uploaded.";
	        }
	    } else {
	        echo "File is not an image.";
	    }
	}

 ?>