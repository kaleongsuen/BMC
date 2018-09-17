<!--message page for buyer-->
<!--php to communicate with database-->

<?php

//Buyer validation
if (isset($_COOKIE["useremail"])){
	if ($_COOKIE["isBuyer"] == 0){
		header("Location: 404_buyer.php");
	}
}
else{
	header("Location: 404_buyer.php");
}

if(isset($_COOKIE["username"])){
	$username = $_COOKIE["username"];
}
else{
	$username = "Login";
}
if(isset($_COOKIE["user_id"])){
	$user_id = $_COOKIE["user_id"];
}
else{
	$user_id = NULL;
}

?>

<!--html starts-->
<!DOCTYPE html>
<html>
<head>
	<title>BuyMeChips | Worldwide Buyers</title>
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Custom Theme files -->
	<!--theme-style-->
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
	<!--//theme-style-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Shopin Responsive web template, Bootstrap Web Templates, Flat Web Templates, AndroId Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!--theme-style-->
	<link href="css/style4.css" rel="stylesheet" type="text/css" media="all" />	
	<!--//theme-style-->
	<script src="js/jquery.min.js"></script>
</head>
<body>
	<!--header-->
	<div class="header">
		<div class="container">
			<div class="head">
				<div class=" logo">
					<a href="buyer_index.php"><img src="images/logo.png" alt=""></a>	
				</div>
			</div>
		</div>
		<div class="header-top">
			<div class="container">
				<div class="col-sm-5 col-md-offset-2  header-login">
					<ul >
						<li><a href="buyer_account_man.php"><?php echo $username?></a></li>
						<li><a href="buyer_message.php">Message</a></li>
						<li><a href="index.php">Logout</a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>

		<div class="container">

			<div class="head-top">

				<div class="col-sm-8 col-md-offset-2 h_menu4">
					<nav class="navbar nav_bottom" role="navigation">

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
							<ul class="nav navbar-nav nav_1">
								<li><a class="color" href="buyer_index.php">Home</a></li>

								<li class="dropdown mega-dropdown active">
									<a class="color" href="buyer_hotitem.php">Hot items</a></li>				
								</li>
								<li class="dropdown mega-dropdown active">
									<a class="color2" href="#" class="dropdown-toggle" data-toggle="dropdown">By categories<span class="caret"></span></a>				
									<div class="dropdown-menu mega-dropdown-menu">
										<div class="menu-top">
											<div class="col1">
												<div class="h_nav">
													<h4>Health & Beauty</h4>
													<ul>
														<li><a href="buyer_product.php?category=Hair">Hair</a></li>
														<li><a href="buyer_product.php?category=Nail">Nail</a></li>
														<li><a href="buyer_product.php?category=Body">Body</a></li>
														<li><a href="buyer_product.php?category=Skin care">Skin care</a></li>
														<li><a href="buyer_product.php?category=Makeup">Makeup</a></li>
														<li> </li>
													</ul>	
												</div>							
											</div>
											<div class="col1">
												<div class="h_nav">
													<h4>Fashion</h4>
													<ul>
														<li><a href="buyer_product.php?category=Tops">Tops</a></li>
														<li><a href="buyer_product.php?category=Bottoms">Bottoms</a></li>
														<li><a href="buyer_product.php?category=Coats and Jackets">Coats & Jackets</a></li>
														<li><a href="buyer_product.php?category=Bags and Wallet">Bags & Wallet</a></li>
														<li><a href="buyer_product.php?category=Shoes">Shoes</a></li>
														<li><a href="buyer_product.php?category=Accessories">Accessories</a></li>
														<li> </li>
													</ul>	
												</div>							
											</div>
											<div class="col1">
												<div class="h_nav">
													<h4>Home & Family</h4>
													<ul>
														<li><a href="buyer_product.php?category=Toys">Toys</a></li>
														<li><a href="buyer_product.php?category=Board Games">Board Games</a></li>
														<li><a href="buyer_product.php?category=Lifestyle">Lifestyle</a></li>
														<li><a href="buyer_product.php?category=Books">Books</a></li>
														<li> </li>
													</ul>	

												</div>							
											</div>
											<div class="col1">
												<div class="h_nav">
													<h4>Digital & Electronics</h4>
													<ul>
														<li><a href="buyer_product.php?category=Photography">Photography</a></li>
														<li><a href="buyer_product.php?category=Computer">Computer</a></li>
														<li><a href="buyer_product.php?category=Smartphone">Smartphone</a></li>
														<li><a href="buyer_product.php?category=Music">Music</a></li>
														<li> </li>
													</ul>	
												</div>							
											</div>
										</div>                  
									</div>				
								</li>
								<li><a class="color4" href="buyer_about_us.php">About Us</a></li>
								<li ><a class="color6" href="buyer_contact.php">Contact Us</a></li>
							</ul>
						</div>
						<!-- /.navbar-collapse -->
					</nav>
				</div>
				<div class="col-sm-2 search-right">
					<ul class="heart">
						<li><a class="play-icon popup-with-zoom-anim" href="#small-dialog"><i class="glyphicon glyphicon-search"> </i></a></li>
					</ul>
					<div class="clearfix"></div>
					<!---pop-up-box---->					  
						<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
						<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
						<!---//pop-up-box---->
						<div id="small-dialog" class="mfp-hide">
							<div class="search-top">
								<div class="login-search">
									<form method="get" action="buyer_search.php">
										<input type="submit" value="">
										<input type="text" name="keyword" value="Search.." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search..';}">
									</form>		
								</div>
							</div>				
						</div>
						<script>
							$(document).ready(function() {
								$('.popup-with-zoom-anim').magnificPopup({
									type: 'inline',
									fixedContentPos: false,
									fixedBgPos: true,
									overflowY: 'auto',
									closeBtnInside: true,
									preloader: false,
									midClick: true,
									removalDelay: 300,
									mainClass: 'my-mfp-zoom-in'
								});

							});
						</script>
				</div>	
			</div>	
		</div>
