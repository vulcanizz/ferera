<?php
session_start();
include 'conn.php';
	
	$product_id = $_POST["product_id"];
	$nameholder = $_POST["nameholder"];
	$email = $_POST["email"];
	$ccv = $_POST["ccv"];
	$expiry = $_POST["expiry"];
	$cardnumber = $_POST["cardnumber"];

		//$str = implode(' OR ',$arguments);
		//$sql2 = $sql = "SELECT product.*,pimgplus.* FROM product,pimgplus WHERE product.'".$product_id."' = pimgplus.'".$product_id."'";
		//echo $sql2;
		$x = checkinsertform($conn,$nameholder,$email,$ccv,$expiry,$cardnumber);

		if ($x == 1) {

			$_SESSION["product_id"] = $product_id;
        	$last_id = $_SESSION["last_id"];
        	header("location:payment3.php");
        	//$sql = "SELECT * FROM order_by WHERE order_id = '".$last_id."'";

    	}else{

        	header("location:payment2.php");
        	//echo $sql;
        //session_write_close();
    	}

?>
<?php 
    function checkinsertform($conn,$nameholder,$email,$ccv,$expiry,$cardnumber){
        $sql = "INSERT INTO cardinfo(nameholder,email,ccv,expiry,cardnumber) 
        		VALUES ('".$nameholder."','".$email."','".$ccv."','".$expiry."','".$cardnumber."');";

        $result = $conn->query($sql);

        if ($result) {

        	$last_id = $conn->insert_id;
        	$_SESSION["last_id"] = $last_id;
        	
            return 1;
    
        }else{
            //echo $sql;
            return 0;
        }
    }

 ?>
 