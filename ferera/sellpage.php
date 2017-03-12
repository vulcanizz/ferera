<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/sellpage.css">
	<style>
		.demo {cursor:pointer}
	</style>
	<script>

		var slideIndex = 1;
		showDivs(slideIndex);

		function plusDivs(n) {
				showDivs(slideIndex += n);
		}

		function currentDiv(n) {
				showDivs(slideIndex = n);
		}

		function showDivs(n) {
			var i;
			var x = document.getElementsByClassName("mySlides");
			var dots = document.getElementsByClassName("demo");
			if(n > x.length) {slideIndex = 1}
			if(n < 1) {slideIndex = x.length}
			for(i = 0; i < x.length; i++) {
				x[i].style.display = "none";
			}
			for(i = 0; i < dots.length; i++) {
				dots[i].className = dots[i].className.replace(" imgopac", "");
			}
				x[slideIndex-1].style.display = "block";
				dots[slideIndex-1].className += " imgopac";
		}

	</script>
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
	<form name="form1" action="payment1.php" method="POST">
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
		<?php 
			include "conn.php";
			$product_id = @$_GET["product_id"];


			$sql = "SELECT product.*,pimgplus.* FROM product,pimgplus WHERE product.product_id = pimgplus.product_id AND product.product_id = '".$product_id."'";
			//echo $sql;

			if ($conn -> connect_error){
				die("Connection failed: ". $conn -> connect_error);
				# code...
			}else{
				mysqli_set_charset($conn,"utf8");

				$result = $conn->query($sql);
				if ($result->num_rows>0) {
		            while ($row = $result->fetch_assoc()){
		?>
		<div class="incontent">
			<div class="img-content">
				<div class="h1content"><div class="blk3"></div><p class="h1">SERIE :  <?php echo $row["product_name"];?></p></div>
				<div class="img-selected">
					<img class="mySlides" src="<?php echo $row["product_img"];?>" style="width:700px;height:500px;">
					<img class="mySlides" src="<?php echo $row["pim_img"];?>" style="width:700px;height:500px;display:none;">
				</div>
				<div class="img-choice">
					<div id="imgc" class="img-1">
						<img class="demo imgopac" src="<?php echo $row["product_img"];?>" style="width:100%;" onclick="currentDiv(1)">
					</div>
					<div id="imgc" class="img-2">
						<img class="demo" src="<?php echo $row["pim_img"];?>" style="width:100%;" onclick="currentDiv(2)">
					</div>
					<div id="imgc" style="visibility:hidden;" class="img-3"></div>
					<div id="imgc" style="visibility:hidden;" class="img-4"></div>
					<div id="imgc" style="visibility:hidden;" class="img-4"></div>
				</div>
			</div>
			<div class="add-content">
				<div class="payment">
					<div class="price1"><p class="txtprice"><?php echo $row["product_price"];?> Bath</p></div>
					<div class="price2">
						<input class="btnprice" name="product_id" type="hidden" value="<?=$product_id?>">
						<input class="btnprice" type="submit" name="buy" value="BUYNOW">
					</div>
					<div class="price3">
						<div class="paymentset">
							<i id="pms" class="fa fa-cc-visa fa-2x" aria-hidden="true"></i>
							<i style="opacity:0.5" class="fa fa-cc-mastercard fa-2x" aria-hidden="true"></i>
							<i style="opacity:0.5" class="fa fa-cc-paypal fa-2x" aria-hidden="true"></i>
							<i style="opacity:0.5" class="fa fa-cc-jcb fa-2x" aria-hidden="true"></i>
						</div>
					</div>
				</div>
				<div class="otheropt">
					<input class="opt1" type="submit" name="addbag" value="ADD TO BAG">
					<input class="opt2" type="submit" name="changeds" value="CHANGE DESIGN">
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
</body>
</html>