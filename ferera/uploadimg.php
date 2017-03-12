<html>

<head>
    <meta charset="utf-8">
    <title>index</title>
    <script src="js/jquery-3.1.1.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <script>
        function action(uid,img)
        {
            //alert(fname);
            document.getElementById("product_id").value=uid;
            document.getElementById("product_img").value=img;
        }
        /*function submit_data(){
            //alert("Update");
            var check = false;
            if(isNaN(document.getElementById("product_id").value)){
                check = false;
                alert("กรุณากรอก product_id เป็นตัวเลข")
            }else{
                check = true;
            }
            return check;
        }*/
    </script>
</head>

<body>
<hr>
    <div class="header">

    </div>
<div class="warpper">
    
<table border="1">
    <tr style="background-color: #ff6600;text-align: center;font-weight: bold font-size: 30px ;color: #fff;">
        <td>IMG</td>
    </tr>
<?php
    include "conn.php";
    $sql = "SELECT * FROM product";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {

            echo "<tr>";?>
                <td><img src="<?php echo $row["product_img"];?>" alt="" height="100"></td>
                <td><p><?php echo $row["product_id"];?></p></td>
                <td><p><?php echo $row["product_name"];?></p></td>
                <td><p><?php echo $row["product_category"];?></p></td>
                <td><p><?php echo $row["product_collection"];?></p></td>
                <td><input type="button" value="เลือก" onclick="action(
                    <?php echo $row["product_id"];?>,
                    '<?php echo $row["product_img"];?>'
                    );"/></td>
            </tr>
<?php
        }
    } else {
        echo "0 results";
    }
    $conn->close();
?></table>
    </div>
<hr>
<form action="uploadimg_api.php" method="POST" enctype="multipart/form-data">
    <div class="footer">
    <table>
        <tr>
            <td>id:</td><td><input type="text" id="product_id" name="product_id"/></td>
        </tr>
        <tr>
            <td>img:</td><td><input type="file" name="fileToUpload" id="fileToUpload"/></td>
        </tr>
        <tr>
            <td></td><td><input type="submit" onclick="return submit_data();" value="Update" name="submit"/></td>
        </tr>

    </table>
    </div>
    
</form>