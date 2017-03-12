<?php
include 'conn.php';
	
		echo $sql2;
	if(isset($_POST["category1"])){
		$arguments[] = "product_category LIKE '%PURSE%'";
	}
	if(isset($_POST["category2"])){
		$arguments[] = "product_category LIKE '%WALLET%'";
	}
	if(isset($_POST["category3"])){
		$arguments[] = "product_category LIKE '%HAT%'";
	}
	if(isset($_POST["category4"])){
		$arguments[] = "product_category LIKE '%CLOTH%'";
	}
	if(isset($_POST["category5"])){
		$arguments[] = "product_category LIKE '%ACCESSORIE%'";
	}
	#end of category-------
	if(isset($_POST["serie1"])){
		$arguments[] = "product_category LIKE '%00X%'";
	}
	if(isset($_POST["serie2"])){
		$arguments[] = "product_category LIKE '%00Y%'";
	}
	if(isset($_POST["serie3"])){
		$arguments[] = "product_category LIKE '%00Z%'";
	}
	if(isset($_POST["serie4"])){
		$arguments[] = "product_category LIKE '%00A%'";
	}
	if(isset($_POST["serie5"])){
		$arguments[] = "product_category LIKE '%00S%'";
	}
	#end of serie-------
	if(isset($_POST["collection1"])){
		$arguments[] = "product_category LIKE '%WINTER%'";
	}
	if(isset($_POST["collection2"])){
		$arguments[] = "product_category LIKE '%SUMMER%'";
	}
	if(isset($_POST["collection3"])){
		$arguments[] = "product_category LIKE '%FLORA%'";
	}
	if(isset($_POST["collection4"])){
		$arguments[] = "product_category LIKE '%ANIMA%'";
	}
	if(isset($_POST["collection5"])){
		$arguments[] = "product_category LIKE '%LIMITED%'";
	}
	#end of collection-------
	if(empty($arguments)){

		exit();	
		
	}
	else if(!empty($arguments)) {

		$str = implode(' OR ',$arguments);
		$sql = "SELECT * FROM product where " . $str . " ORDER BY product_id DESC";
		echo $sql;
		$sql2 = $sql = "SELECT product.*,pimgplus.* FROM product,pimgplus WHERE product.'".$product_id."' = pimgplus.'".$product_id."'";
		echo $sql2;
	}
	if ($conn -> connect_error){
		die("Connection failed: ". $conn -> connect_error);
		# code...
	}else{
		mysqli_set_charset($conn,"utf8");

		$result = $conn->query($sql);
		if ($result->num_rows>0) {
            while ($row = $result->fetch_assoc()){
				echo $row["product_name"];
				echo "<br>";
			}
		}else{
			echo "0 results";
			echo $sql;
		}

		$conn->close();
	}
?>