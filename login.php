<?php include('Connections/MyConnection.php'); ?>
<!DOCTYPE html>
<html>
<head>
<title>CLICK WHEN HUNGRY</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta property="og:title" content="Vide" />
<meta name="keywords" content="Big store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- js -->
   <script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
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
<div class="header">

		<div class="container">
			
			<div class="logo">
				<h1 ><a href="#">CLICK WHEN HUNGRY<span>The Best Canteen</span></a></h1>
			</div>
			<div class="head-t">
				<ul class="card">
					
					<li><a href="login.php" ><i class="fa fa-user" aria-hidden="true"></i>Login</a></li>
					<li><a href="adminlogin.php" ><i class="fa fa-user" aria-hidden="true"></i>AdminLogin</a></li>
					<li><a href="register.php" ><i class="fa fa-arrow-right" aria-hidden="true"></i>Register</a></li>
					
				</ul>	
			</div>
			
			<div class="header-ri">
				<ul class="social-top">
					<li><a href="#" class="icon facebook"><i class="fa fa-facebook" aria-hidden="true"></i><span></span></a></li>
					<li><a href="#" class="icon twitter"><i class="fa fa-twitter" aria-hidden="true"></i><span></span></a></li>
					<li><a href="#" class="icon pinterest"><i class="fa fa-pinterest-p" aria-hidden="true"></i><span></span></a></li>
					<li><a href="#" class="icon dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i><span></span></a></li>
				</ul>	
			</div>
		

				<div class="nav-top">
					<nav class="navbar navbar-default">
					
					<div class="navbar-header nav_2">
						<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						

					</div> 
				<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
						<ul class="nav navbar-nav ">
							<li class=" active"><a href="#" class="hyper "><span>Home</span></a></li>	
							
							<li class="dropdown ">
								<a href="#" class="dropdown-toggle  hyper" data-toggle="dropdown" ><span>Beverages<b class="caret"></b></span></a>
								<ul class="dropdown-menu multi">
									<div class="row">
										<div class="col-sm-3">
											<ul class="multi-column-dropdown">
			
												<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i><b>Mocktails</b></a></li>
												<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Forest Fire</a></li>
												<li><a href="#"> <i class="fa fa-angle-right" aria-hidden="true"></i>Vanilla Kiwi Ale</a></li>
												<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Fruit Cup</a></li>
										
											</ul>
										
										</div>
										<div class="col-sm-3">
										
											<ul class="multi-column-dropdown">
												<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i><b>Tea and Coffee</b></a></li>
												<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Estate Tea</a></li>
												<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>House Blend Tea</a></li>
												<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Single Origin Coffee</a></li>
												<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Espresso</a></li>
										
											</ul>
										
										</div>
										<div class="col-sm-3">
										
											<ul class="multi-column-dropdown">
												<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i><b>Other Beverages</b></a></li>
												<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Carbonated Water</a></li>
												<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Tonic Water</a></li>
												<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Energy Drink</a></li>
										
											</ul>
										</div>
										<div class="col-sm-3 w3l">
											<a href="#"><img src="images/nav1.jpg" class="img-responsive" alt=""></a>
										</div>
										<div class="clearfix"></div>
									</div>	
								</ul>
							</li>
							<li class="dropdown">
							
								<a href="#" class="dropdown-toggle hyper" data-toggle="dropdown" ><span>Puddings and Deserts<b class="caret"></b></span></a>
								<ul class="dropdown-menu multi multi1">
									<div class="row">
										<div class="col-sm-3">
											<ul class="multi-column-dropdown">
												<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> <b>Puddings</b> </a></li>
												<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Rice Pudding</a></li>
												<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Almond Cake</a></li>
												<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Chocolate Brownie</a></li>
										
											</ul>
											
										</div>
										<div class="col-sm-3">
											
											<ul class="multi-column-dropdown">
												<li><a href="#"> <i class="fa fa-angle-right" aria-hidden="true"></i><b>Deserts</b> </a></li>
												<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Rasmalie</a></li>
												<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Chocolate Mousse</a></li>
												<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Sundae</a></li>
										
											</ul>
											
										</div>
										<div class="col-sm-3">
											
											<ul class="multi-column-dropdown">
												<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> <b>Ice-Creams</b> </a></li>
												<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Bombay Ice-Cream</a></li>
												<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Vanilla</a></li>
												<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Butter Scotch</a></li>
										
											</ul>
										</div>
										<div class="col-sm-3 w3l">
											<a href="#"><img src="images/nav2.jpg" class="img-responsive" alt=""></a>
										</div>
										<div class="clearfix"></div>
									</div>	
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle hyper" data-toggle="dropdown" ><span>Comfort Mains<b class="caret"></b></span></a>
								<ul class="dropdown-menu multi multi2">
									<div class="row">
										<div class="col-sm-3">
											<ul class="multi-column-dropdown">
												<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Mac and Cheese</a></li>
												<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Glazed Pie</a></li>
												<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Roast Chicken Basket</a></li>
												<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Singapore Veg Laksa</a></li>
										
											</ul>
										
										</div>
										<div class="col-sm-3">
											
											<ul class="multi-column-dropdown">
												<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Rajma Masala</a></li>
												<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Chicken Lababdar</a></li>
												<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Penne all'Arrabbiata</a></li>
										
											</ul>
										
										</div>
                                        <div class="col-sm-3">
											
											<ul class="multi-column-dropdown">
												<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Farfalle Salsiccia</a></li>
										        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Risotto Gamberi</a></li>
                                                <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Singapore Veg Laksa</a></li>
											</ul>
										
										</div>
                                        
										<div class="col-sm-3 w3l">
											<a href="#"><img src="images/nav3.jpg" class="img-responsive" alt=""></a>
										</div>
										<div class="clearfix"></div>
									</div>	
								</ul>
							</li>
							
							<li class="dropdown ">
								<a href="#" class="dropdown-toggle  hyper" data-toggle="dropdown" ><span>Others<b class="caret"></b></span></a>
								<ul class="dropdown-menu multi">
									<div class="row">
										<div class="col-sm-3">
											<ul class="multi-column-dropdown">
			
												<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i><b>Burger</b></a></li>
												<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Herb Burger</a></li>
												<li><a href="#"> <i class="fa fa-angle-right" aria-hidden="true"></i>Lamb Burger</a></li>
												<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Schnitzel Burger</a></li>
										
											</ul>
										
										</div>
										<div class="col-sm-3">
										
											<ul class="multi-column-dropdown">
												<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i><b>Pizzas</b></a></li>
												<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Margherita</a></li>
												<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Vegetariana</a></li>
												<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Papperoni</a></li>
										
											</ul>
										
										</div>
										<div class="col-sm-3">
										
											<ul class="multi-column-dropdown">
												<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i><b>Chinese</b></a></li>
												<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Hakka Noodles</a></li>
												<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Schezwan Noodles</a></li>
												<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Gravy Roll</a></li>
										
											</ul>
										</div>
										<div class="col-sm-3 w3l">
											<a href="#"><img src="images/nav4.jpg" class="img-responsive" alt=""></a>
										</div>
										<div class="clearfix"></div>
									</div>	
								</ul>
							</li>
							
							<li><a href="#" class="hyper"><span>Contact Us</span></a></li>
						</ul>
					</div>
					</nav>
				</div>
					
				</div>			
