<?php session_start(); ?>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/searchcontent2.css">
</head>
<body>
<div class="wrapper">
<div class="wrappera">
	<div class="header">
		<div class="logo">
			<img src="img/logo.png" alt="logo" style="width:100%;height:100%;">
		</div>
		<div class="wrapperb">
			<ul class="menulist">
				<li class="l-1"><div style="visibility:hidden;" class="blk"></div><a href="#">HOME</a></li>
				<li class="l-2"><div style="visibility:hidden;" class="blk"></div><a href="#">CREATE</a></li>
				<li class="l-3"><div style="visibility:hidden;" class="blk"></div><a href="#">STORE</a></li>
				<li class="l-4"><div style="visibility:hidden;" class="blk"></div><a href="#">CONTACT</a></li>
			</ul>
			<div class="b-space"></div>
			<div class="funtional">
				<div class="search"><a href="#"><i class="fa fa-search fa-lg" aria-hidden="true"></i></a></div>
				<div class="bagget"><a href="#"><i class="fa fa-shopping-bag fa-lg" aria-hidden="true"></i>
					<!--<div class="circle"><p>0</p></div>--></a>
				</div>
			</div>
			<div class="line-1r"></div>
		</div>
	</div>
	<form name="form1" action="searchcontent2.php" method="POST">
	<div class="content">
		<div class="sider">
			<div class="block">
				<div class="b-1"></div>
				<div class="b-2"></div>
			</div>
			<ul class="menusider">
				<li class="s-1"><div class="b"><div style="visibility:hidden;" class="blk2"></div><a href="#">HANDBAGS</a></div></li>
				<li class="s-2"><div class="b"><div style="visibility:hidden;" class="blk2"></div><a href="#">COSMETIC BAGS</a></div></li>
				<li class="s-3"><div class="b"><div style="visibility:hidden;" class="blk2"></div><a href="#">WALLET</a></div></li>
				<li class="s-4"><div class="b"><div style="visibility:hidden;" class="blk2"></div><a href="#">TRAVEL BAGS</a></div></li>
				<li class="s-5"><div class="b"><div style="visibility:hidden;" class="blk2"></div><a href="#">ACCESSORIES</a></div></li>
		</div>
		<div class="incontent">
			<div class="img-content">
				<div class="h1content"><div class="blk3"></div><p class="h1">SEARCH</p></div>
				<div class="h2content">
					<div class="blk4"></div>
					<p class="h2" style="font-size:14px;">SEARCH RESULT</p>
				</div>
			</div>
		</div>
		
		<div class="overflow">
		<?php
			include 'conn.php';

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
			if(!empty($arguments)) {

				$str = implode(' OR ',$arguments);
				$sql = "SELECT * FROM product where " . $str . " ORDER BY product_id DESC";

			}
			if ($conn -> connect_error){
				die("Connection failed: ". $conn -> connect_error);
				# code...
			}else{
				mysqli_set_charset($conn,"utf8");

				$result = $conn->query($sql);
				if ($result->num_rows>0) {
		            while ($row = $result->fetch_assoc()){
		?>
			<div style="margin-left:130px;background-image:url('<?php echo $row["product_img"];?>');background-origin:content-box;background-position:center;background-size: 400px 320px;" class="payment" >
                <div class="lctn">
                    <a href="sellpage.php?product_id=<?php echo $row["product_id"];?>"><div class="dtail"><p class="txtdt">detail</p></div></a>
                    <div class="boxtxtl"><p class="txtsr">SERIE : <?php echo $row["product_name"];?></p></div>
                    <div class="boxtxtl"><p class="txtcolc">COLLECTION : <?php echo $row["product_collection"];?></p></div>
                </div>
                <div class="rctn">
                    <div class="addb"><i class="fa fa-shopping-bag fa-lg" aria-hidden="true"></i></div>
                    <div class="boxtxtr"><p class="txtpri">PRICE : <?php echo $row["product_price"];?> B</p></div>
                </div>
        	</div>
        <?php                        
                        }
            
                        $conn->close();
                  }
            }

        ?>

		</div>
	</div>
	</form>
	<div class="footer">
		<div class="since"><p>© 2010-2011 Ferera all right reserved</p></div>
		<div class="b-space"></div>
		<div class="social">
			<div class="facebook"><a href="#"><i id="clri" class="fa fa-facebook-official fa-lg" aria-hidden="true"></i></a></div>
			<div class="instagram"><a href="#"><i id="clri" class="fa fa-instagram fa-lg" aria-hidden="true"></i></a></div>
		</div>
	</div>
</div>
</div>
<!---->
</body>
</html>