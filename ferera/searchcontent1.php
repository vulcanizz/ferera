<?php session_start(); ?>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/searchcontent1.css">
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
				<div class="h1content"><div class="blk3"></div><p class="h1">PAYMENT</p></div>
				<div class="h2content">
					<div class="blk4"></div>
					<p class="h2" style="font-size:14px;">FILTER</p>
				</div>
			</div>
		</div>
		<div class="filterlist">
			<div style="margin-left:70px;" class="payment">
				<div class="price1">
					<div class="topicfilter"><p class="txtprice">CATEGORY</p></div>
					<div class="tp1">
						<label>
      						<input type="checkbox" name="category1" class="option-input checkbox posit" value="PURSE" CHECKED/>
      						<p class="txttp">PURSE</p>
						</label>
					</div>
					<div class="tp2">
						<label>
      						<input type="checkbox" name="category2" class="option-input checkbox posit" value="WALLET"/>
      						<p class="txttp">WALLET</p>
						</label>
					</div>
					<div class="tp3">
						<label>
      						<input type="checkbox" name="category3" class="option-input checkbox posit" value="HAT"/>
      						<p class="txttp">HAT</p>
						</label>
					</div>
					<div class="tp1">
						<label>
      						<input type="checkbox" name="category4" class="option-input checkbox posit" value="CLOTH"/>
      						<p class="txttp">CLOTH</p>
						</label>
					</div>
					<div class="tp2">
						<label>
      						<input type="checkbox" name="category5" class="option-input checkbox posit" value="ACCESSORIES"/>
      						<p class="txttp">ACCESSORIES</p>
						</label>
					</div>

				</div>
			</div>
			<div class="payment">
				<div class="price1">
					<div class="topicfilter"><p class="txtprice">SERIES</p></div>
					<div class="tp1">
						<label>
      						<input type="checkbox" name="serie1" class="option-input checkbox posit" value="00X" CHECKED/>
      						<p class="txttp">00X</p>
						</label>
					</div>
					<div class="tp2">
						<label>
      						<input type="checkbox" name="serie2" class="option-input checkbox posit" value="00Y"/>
      						<p class="txttp">00Y</p>
						</label>
					</div>
					<div class="tp3">
						<label>
      						<input type="checkbox" name="serie3" class="option-input checkbox posit" value="00Z"/>
      						<p class="txttp">00Z</p>
						</label>
					</div>
					<div class="tp1">
						<label>
      						<input type="checkbox" name="serie4" class="option-input checkbox posit" value="00A"/>
      						<p class="txttp">00A</p>
						</label>
					</div>
					<div class="tp2">
						<label>
      						<input type="checkbox" name="serie5" class="option-input checkbox posit" value="00S"/>
      						<p class="txttp">00S</p>
						</label>
					</div>

				</div>
			</div>
			<div class="payment">
				<div class="price1">
					<div class="topicfilter"><p class="txtprice">COLLECTION</p></div>
					<div class="tp1">
						<label>
      						<input type="checkbox" name="collection1" class="option-input checkbox posit" value="WINTER" CHECKED/>
      						<p class="txttp">WINTER</p>
						</label>
					</div>
					<div class="tp2">
						<label>
      						<input type="checkbox" name="collection2" class="option-input checkbox posit" value="SUMMER"/>
      						<p class="txttp">SUMMER</p>
						</label>
					</div>
					<div class="tp3">
						<label>
      						<input type="checkbox" name="collection3" class="option-input checkbox posit" value="FLORA"/>
      						<p class="txttp">FLORA</p>
						</label>
					</div>
					<div class="tp1">
						<label>
      						<input type="checkbox" name="collection4" class="option-input checkbox posit" value="ANIMA"/>
      						<p class="txttp">ANIMA</p>
						</label>
					</div>
					<div class="tp2">
						<label>
      						<input type="checkbox" name="collection5" class="option-input checkbox posit" value="LIMITED"/>
      						<p class="txttp">LIMITED</p>
						</label>
					</div>
				</div>
			</div>
		</div>
		<div class="otheropt">
			<input class="opt2" type="submit" name="search" value="SEARCH">
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