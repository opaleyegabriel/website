<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Realtor a Real Estates and Builders Category Flat bootstrap Responsive website Template | Home :: w3layouts</title>
<!--mobile apps-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Realtor Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- fonts -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" media="all" rel="stylesheet" type="text/css">
<link href='//fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Nunito:400,300,700' rel='stylesheet' type='text/css'>
<!-- /fonts -->
<!-- css files -->
<link href="<?php echo URL ?>public/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo URL ?>public/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo URL ?>public/css/progressbar.css" rel="stylesheet" type="text/css" media="all"/>
<link href="<?php echo URL ?>public/css/team.css" rel="stylesheet" type="text/css" media="all"/>
<link href="<?php echo URL ?>public/css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- /css files -->
<!-- js files -->
<script src="<?php echo URL ?>public/js/modernizr.custom.js"></script>
<!-- /js files -->
</head>
<?php
require_once  ('models/about_model.php');
$myData= new About_model();
$displaywebsitebg=($myData->getwebsitebg());
foreach ($displaywebsitebg as $key => $value) {
	$websitebg=$value['background'];
}
?>
<body class="extra-page" style="background:url(<?php echo $websitebg; ?>)no-repeat;     background-attachment: fixed;
    background-position: center;
    background-size: 100% 100%;
    -webkit-background-size: 100% 100%;
    -moz-background-size: 100% 100%;
    -o-background-size: 100% 100%;" >
<!-- navigation -->
<section class="navigation">
	<div class="navbar-wrapper">
		<div class="container">
			<nav class="navbar navbar-inverse navbar-static-top">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="<?php echo URL; ?>index" id="hideandshow" ><h1>DreamCityHES</h1></a>
						<a class="navbar-brand" href="<?php echo URL; ?>index"><h1><img src="<?php echo URL ?>public/images/logo.png" alt="" /></h1></a>
					</div>
					<div id="navbar" class="navbar-collapse collapse">
						<ul class="nav navbar-nav navbar-right cl-effect-14">
							<li><a href="<?php echo URL; ?>index">Home</a></li>
							<li><a href="<?php echo URL; ?>about">About</a></li>
							<li><a href="<?php echo URL; ?>project">Projects</a></li>
							<li><a href="<?php echo URL; ?>blog">Blog</a></li>
							<!-- <li><a href="<?php echo URL; ?>project">Shortcodes</a></li> -->
							<li><a href="<?php echo URL; ?>contact">Contact</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
    </div>
</section>
<!-- /navigation -->
<!-- banner section -->
<section class="banner">
	<div class="banner-info">
		<h3 class="contact">Contact Us</h3>
	</div>
	<div id="slideshow-banner2">
		<ul>
			<?php
			require_once  ('models/index_model.php');
			$myData= new Index_model();
			$displayslider=($myData->getslider());
			foreach ($displayslider as $key => $value) {
				$background=$value['background'];
				echo '<li class="slideshow-item"><img src="'.$background.'" alt="" /></li>';

			}
			?>
		</ul>
	</div>
</section>
<!-- google map -->
<section class="about-header">
	<div class="container">
		<!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a>
                    </li>
                    <li class="active">Contact</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
	</div>
</section>
<section class="contact-page-header">
	<h3 class="text-center">Locate Us Right Here</h3>
</section>
<section class="map">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<iframe class="googlemaps" src="https://maps.app.goo.gl/6AGrcnqBwoc6mYbr5" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div>
	</div>