<!--banner-->
<div class="banner-top">
	<div class="container">
		<h1>Message</h1>
		<h2><a href="buyer_index.php">Home</a><label>/</label><?php echo "Message"?></h2>
	</div>
</div>
<div class="container">
	<div class="four">
		<a href='buyer_conversation.php'><h4>Conversation</h4></a> 
		<br>
		<br>
		<a href='buyer_start_new_con.php'><h4>Start New Conversation</h4></a>
	</div>
</div>
<!--//login-->

<!--brand-->
<div class="container">
	<div class="brand">

		<div class="clearfix"></div>
	</div>
</div>
<!--//brand-->

<!--//content-->
<!--//footer-->
<div class="footer">
				<div class="footer-middle">
					<div class="container">
						<div class="col-md-4 footer-middle-in">
							<a href="index.php"><img src="images/log.png" alt=""></a>
							<p>Anything you want from the other side is available here. Jump out of the geographical limits together with us. You would find all oversea goods here.</p>
						</div>

						<div class="col-md-4 footer-middle-in">
							<h6>Information</h6>
							<ul class="in">
								<li><a href="buyer_about_us.php">About</a></li>
								<li><a href="buyer_contact.php">Contact Us</a></li>
							</ul>
							<div class="clearfix"></div>
						</div>
						<div class="col-md-4 footer-middle-in">
							<h6>Tags</h6>
							<ul class="tag-in">
								<li><a href="buyer_search?keyword=Starbucks">Starbucks</a></li>
								<li><a href="buyer_search?keyword=Computer">Computer</a></li>
								<li><a href="buyer_search?keyword=Camera">Camera</a></li>
								<li><a href="buyer_search?keyword=Samsung">Samsung</a></li>
								<li><a href="buyer_search?keyword=Gopro">Gopro</a></li>
							</ul>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="footer-bottom">
					<div class="container">
						<ul class="footer-bottom-top">
							<li><img src="images/f1.png" class="img-responsive" alt=""></li>
						<li><img src="images/f2.png" class="img-responsive" alt=""></li>
						<li><img src="images/f3.png" class="img-responsive" alt=""></li>
						</ul>
						<p class="footer-class">&copy; 2017 BuyMeChips. All Rights Reserved.</p>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
			<!--//footer-->
			<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
			<script src="js/simpleCart.min.js"> </script>
			<!-- slide -->
			<script src="js/bootstrap.min.js"></script>
			<!--light-box-files -->
			<script src="js/jquery.chocolat.js"></script>
			<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen" charset="utf-8">
			<!--light-box-files -->
			<script type="text/javascript" charset="utf-8">
				$(function() {
					$('a.picture').Chocolat();
				});
			</script>


		</body>
		</html>