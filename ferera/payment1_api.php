<?php
session_start();
include 'conn.php';
	
	$product_id = $_POST["product_id"];
	$fname = $_POST["fname"];
	$lname = $_POST["lname"];
	$postcode = $_POST["postcode"];
	$phone = $_POST["phone"];
	$address = $_POST["address"];

		//$str = implode(' OR ',$arguments);
		/*$sql = "INSERT INTO order_by(fname,lname,pcode,phone,address) 
        		VALUES ('".$fname."','".$lname."','".$postcode."','".$phone."','".$address."');";
		echo $sql;*/
		//$sql2 = $sql = "SELECT product.*,pimgplus.* FROM product,pimgplus WHERE product.'".$product_id."' = pimgplus.'".$product_id."'";
		//echo $sql2;
		$x = checkinsertform($conn,$fname,$lname,$postcode,$phone,$address);

		if ($x == 1) {
			
			$_SESSION["product_id"] = $product_id;
        	header("location:payment2.php");

    	}else{

        	header("location:payment1.php");
        //echo $sql;
        //session_write_close();
    	}

?>
<?php 
    function checkinsertform($conn,$fname,$lname,$postcode,$phone,$address){
        $sql = "INSERT INTO order_by(fname,lname,pcode,phone,address) 
        		VALUES ('".$fname."','".$lname."','".$postcode."','".$phone."','".$address."');";

        $result = $conn->query($sql);

        if ($result) {

        	//echo $sql;
            return 1;
    
        }else{
            
            return 0;
        }
    }

 ?>