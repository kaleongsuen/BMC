<!--register page for visitors-->
<!--php to communicate with database-->
<?php
//connect to database
$host = 'localhost';
$user  = 'root';
$pass = 'password';
$db = 'bmc_db';
$uniEmail = 1;
$isNumber = 1;
$isEmail = 1;
$accType = 1;

$con = mysqli_connect($host, $user, $pass, $db);
if ($con)
	#echo "successfully connected to db";

//Email Subribe
	if (isset($_POST['register_btn'])){
#echo 'entered btn';
		if (is_numeric($_POST['phone'])){
			$isNumber = 1;
			$array = explode("@", $_POST['email']);

			if ($array[0] != null && $array[1] != null && $array[2] == null){
				$isEmail = 1;

				$name = mysqli_real_escape_string($con, $_POST['name']);
				$phone = mysqli_real_escape_string($con, $_POST['phone']);
				$password = mysqli_real_escape_string($con, $_POST['password']);
				$email =  mysqli_real_escape_string($con, $_POST['email']);
				$boo = 2;
				#$password = md5($password);

				if (isset($_POST['reg_type'])){
					$type = mysqli_real_escape_string($con, $_POST['reg_type']);
					if(strcmp($type, 'buyer')==0){
						$boo = 1;
					}
					else if(strcmp($type, 'seller')==0){
						$boo = 0;
					}
					$sql = "SELECT * FROM users Where email = '$email'";
					$result = mysqli_query($con, $sql);
					if ($row = mysqli_fetch_assoc($result)){
						$uniEmail = 0;
					}
					else {
						$sql = "INSERT INTO users (username, email, password, phone, isBuyer) VALUES ('$name', '$email', '$password', '$phone', '$boo')";
						mysqli_query($con, $sql);
						$uniEmail = 2;
					}
				}
				else{
					$accType = 0;
				}
			}
			else{
				$isEmail = 0;
			}
		}
		else{
			$isNumber = 0;
		}
	}
	?>

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
		<!--- start-rate---->
		<script src="js/jstarbox.js"></script>
		<link rel="stylesheet" href="css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
		<script type="text/javascript">
			jQuery(function() {
				jQuery('.starbox').each(function() {
					var starbox = jQuery(this);
					starbox.starbox({
						average: starbox.attr('data-start-value'),
						changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
						ghosting: starbox.hasClass('ghosting'),
						autoUpdateAverage: starbox.hasClass('autoupdate'),
						buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
						stars: starbox.attr('data-star-count') || 5
					}).bind('starbox-value-changed', function(event, value) {
						if(starbox.hasClass('random')) {
							var val = Math.random();
							starbox.next().text(' '+val);
							return val;
						} 
					})
				});
			});
		</script>
		<!---//End-rate---->
	</head>
	<body>
		<!--header-->
		<div class="header">
			<div class="container">
				<div class="head">
					<div class=" logo">
						<a href="index.php"><img src="images/logo.png" alt=""></a>	
					</div>
				</div>
			</div>
			<div class="header-top">
				<div class="container">
					<div class="col-sm-5 col-md-offset-2  header-login">
						<ul >
							<li><a href="login.php">Login</a></li>
							<li><a href="register.php">Register</a></li>
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
									<li><a class="color" href="index.php">Home</a></li>

									<li class="dropdown mega-dropdown active">
										<a class="color" href="hotitem.php">Hot items</a></li>				
									</li>
									<li class="dropdown mega-dropdown active">
										<a class="color2" href="#" class="dropdown-toggle" data-toggle="dropdown">By categories<span class="caret"></span></a>				
										<div class="dropdown-menu mega-dropdown-menu">
											<div class="menu-top">
												<div class="col1">
													<div class="h_nav">
														<h4>Health & Beauty</h4>
														<ul>
															<li><a href="product.php?category=Hair">Hair</a></li>
															<li><a href="product.php?category=Nail">Nail</a></li>
															<li><a href="product.php?category=Body">Body</a></li>
															<li><a href="product.php?category=Skin care">Skin care</a></li>
															<li><a href="product.php?category=Makeup">Makeup</a></li>
															<li> </li>
														</ul>	
													</div>							
												</div>
												<div class="col1">
													<div class="h_nav">
														<h4>Fashion</h4>
														<ul>
															<li><a href="product.php?category=Tops">Tops</a></li>
															<li><a href="product.php?category=Bottoms">Bottoms</a></li>
															<li><a href="product.php?category=Coats and Jackets">Coats & Jackets</a></li>
															<li><a href="product.php?category=Bags and Wallet">Bags & Wallet</a></li>
															<li><a href="product.php?category=Shoes">Shoes</a></li>
															<li><a href="product.php?category=Accessories">Accessories</a></li>
															<li> </li>
														</ul>	
													</div>							
												</div>
												<div class="col1">
													<div class="h_nav">
														<h4>Home & Family</h4>
														<ul>
															<li><a href="product.php?category=Toys">Toys</a></li>
															<li><a href="product.php?category=Board Games">Board Games</a></li>
															<li><a href="product.php?category=Lifestyle">Lifestyle</a></li>
															<li><a href="product.php?category=Books">Books</a></li>
															<li> </li>
														</ul>	

													</div>							
												</div>
												<div class="col1">
													<div class="h_nav">
														<h4>Digital & Electronics</h4>
														<ul>
															<li><a href="product.php?category=Photography">Photography</a></li>
															<li><a href="product.php?category=Computer">Computer</a></li>
															<li><a href="product.php?category=Smartphone">Smartphone</a></li>
															<li><a href="product.php?category=Music">Music</a></li>
															<li> </li>
														</ul>	
													</div>							
												</div>
											</div>                  
										</div>				
									</li>
									<li><a class="color4" href="about_us.html">About Us</a></li>
									<li ><a class="color6" href="contact.php">Contact Us</a></li>
								</ul>
							</div>
							<!-- /.navbar-collapse -->

						</nav>
					</div>
					<div class="col-sm-2 search-right">
						<ul class="heart">
							<li><a class="play-icon popup-with-zoom-anim" href="#small-dialog"><i class="glyphicon glyphicon-search"> </i></a></li>
						</ul>
						
						<div class="clearfix"> </div>

						<!----->
						<!---pop-up-box---->					  
						<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
						<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
						<!---//pop-up-box---->
						<div id="small-dialog" class="mfp-hide">
							<div class="search-top">
								<div class="login-search">
									<form method="get" action="search.php">
										<input type="submit" value="">
										<input type="text" name="keyword" value="Search.." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search..';}">
									</form>		
								</div>
								<p></p>
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
					<div class="clearfix"></div>
				</div>	
			</div>	
		</div>
		<!--banner-->
		<div class="banner-top">
			<div class="container">
				<h1>Register</h1>
				<em></em>
				<h2><a href="index.php">Home</a><label>/</label>Register</h2>
			</div>
		</div>
		<!--login-->
		<div class="container">
			<div class="login">
				<form method="post" action="register.php">
					<div class="col-md-6 login-do">
						<?php
						if ($isNumber == 0)
							echo "<h4 style=\"color:#FF6C6C;\"c>Please enter a correct phone number!</h4><br>";
						if ($isEmail == 0)
							echo "<h4 style=\"color:#FF6C6C;\"c>Please enter a correct email!</h4><br>";
						if ($uniEmail == 0)
							echo "<h4 style=\"color:#FF6C6C;\"c>This email has already been registered!</h4><br>";
						if ($accType == 0)
							echo "<h4 style=\"color:#FF6C6C;\"c>Please select buyer or seller!</h4><br>";
						else if ($uniEmail == 2) 
							echo "<h4 style=\"color:#FF6C6C;\"c>Registered Successfully!</h4><br>"
						?>
						<div class="login-mail">
							<input type="text" name="name" placeholder="Name" required="">
							<i  class="glyphicon glyphicon-user"></i>
						</div>
						<div class="login-mail">
							<input type="text" name="phone" placeholder="Phone Number" required="">
							<i  class="glyphicon glyphicon-phone"></i>
						</div>
						<div class="login-mail">
							<input type="text" name="email" placeholder="Email" required="">
							<i  class="glyphicon glyphicon-envelope"></i>
						</div>
						<div class="login-mail">
							<input type="password" name="password" placeholder="Password" required="">
							<i class="glyphicon glyphicon-lock"></i>
						</div>
						<div class="news-letter " >
							<label class="checkbox1"><input type="radio" name="reg_type" value="buyer"><i> </i>Buyer &nbsp;</label>

							<label class="checkbox1"><input type="radio" name="reg_type" value="seller"><i> </i>Seller</label>
						</div>
						<label class="hvr-skew-backward">
							<input type="submit" name="register_btn" value="Submit">
						</label>

					</div>
					<div class="col-md-6 login-right">
						<h3>Completely Free Account</h3>

						<p>You can register for free!
							<br>
							<br>
							Registered? Login here!
						</p>
						<a href="login.php" class="hvr-skew-backward">Login</a>

					</div>

					<div class="clearfix"> </div>
				</form>
			</div>

		</div>

		<!--//login-->

		<!--brand-->
		<div class="container">
			<div class="brand">
				<!-- <div class="col-md-3 brand-grid">
					<img src="images/ic.png" class="img-responsive" alt="">
				</div>
				<div class="col-md-3 brand-grid">
					<img src="images/ic1.png" class="img-responsive" alt="">
				</div>
				<div class="col-md-3 brand-grid">
					<img src="images/ic2.png" class="img-responsive" alt="">
				</div>
				<div class="col-md-3 brand-grid">
					<img src="images/ic3.png" class="img-responsive" alt="">
				</div> -->
				<div class="clearfix"></div>
			</div>
		</div>
		<!--//brand-->

		<!--//content-->
		<!--//footer-->
		<div class="footer">
			<div class="footer-middle">
				<div class="container">
					<div class="col-md-3 footer-middle-in">
						<a href="index.php"><img src="images/log.png" alt=""></a>
						<p>Anything you want from the other side is available here. Jump out of the geographical limits together with us. You would find all oversea goods here.</p>
					</div>
					
					<div class="col-md-3 footer-middle-in">
						<h6>Information</h6>
						<ul class=" in">
							<li><a href="login.php">Login</a></li>
							<li><a href="register.php">Register</a></li>
						</ul>
						<ul class=" in">
							<li> </li>
						</ul>
						<ul class="in in1">
							<li><a href="about_us.html">&nbspAbout Us</a></li>
							<li><a href="contact.php">&nbspContact Us </a></li>
						</ul>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-3 footer-middle-in">
						<h6>Tags</h6>
						<ul class="tag-in">
							<li><a href="search.php?keyword=Computer">Computer</a></li>
							<li><a href="search.php?keyword=Camera">Camera</a></li>
							<li><a href="search.php?keyword=Samsung">Samsung</a></li>
							<li><a href="search.php?keyword=Starbucks">Starbucks</a></li>
							<li><a href="search.php?keyword=GoPro">GoPro</a></li>
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

	</body>
	</html>