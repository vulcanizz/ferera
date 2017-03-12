<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/payment1.css">
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
	<form name="form1" action="payment1_api.php" method="POST">
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
				<div class="h1content"><div class="blk3"></div><p class="h1">PAYMENT</p></div>
				<div class="h2content"><div class="blk4"></div><p class="h2" style="font-size:14px;">INSERT YOUR LOCATION TO RECIEVE</p></div>
				<div class="img-selected">
					<div class="wrapperc">
						<div class="group">      
						    <input id="inputstyle1" type="text" name="fname" required>
						    <span class="highlight"></span>
						    <span class="bar"></span>
						    <label class="labels1">FIRSTNAME</label>
					    </div>
					    <div class="group">      
						    <input id="inputstyle1" type="text" name="lname" style="margin-left: 30px;" required>
						    <span class="highlight"></span>
						    <span class="bar3"></span>
						    <label class="labels1" style="margin-left: 30px;">LASTNAME</label>
					    </div>
					</div>
					<div class="wrapperc">
						<div class="group">      
						    <input id="inputstyle1" type="text" name="postcode" required>
						    <span class="highlight"></span>
						    <span class="bar"></span>
						    <label class="labels1">POSTCODE</label>
					    </div>
					    <div class="group">      
						    <input id="inputstyle1" type="text" name="phone" style="margin-left: 30px;" required>
						    <span class="highlight"></span>
						    <span class="bar3"></span>
						    <label class="labels1" style="margin-left: 30px;">PHONE</label>
					    </div>
					</div>
					<div class="wrapperc">
						<div class="group" style="margin-top:77px;">      
						    <textarea id="inputstyle1" style="width:580px;" type="text" name="address" rows="2"  required></textarea>
						    <span class="highlight"></span>
						    <span class="bar2"></span>
						    <label class="labels1">ADDRESS</label>
					    </div>
					</div>
					<img class="stepstyle" src="img/paymentstep1.png" alt="step1" style="width:500px;height:82px;">
				</div>
			</div>
			<?php
				include"conn.php";

				$product_id = $_POST["product_id"];
				
				$sql = "SELECT * FROM product WHERE product_id = '".$product_id."'";
				if ($conn -> connect_error){
					die("Connection failed: ". $conn -> connect_error);
					# code...
				}else{
					mysqli_set_charset($conn,"utf8");

					$result = $conn->query($sql);
				if ($result->num_rows>0) {
		            while ($row = $result->fetch_assoc()){
			?>
			<div class="add-content">
				<div class="payment">
					<div class="price1"><p class="txtprice"><?php echo $row["product_price"];?> Bath</p></div>
					<div class="price2">
						<input class="btnprice" name="product_id" type="hidden" value="<?=$product_id?>">
						<input class="btnprice" type="submit" name="next" value="NEXT">
					</div>
					<div class="price3">
						<div class="paymentset">
							<i id="pms" class="fa fa-cc-visa fa-2x" aria-hidden="true"></i>
							<i class="fa fa-cc-visa fa-2x" aria-hidden="true"></i>
							<i class="fa fa-cc-visa fa-2x" aria-hidden="true"></i>
							<i class="fa fa-cc-visa fa-2x" aria-hidden="true"></i>
						</div>
					</div>
				</div>
				<div class="otheropt">
					<input class="opt2" type="submit" name="back" value="BACK">
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