</div>
  <!---->
 <!--banner-->
<div class="banner-top">
	<div class="container">
		<h3 >Login</h3>
		<h4><a href="#">Home</a><label>/</label>Login</h4>
		<div class="clearfix"> </div>
	</div>
</div>
<!--login-->

	<div class="login">
	
		<div class="main-agileits">
				<div class="form-w3agile">
					<h3>Login</h3>
					<form action="login.php" method="POST">
						
						<?php include('errors.php'); ?>

						<div class="key">
							<i class="fa fa-envelope" aria-hidden="true"></i>
							<input  type="text" value="Email" name="customer_email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required>
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="fa fa-lock" aria-hidden="true"></i>
							<input  type="password" value="Password" name="customer_pass" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required>
							<div class="clearfix"></div>
						</div>
						<button type="submit" name="login_user" class="btn"> Login</button>
							Not yet a member? <a href="register.php"><u>Sign up</u></a>
					</form>
				</div>
			</div>
		</div>
<!--footer-->
<div class="footer">
	<div class="container">
		<div class="clearfix"></div>
			<div class="footer-bottom">
				<h2 ><a href="#">CLICK WHEN HUNGRY<span>The Best Canteen</span></a></h2>
				<p class="fo-para">Click When Hungry Store is a form of electronic commerce which allows consumers to directly buy goods or services from a seller over the Internet.</p>
				<ul class="social-fo">
					<li><a href="#" class=" face"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#" class=" twi"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="#" class=" pin"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
					<li><a href="#" class=" dri"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
				</ul>
				<div class=" address">
					<div class="col-md-4 fo-grid1">
							<p><i class="fa fa-home" aria-hidden="true"></i>Delhi NCR, Meerut Road, Ghaziabad 201206, India.</p>
					</div>
					<div class="col-md-4 fo-grid1">
							<p><i class="fa fa-phone" aria-hidden="true"></i>+91 8865079857 , +91 7900607337</p>	
					</div>
					<div class="col-md-4 fo-grid1">
						<p><i class="fa fa-envelope-o" aria-hidden="true"></i>canteenkiet@gmail.com</a></p>
					</div>
					<div class="clearfix"></div>
					
					</div>
			</div>
		<div class="copy-right">
			<p> &copy; 2019 CLICK WHEN HUNGRY. All Rights Reserved </a></p>
		</div>
	</div>
</div>
<!-- //footer-->

</body>
</html>