</section>
<!-- /google map -->
<!-- contact section -->
<section class="our-contacts" id="contact">
	<h3>Contact Us</h3>
	<div class="container">
		<div class="row">
			<div class="col-lg-8 slideanim">
				<form role="form" action="<?php echo URL; ?>contact/contact" method="post" enctype="multipart/form-data">
									<div class="row">
										<div class="form-group col-lg-4">
											<input type="text" class="form-control user-name" placeholder="Your Name" name="name" required/>
										</div>
										<div class="form-group col-lg-4">
											<input type="email" class="form-control mail" placeholder="Your Email" name="email" required/>
										</div>
										<div class="form-group col-lg-4">
											<input type="tel" class="form-control pno" placeholder="Your Phone Number" name="phone" required/>
										</div>
										<div class="clearfix"></div>
										<div class="form-group col-lg-12">
											<textarea class="form-control" rows="6" placeholder="Your Message" name="message" required/></textarea>
										</div>
										<div class="form-group col-lg-12">
											<button type="submit" href="#" class="btn-outline">Submit</button>
										</div>
									</div>
								</form>
			</div>
			<div class="col-lg-4">
				<div class="contact-details">
					<h4>Get In Touch</h4>
					<div class="contact-info">
						<div class="address">
							<i class="glyphicon glyphicon-globe"></i>
							<?php
							require_once  ('models/index_model.php');
							$myData= new Index_model();
							$displayaddress=($myData->getaddress());
							foreach ($displayaddress as $key => $value) {
								$address=$value['address'];
								echo '<p class="p3" style="padding-bottom:20px;  display:block; margin: -27px 0 15px 80px; word-wrap: break-word;overflow:hidden; ">'.$address.'  ,</p>';
							}
							?>


							<p class="p4">Nigeria</p>
						</div>
						<div class="phone">
							<i class="glyphicon glyphicon-phone-alt"></i>
							<?php
							require_once  ('models/index_model.php');
							$myData= new Index_model();
							$displayphone=($myData->getphone());
							foreach ($displayphone as $key => $value) {
								$phone=$value['phone'];
								echo '<p class="p3">'.$phone .',</p>';
							}
							?>

							<!-- <p class="p4">+00 1010101010</p> -->
						</div>
						<div class="email-info">
							<i class="glyphicon glyphicon-envelope"></i>
							<?php
							require_once  ('models/index_model.php');
							$myData= new Index_model();
							$displayemail=($myData->getemail());
							foreach ($displayemail as $key => $value) {
								$email=$value['email'];
								echo '<p class="mail"><a href="mailto:'.$email.'">'.$email.'</a></p>';
							}
							?>
						</div>
					</div>
					<div class="footer-links">
						<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
							<li><a href="#"><i class="fa fa-youtube"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /contact section -->
<section class="footer">
	<p>© 2023 DreamcityHes. All Rights Reserved </p>
</section>
<a href="#0" class="cd-top">Top</a>
<!-- js files -->
<script src="<?php echo URL ?>public/js/jquery.min.js"></script>
<script src="<?php echo URL ?>public/js/bootstrap.min.js"></script>
<script src="<?php echo URL ?>public/js/SmoothScroll.min.js"></script>
<!-- js for banner -->
<script type="text/javascript" src="<?php echo URL ?>public/js/jquery.slide.js"></script>
<script type="text/javascript">
	$('#slideshow-banner2').slide({
		cdTime : 5000,
	    controllerLeftButton : "<?php echo URL ?>public/images/left.png",
	    controllerRightButton : "<?php echo URL ?>public/images/right.png"
	});
</script>
<!-- /js for banner -->
<!-- js for skill section -->
<script src="<?php echo URL ?>public/js/progressbar.js"></script>
<script>
    // Display the progress bar calling progressbar.js
	$('.progressbarPhp').progressBar({
		shadow : true,
		percentage : false,
		animation : true,
		animateTarget : true,
		barColor : "rgb(86, 79, 77)",
	});
	//Menu
	$(".spinDown").click(function() {
		var target = $(this).data("target");
		var scrollFix = -80;
		target = "#" + target;
		$("html,body").animate({
			scrollTop : $(target).offset().top + scrollFix
		}, 1000);
		return false;
	});
</script>
<!-- /js for skill section -->
<script src="<?php echo URL ?>public/js/main.js"></script>
<!-- /js files -->
</body>
</html>
