<?php
session_start();
include "conn.php";

$product_id = $_SESSION["product_id"];

if ($conn->connect_error) {

    die("Connection failed: ".$conn->connect_error);

}else{


    $x = checkinsertform($conn,$product_id);

    if ($x == 1) {

        
        header("location:payment1.php");
        //echo $sql;

    } else if ($x == 0) {

        header("location:sellpage.php");
        

    }

    $conn->close();
}
?>


<?php 
    function checkinsertform($conn,$product_id){
        $sql = "SELECT * FROM product WHERE = '".$product_id."'";

        $result = $conn->query($sql);

        if ($result) {
        	//$product_id = $conn->insert_id;
        	$_SESSION["product_id"] = $product_id;
        	//echo $sql;
            return 1;
    
        }else{
            
            return 0;
        }
    }
/*"INSERT INTO job(job_category,career,job_type,job_location,company_district,career_level,job_description,salary_min,salary_max,number_position) 
        		VALUES ('".$conn->real_escape_string($jobcat)."',
				'".$conn->real_escape_string($jobpos)."',
				'".$conn->real_escape_string($jobtype)."',
				'".$conn->real_escape_string($jobloc)."',
				'".$conn->real_escape_string($jobdis)."',
				'".$conn->real_escape_string($careerlvl)."',
				'".$conn->real_escape_string($jobdesc)."',
				'".$conn->real_escape_string($sal1)."',
				'".$conn->real_escape_string($sal2)."',
				'".$conn->real_escape_string($numg)."');";*/

 ?>

